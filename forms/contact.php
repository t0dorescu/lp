<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $email = 'support@todorescu.com';
  $subject = 'NEW FORM SUBMIT MESSAGE';
  $content = 'Name: '. $name ."\nEmail: ". $email ."\n\nSubject: ". $subject ."\nContent: ". $message ;
  $headers = "From: Todorescu.com <support@todorescu.com>";
  $send = mail($email, $subject, $content, $headers) == 1;
    
  echo json_encode(array('valid' => $send ));

