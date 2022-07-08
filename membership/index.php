<?php

include $_SERVER['DOCUMENT_ROOT']."/php/header.php";

if (!$session['is_logged_in']) {
    redirect_home();
}

dd($session['member']);    
echo $session['is_logged_in'] ? 'membership area' : 'please login';
