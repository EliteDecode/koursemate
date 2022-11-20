<?php

include('../includes/database/db_controllers.php');



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../includes/phpmailer/libraries/PHPMailer/src/Exception.php';
require '../includes/phpmailer/libraries/PHPMailer/src/PHPMailer.php';
require '../includes/phpmailer/libraries/PHPMailer/src/SMTP.php';

$data = $_POST['projects'];
$email = $_POST['email'];
$name = $_POST['name'];
$id = $_POST['id'];



$projects = json_decode($data, true);

 


$title = 'Research Project File';
$body = "<h2 style='text-align:center'> Congratulations $name </h2>
<p  style='text-align:center'> Your payment was successful and your research
 project can be found attached on this mail. </p>

<p  style='text-align:center'>Click the link below to return home
 <br />
 <a href='http://koursemate.com?name=<?php echo $name  ?>' >Koursemate.com</a>
</p>

<h2 style='text-align:center; color: orange'> </h2>";
// $projectDetails = selectOne('cart', ['User_id' => $userid]);
// $file_name = $projectDetails['Project_pdf'];




//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
//Server settings
// $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
$mail->isSMTP(); //Send using SMTP
$mail->Host = 'babtechcomputers.com'; //Set the SMTP server to send through
$mail->SMTPAuth = true; //Enable SMTP authentication
$mail->Username = 'elite@babtechcomputers.com'; //SMTP username
$mail->Password = '12@Jkm@Jkmdaj'; //SMTP password
$mail->SMTPSecure = 'ssl'; //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port = 465; //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

//Recipients
$mail->setFrom('sirelite11@gmail.com', 'KOURSEMATE');
$mail->addAddress($email, ''); //Add a recipient
// $mail->addAddress('ellen@example.com'); //Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//Attachments


foreach($projects as $project){
$pdf = $project['pdf'];
$attachment = "../files/" . $pdf;
$mail->addAttachment($attachment);
}


// $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

//Content
$mail->isHTML(true); //Set email format to HTML
$mail->Subject = $title;
$mail->Body = $body;
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$sent = $mail->send();
if($sent){
echo " success
";
updateTransaction('transactions', $id, ['Item' => $data] );
}

} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}






?>