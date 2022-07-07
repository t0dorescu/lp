<?php

include $_SERVER['DOCUMENT_ROOT']."/php/header.php";

if (!$session['is_logged_in']) {
    echo "<script>window.location = '../'</script>";die;
}

dd($session['member']);    
echo $session['is_logged_in'] ? 'membership area' : 'please login';
