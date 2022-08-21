<?php
  $content = 'Name: '. $_POST['name'] ."\nEmail: ". $_POST['email'] ."\n\nSubject: ". $_POST['subject'] ."\nContent: ". $_POST['message'] ;
  $headers = "From: Todorescu.com <support@todorescu.com>";
  $send = mail('support@todorescu.com', 'NEW FORM SUBMIT MESSAGE', $content, $headers) == 1;
    
  echo json_encode(array('valid' => $send ));

