<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include 'config/config.php'; 
include 'includes/functions.php'; 

$conn = mysqli_connect( 
    $mysql_host, 
    $mysql_user, 
    $mysql_pass, 
    $mysql_db
);

$api = new Api( $conn );

if ( isset($_POST['method']) ) {
    $api->{$_POST['method']}();
}

if ( isset($_GET['method']) ) {
    $api->{$_GET['method']}();
}


class Api {
    protected $conn;

    function __construct( $conn ) {
        $this->conn = $conn;
    }

    public function test() {
        // $data = fetch('lists', '3c6d0c91-fd13-11ec-9258-0241b9615763');
        // json($data);
        
        post('lists', $GLOBALS['emailoctopus_all_members'], 'contacts', array(
            'email' => 'test@test.com'
        ));
    }

    // GET
    //////////////////////
    public function emailExists() {
        if (!isset($_GET['params'])) {
            echo json_encode( array( 'invalid' => true ) );
            die;
        }

        $email = $_GET['params']['email'];
        $query = "select * from members where email = '". $email ."'";

        $result = mysqli_query( $this->conn, $query );
        $valid = $result->num_rows > 0;

        json( array( 'valid' => $valid ) );
    }
    
    // POST
    //////////////////////
    public function register() {
        // echo json_encode( array( 'success' => false ) );die;

        $query = "insert into members (
            email, 
            password,
            plan
        )
        VALUES (
            '".$_POST['email']."', 
            '".$_POST['password']."',
            '".$_POST['plan']."'
        )";

        $success = mysqli_query($this->conn, $query);
        json( array( 'success' => $success ) );
    }
}
