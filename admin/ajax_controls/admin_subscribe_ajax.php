<?php

include('../includes/database/db_controllers.php');
include('../includes/phpmailer/sendmailSub.php');

$email = $_POST['email'];


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "invalid email";
}else{    

    $result = selectAll('subscribers', ['Email' => $email]);
    $num = count($result);

    if ($num >= 1) {
    echo "email exists";;
    }else{
   
      insert('subscribers', ['Email' => $email]);

      $mailer = new SendMail();
      $subject = "Subscription Active";
         
       $message = "<div style='display: block; margin: 10px auto; width: 90%; font-family: arial; color: #223b45; text-align: center;'>
       <img src='' />
       <div style='background: #fafafa; border-radius: 5px; margin: 10px 0; padding: 20px;'>
           <h3 style='font-family: arial; font-weight: 300'>Hi $email,</h3>
           <p style='font-weight: 100;'>Thank you for subscribing to our newsletter!, trust us to update you on the latest happenings😊</p>
           
           <p style='font-weight: 100; font-size: 15px'>BENSON CEMENT</p>
           
       </div>
       <h4 style='font-family: arial; font-weight: 100; text-align:center; font-size: 12px; '>Copyright &copy; <a href='https://demo.fybomidetravel.com' target='_blank'>App Name.</a> All rights reserved.</h4>
       </div>";
      $sent = $mailer->send_mail($email, $subject, $message);

      if($sent){
        echo "success";
      }
      
  }

}