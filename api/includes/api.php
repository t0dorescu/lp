<?php

function escapeGet($selector) {
    return mysqli_real_escape_string($GLOBALS['conn'], $_GET['params'][$selector]);
}

function escapePost($selector) {
    return mysqli_real_escape_string($GLOBALS['conn'], $_POST[$selector]);
}

function eo_fetch($method, $id, $submethod, $subId) {
    $url = $GLOBALS['emailoctopus_api_url'] . '/' . $method . '/'.$id;
    if (isset($submethod)) {
        $url = $url . '/' . $submethod;
    }
    if (isset($submethod)) {
        $url = $url . '/' . $subId;
    }
    $url = $url .'?api_key=' . $GLOBALS['emailoctopus_api_key'];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL,$url);
    
    $result = curl_exec($ch);
    curl_close ($ch);

    return json_decode($result, true);
}

function eo_post($method, $id, $subMethod, $params) {
    $url = $GLOBALS['emailoctopus_api_url'] . '/' . $method . '/'.$id.'/' . $subMethod;
    $params['api_key'] = $GLOBALS['emailoctopus_api_key'];
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec($ch);
    curl_close ($ch);

    return json_decode($server_output, true);
}
