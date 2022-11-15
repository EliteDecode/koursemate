<?php
session_start();
include('../includes/database/db_controllers.php');

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

$result = selectAll('users', ["Email" => $email]);
$num = count($result);



if ($num > 0) {
  echo 'exists';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  echo 'invalid';
}else{
    $pwd_hash = password_hash($password, PASSWORD_DEFAULT);

    $data = [
         'Fullname' => $fullname,
         'Email' => $email,
         'Pwd'=> $pwd_hash,
    ];
    $result = insert('users', $data);
    $_SESSION['users'] = $email;
    echo 'success';

}
 












    