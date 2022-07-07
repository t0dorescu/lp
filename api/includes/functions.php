<?php

function dd($data) {
    d($data);
    die;
}
function d($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}
function output($data) {
    echo json_encode($data);
    die;
}
function escape_get($selector) {
    return mysqli_real_escape_string($GLOBALS['conn'], $_GET['params'][$selector]);
}
function escape_post($selector) {
    return mysqli_real_escape_string($GLOBALS['conn'], $_POST[$selector]);
}
function validate_get($get) {
    if (!isset($get['params'])) {
        output( array( 'invalid' => true ) );
    }
}
