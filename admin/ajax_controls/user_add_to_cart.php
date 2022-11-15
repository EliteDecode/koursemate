<?php
session_start();
include('../includes/database/db_controllers.php');

$user_id = $_POST['user_id'];
$photo = $_POST['photo'];
$faculty = $_POST['faculty'];
$topic = $_POST['topic'];
$department = $_POST['department'];
$price = $_POST['price'];
$pdf = $_POST['pdf'];
$project_id = $_POST['project_id'];
$result = selectAll('cart', ["User_id" => $user_id, 'Project_id' => $project_id]);
$num = count($result);

if ($num > 0) {
  echo 'exists';
}else{
    $data = [
         'Project_pdf' => $pdf,
         'Project_photo' => $photo,
         'Project_id' => $project_id,
         'Project_faculty' => $faculty,
         'Project_topic' => $topic,
         'Project_price' => $price,
         'Project_department' => $department,
         'User_id' => $user_id,
    ];
    $result = insert('cart', $data);
    echo 'success';
}
 












    