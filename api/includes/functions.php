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
function json($data) {
    echo json_encode($data);
    die;
}

function fetch($method, $id) {
    $url = $GLOBALS['emailoctopus_api_url'] . '/' . $method . '/'.$id.'?api_key=' . $GLOBALS['emailoctopus_api_key'];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL,$url);
    
    $result=curl_exec($ch);
    return json_decode($result, true);
}

function post($method, $id, $subMethod, $params) {
    $url = $GLOBALS['emailoctopus_api_url'] . '/' . $method . '/'.$id.'/' . $subMethod;
    echo $url;die;
    // https://emailoctopus.com/api/1.6/lists/:listId/contacts
}
