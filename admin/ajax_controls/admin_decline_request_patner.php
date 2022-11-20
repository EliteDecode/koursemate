<?php

include('../includes/database/db_controllers.php');
include('../includes/phpmailer/sendmailSub.php');

$id = $_POST['id'];
$feedback = $_POST['feedback'];
$name = $_POST['name'];
$email = $_POST['email'];


$mailer = new SendMail();
$subject = "Application Feedback";
   
 $message = "<div style='display: block; margin: 10px auto; width: 90%; font-family: arial; color: #223b45; text-align: center;'>
 <img src='' />
 <div style='background: #fafafa; border-radius: 5px; margin: 10px 0; padding: 20px;'>
     <h3 style='font-family: arial; font-weight: 300'>Hi $name,</h3>
     <p style='font-weight: 100;'>$feedback</p>
     
     <p style='font-weight: 100; font-size: 15px'>KOURSEMATE</p>
     
 </div>
 <h4 style='font-family: arial; font-weight: 100; text-align:center; font-size: 12px; '>Copyright &copy; <a href='https://demo.fybomidetravel.com' target='_blank'>App Name.</a> All rights reserved.</h4>
 </div>";
$sent = $mailer->send_mail($email, $subject, $message);
if($sent){
  $result = update('patners', $id, ['Status' => -1, 'Feedback' => $feedback ]);
   if ($result) {
     echo "success";
  }else{
    echo "error";
  }
}else{
  echo "error";
}