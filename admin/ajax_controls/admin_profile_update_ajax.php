<?php

session_start();

include('../includes/database/db_controllers.php');

$name = $_POST["username"];
$email = $_POST["email"];
$id = $_POST["id"];

$result = selectOdd('admin', ["Email" => $email, 'id' => $id]);

if ($result) {
    echo" email exists";
}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "invalid email";
}else{
    echo" success";
   
   $data =[
 'Name' => $name,
 'Email' => $email
   ];
   $_SESSION['admin'] = $email;

   update('admin' ,$id , $data);


}
?>