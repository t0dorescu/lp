<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include $_SERVER['DOCUMENT_ROOT']."/api/config/config.php"; 
include $_SERVER['DOCUMENT_ROOT']."/api/includes/functions.php"; 
include $_SERVER['DOCUMENT_ROOT']."/api/includes/api.php"; 

$conn = mysqli_connect( 
    $mysql_host, 
    $mysql_user, 
    $mysql_pass, 
    $mysql_db
);

if ( isset($_POST['method']) ) {
    (new Api())->{$_POST['method']}();
}
else if ( isset($_GET['method']) ) {
    (new Api())->{$_GET['method']}();
}

// mysqli_close($conn);

class Api {
    public function test() {}

    // GET
    //////////////////////
    public function email_exists() {
        validate_get($_GET);

        $email = escape_get_params('email');
        $query = "select id from members where email = '". $email ."'";

        $result = mysqli_query( $GLOBALS['conn'], $query );
        $valid = $result->num_rows > 0;

        output( array( 'valid' => $valid ) );
    }
    public function email_exists_newsletter() {
        validate_get($_GET);

        $email = escape_get_params('email');
        $query = "select id from newsletter where email = '". $email ."'";

        $result = mysqli_query( $GLOBALS['conn'], $query );
        $valid = $result->num_rows > 0;

        output( array( 'valid' => $valid ) );
    }
    public function email_deactivated() {
        validate_get($_GET);

        $email = escape_get_params('email');
        $query = "select id from members where email = '". $email ."' and status = 'deactivated'";

        $result = mysqli_query( $GLOBALS['conn'], $query );
        $valid = $result->num_rows > 0;

        output( array( 'valid' => $valid ) );
    }
    public function email_inactive() {
        validate_get($_GET);

        $email = escape_get_params('email');
        $query = "select id from members where email = '". $email ."' and status = 'inactive'";

        $result = mysqli_query( $GLOBALS['conn'], $query );
        $valid = $result->num_rows > 0;

        output( array( 'valid' => $valid ) );
    }
    public function update_member_status() {
        validate_get($_GET);

        $email = escape_get_params('email');
        $query = "select emailoctopus_id from members where email = '". $email ."' and status <> 'deactivated'";
        $result = mysqli_query( $GLOBALS['conn'], $query );

        if ($result->num_rows > 0) {
            $member = $result->fetch_assoc();
            $emailoctopus_id = $member['emailoctopus_id'];
            $response = eo_fetch('lists', $GLOBALS['emailoctopus_all_members'], 'contacts', $emailoctopus_id);
            
            if ($response['status'] === 'SUBSCRIBED') {
                $query = "update members set status = 'active' where emailoctopus_id = '".$emailoctopus_id."'";
                $result = mysqli_query( $GLOBALS['conn'], $query );
            }
            if ($response['status'] === 'PENDING') {
                $query = "update members set status = 'inactive' where emailoctopus_id = '".$emailoctopus_id."'";
                $result = mysqli_query( $GLOBALS['conn'], $query );
            }
        }

        output( array() );
    }
    public function check_login() {
        validate_get($_GET);

        $email = escape_get_params('email');
        $password = escape_get_params('password');
        $query = "select id from members where email = '". $email ."' and password = '".$password."'";

        $result = mysqli_query( $GLOBALS['conn'], $query );
        $valid = $result->num_rows > 0;

        output( array( 'valid' => $valid ) );
    }
    
    // POST
    //////////////////////
    public function register() {
        $status = 'inactive';
        $gravatar_url = escape_post('gravatar_url');
        $email = escape_post('email');
        $password = escape_post('password');
        $plan = escape_post('plan');
        $first_name = escape_post('first_name');
        $last_name = escape_post('last_name');
        $reset_password_token = bin2hex(random_bytes(16));

        $emailoctopus_response = eo_post('lists', $GLOBALS['emailoctopus_all_members'], 'contacts', array(
            'fields' => array(
                'FirstName' => $first_name,
                'LastName' => $last_name
            ),
            'tags' => array( 'new_member', $plan.'_plan' ),
            'email_address' => $email
        ));

        if ( !isset($emailoctopus_response['id']) ) {
            output(array( 'success' => false ));
        }
        
        $emailoctopus_id = $emailoctopus_response['id'];
        $emailoctopus_list = $GLOBALS['emailoctopus_all_members'];
        
        $query = "insert into members (
            gravatar_url,
            email, 
            password,
            plan,
            status,
            first_name,
            last_name,
            reset_password_token,
            emailoctopus_id,
            emailoctopus_list
        )
        VALUES (
            '".$gravatar_url."', 
            '".$email."', 
            '".$password."',
            '".$plan."',
            '".$status."',
            '".$first_name."',
            '".$last_name."',
            '".$reset_password_token."',
            '".$emailoctopus_id."',
            '".$emailoctopus_list."'
        )";

        $mysql_success = mysqli_query($GLOBALS['conn'], $query);
        output( array( 'success' => $mysql_success ) );
    }
    public function login() {
        $email = escape_post('email');
        $password = escape_post('password');
        $user_agent = escape_post('user_agent');
        $token = bin2hex(random_bytes(16));

        $query = "select id from members where email = '". $email ."' and password = '".$password."'";
        $result = mysqli_query( $GLOBALS['conn'], $query );
        
        if ( !$result->num_rows > 0 ) {
            output( array( 'success' => false ) );
        }

        $member = $result->fetch_assoc();

        $query = "insert into sessions (
            member_id,
            token, 
            user_agent
        )
        VALUES (
            '".$member['id']."', 
            '".$token."', 
            '".$user_agent."'
        )";

        $mysql_success = mysqli_query($GLOBALS['conn'], $query);
        output( array( 
            'success' => $mysql_success,
            'token' => $token 
        ));
        
    }
    public function newsletter() {
        $gravatar_url = escape_post('gravatar_url');
        $email = escape_post('email');

        $emailoctopus_response = eo_post('lists', $GLOBALS['emailoctopus_newsletter'], 'contacts', array(
            'tags' => array( 'newsletter_subscription' ),
            'email_address' => $email
        ));

        if ( !isset($emailoctopus_response['id']) ) {
            output(array( 'success' => false ));
        }
        
        $emailoctopus_id = $emailoctopus_response['id'];
        $emailoctopus_list = $GLOBALS['emailoctopus_newsletter'];

        $query = "insert into newsletter (
            gravatar_url,
            email, 
            emailoctopus_id,
            emailoctopus_list
        )
        VALUES (
            '".$gravatar_url."', 
            '".$email."', 
            '".$emailoctopus_id."',
            '".$emailoctopus_list."'
        )";

        $mysql_success = mysqli_query($GLOBALS['conn'], $query);
        output( array( 'success' => $mysql_success ) );
    }
    public function forgot_password() {
        $email = escape_post('email');

        $query = "select reset_password_token from members where email = '". $email ."'";
        $result = mysqli_query( $GLOBALS['conn'], $query );
        
        if ($result->num_rows > 0) {
            $token = $result->fetch_assoc()['reset_password_token'];
            $url = 'https://'.$_SERVER['HTTP_HOST'].'/reset-password?token='.$token; 

            $headers = "From: Todorescu.com <support@todorescu.com>\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html\r\n";
            $headers .= "Content-type: eom.todorescu.com\r\n";
            
            $subject = '🧷 Reset your password';
            $content = '
                <!doctype html>
                <html>
                    <head>
                        <title></title>
                        <style>
                            * { font-family: "Arial"; }
                            small { font-size: .5rem; }
                        </style>
                    </head>
                    <body>
                        <div style="text-align: center;">
                            <img 
                                src="https://'.$_SERVER['HTTP_HOST'].'/assets/img/tudor-todorescu.jpg" 
                                style="width: 50px;height:50px;margin: 10px auto;"
                            />
                            <h3>How to reset your password</h3>
                            <p>
                                You\'ve requested a new password. It\'s simple just click the following link and set a new one 
                                <br><br> 
                                <a href="'.$url.'">'.$url.'</a>
                            </p>
                            <br><br>
                            <small>
                                ICE STATION ZEBRA SRL<br>
                                CIF: 46266079<br>
                                REG: J1/685/08.06.2022<br>
                                Romania
                            </small>
                        </div>
                    </body>
                </html>
            ';

            $send = mail($email, $subject, $content, $headers) == 1;
            output(array('success' => $send ));
        }
        
        output(array('success' => false ));
    }
    public function reset_password() {
        $token = escape_post('token');
        $password = escape_post('password');

        $query = "select email from members where reset_password_token = '". $token ."'";
        $result = mysqli_query( $GLOBALS['conn'], $query );
        
        if ($result->num_rows > 0) {
            $query = "update members set password = '".$password."' where reset_password_token = '". $token ."'";
            $result = mysqli_query($GLOBALS['conn'], $query);

            return output(array('success' => true));
        }
        
        return output(array('success' => false));
    }

    // INTERNAL
    ///////////////////////
    public function get_session($token) {
        $session = array( 
            'is_logged_in' => false, 
            'member' => array()
        );

        if ( !$token ) {
            return output_internal($session);
        }

        $query = "select member_id from sessions where token = '". $token ."'";

        $result = mysqli_query( $GLOBALS['conn'], $query );
        $session['is_logged_in'] = $result->num_rows > 0;

        if ($session['is_logged_in']) {
            $member_id = $result->fetch_assoc()['member_id'];
            $query = "select 
                gravatar_url,
                email,
                first_name,
                last_name,
                plan 
            from members where id = '". $member_id ."'";
            
            $result = mysqli_query( $GLOBALS['conn'], $query );
            $session['member'] = $result->fetch_assoc();
        }

        return output_internal($session);
    }
    public function check_reset_token($token) {
        $query = "select email from members where reset_password_token = '". $token ."'";
        $result = mysqli_query( $GLOBALS['conn'], $query );
        
        if ($result->num_rows > 0) {
            return output_internal($result->fetch_assoc()['email']);
        }
        
        return output_internal('');
    }
}
