<?php

//set_include_path(get_include_path() . ':' . '.');
require 'vendor/autoload.php';
   date_default_timezone_set('Europe/Belgrade');

   

   $subjectEmail = 'Mail from'.' '.$_POST['email'];

   if($_POST['type'] == "modal"){

    $bodyMail ='<label><b>Subject: </b></label>'.$_POST['subject'].'<br>'. 
            '<label><b>Name: </b></label>'.$_POST['name'].'<br>'.
              '<label><b>Residence: </b></label>'.$_POST['residence'].'<br>'.
              '<label><b>Telephone: </b></label>'.$_POST['telephone'].'<br>'.
              '<label><b>Interests: </b></label>'.$_POST['interests'].'<br>';
              '<label><b>Message: </b></label>'.$_POST['message'].'<br>';
            

   }else{
    $bodyMail ='<label><b>Subject: </b></label>'.$_POST['subject'].'<br>'. 
            '<label><b>Name: </b></label>'.$_POST['name'].'<br>'.
              '<label><b>Email: </b></label>'.$_POST['email'].'<br>'.
              '<label><b>Phone: </b></label>'.$_POST['phone'].'<br>'.
              '<label><b>Message: </b></label>'.$_POST['message'].'<br>';
   }


         
            

$transport = Swift_SmtpTransport::newInstance('relay-hosting.secureserver.net', 25)
  ->setUsername('jeffrey.henseler@henleyglobal.com')  
  ->setPassword('Sacha@1122');

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance($subjectEmail)
  ->setFrom(array($_POST['email'] => 'nationality-advisor.com'))
  ->setTo(array('jeffrey.henseler@henleyglobal.com' => ''))
  ->setBody($bodyMail, 'text/html');

// Send the message
$result = $mailer->send($message);

echo 'Email sent successfully';

?>