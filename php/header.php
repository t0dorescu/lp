<?php

include $_SERVER['DOCUMENT_ROOT']."/api/index.php";
$session = (new Api())->get_session($_COOKIE['token']);
