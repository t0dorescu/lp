<?php
  $isDev = (
    $_SERVER['SERVER_NAME'] == 'dev.todorescu.com' || 
    $_SERVER['SERVER_NAME'] == 'localhost' ||
    $_SERVER['SERVER_NAME'] == '127.0.0.1'
  );

  function php_root() {
    return $_SERVER['DOCUMENT_ROOT']."/";
  }
  function root() {
    return $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/';
  }
  function v_lp() {
    return '?v='.$GLOBALS['version_lp'];
  }