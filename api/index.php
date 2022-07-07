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

        $email = escape_get('email');
        $query = "select id from members where email = '". $email ."'";

        $result = mysqli_query( $GLOBALS['conn'], $query );
        $valid = $result->num_rows > 0;

        output( array( 'valid' => $valid ) );
    }
    public function email_active() {
        validate_get($_GET);

        $email = escape_get('email');
        $query = "select id from members where email = '". $email ."' and status = 'active'";

        $result = mysqli_query( $GLOBALS['conn'], $query );
        $valid = $result->num_rows > 0;

        output( array( 'valid' => $valid ) );
    }
    public function check_login() {
        validate_get($_GET);

        $email = escape_get('email');
        $password = escape_get('password');
        $query = "select id from members where email = '". $email ."' and password = '".$password."'";

        $result = mysqli_query( $GLOBALS['conn'], $query );
        $valid = $result->num_rows > 0;

        output( array( 'valid' => $valid ) );
    }
    
    // POST
    //////////////////////
    public function register() {
        $status = 'active';
        $gravatar_url = escape_post('gravatar_url');
        $email = escape_post('email');
        $password = escape_post('password');
        $plan = escape_post('plan');
        $first_name = escape_post('first_name');
        $last_name = escape_post('last_name');

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
        
        $query = "insert into members (
            gravatar_url,
            email, 
            password,
            plan,
            status,
            first_name,
            last_name,
            emailoctopus_id
        )
        VALUES (
            '".$gravatar_url."', 
            '".$email."', 
            '".$password."',
            '".$plan."',
            '".$status."',
            '".$first_name."',
            '".$last_name."',
            '".$emailoctopus_id."'
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

    // INTERNAL
    ///////////////////////
    public function get_session($token) {
        $session = array( 
            'is_logged_in' => false, 
            'member' => array()
        );

        if ( !$token ) return $session;

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

        return $session; 
    }
}
