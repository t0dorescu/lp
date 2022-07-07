<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include 'config/config.php'; 
include 'includes/functions.php'; 
include 'includes/api.php'; 

$conn = mysqli_connect( 
    $mysql_host, 
    $mysql_user, 
    $mysql_pass, 
    $mysql_db
);

$api = new Api();

if ( isset($_POST['method']) ) {
    $api->{$_POST['method']}();
}

if ( isset($_GET['method']) ) {
    $api->{$_GET['method']}();
}

class Api {
    public function test() {
        $contactId = 'e390b02b-fdd9-11ec-9258-0241b9615763';
        $data = eo_fetch('lists', $GLOBALS['emailoctopus_all_members'], 'contacts', $contactId);
        output($data);
    }

    // GET
    //////////////////////
    public function emailExists() {
        if (!isset($_GET['params'])) {
            output( array( 'invalid' => true ) );
        }

        $email = escapeGet('email');
        $query = "select * from members where email = '". $email ."'";

        $result = mysqli_query( $GLOBALS['conn'], $query );
        $valid = $result->num_rows > 0;

        output( array( 'valid' => $valid ) );
    }
    
    // POST
    //////////////////////
    public function register() {
        $gravatar_url = escapePost('gravatar_url');
        $email = escapePost('email');
        $password = escapePost('password');
        $plan = escapePost('plan');
        $first_name = escapePost('first_name');
        $last_name = escapePost('last_name');

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
            first_name,
            last_name,
            emailoctopus_id
        )
        VALUES (
            '".$gravatar_url."', 
            '".$email."', 
            '".$password."',
            '".$plan."',
            '".$first_name."',
            '".$last_name."',
            '".$emailoctopus_id."'
        )";

        $mysql_success = mysqli_query($GLOBALS['conn'], $query);
        output( array( 'success' => $mysql_success ) );
    }
}
