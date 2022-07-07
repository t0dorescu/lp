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
