<?php

include('../includes/database/db_controllers.php');
include('../includes/phpmailer/sendmailSub.php');

$id = $_POST['id'];
$feedback = $_POST['feedback'];
$name = $_POST['name'];
$email = $_POST['email'];


$mailer = new SendMail();
$subject = "Application Successfull";
   
 $message = "<div style='display: block; margin: 10px auto; width: 90%; font-family: arial; color: #223b45; text-align: center;'>
 <img src='' />
 <div style='background: #fafafa; border-radius: 5px; margin: 10px 0; padding: 20px;'>
     <h3 style='font-family: arial; font-weight: 300'>Hi $name,</h3>
     <p style='font-weight: 100;'>Thank you for your interest in becoming a contributor for Koursemate. We are excited to have you on board and appreciate your willingness to share your knowledge and expertise with our community. <br />

     We have reviewed your application and are pleased to inform you that we have accepted your request to become a contributor. We believe that your skills and experience align well with our mission and values, and we look forward to working with you. <br />
     
     Please note that as a contributor, you will have access to our content creation tools, and be expected to create high-quality and informative content on a regular basis. Additionally, you will be expected to participate in our community engagement activities and provide feedback and support to our users.
     
     <br />
     Once again, welcome to the Koursemate team and we look forward to a successful collaboration.</p>
     
     <p style='font-weight: 100; font-size: 15px'>KOURSEMATE</p>
     <img src= '../../assets/logo.png' width='30%'/>
     
 </div>
 <h4 style='font-family: arial; font-weight: 100; text-align:center; font-size: 12px; '>Copyright &copy; <a href='https://demo.fybomidetravel.com' target='_blank'>App Name.</a> All rights reserved.</h4>
 </div>";
$sent = $mailer->send_mail($email, $subject, $message);
if($sent){
  $result = update('patners', $id, ['Status' => 1, 'Feedback' => $feedback ]);
   if ($result) {
     echo "success";
  }else{
    echo "error";
  }
}else{
  echo "error";
}