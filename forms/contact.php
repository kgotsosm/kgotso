<?php

  $receiving_email_address = 'kgotsom@protonmail.com';
  $message_sent = false;
  if( isset($_POST['email']) && $_POST['email'] != '') {
    // submit the form
    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      $contact->to = $receiving_email_address;
      $contact->from_name = $_POST['name'];
      $contact->from_email = $_POST['email'];
      $contact->subject = $_POST['subject'];

      $contact->add_message( $_POST['name'], 'From');
      $contact->add_message( $_POST['email'], 'Email');
      $contact->add_message( $_POST['message'], 'Message', 10); 
      echo $contact->send();
    }
  } else {
    die( 'Please enter a valid email address');
  }
  
?>
