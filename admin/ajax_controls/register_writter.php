<?php

include('../includes/database/db_controllers.php');


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$project = $_POST['project'];
$level = $_POST['level'];
$format = $_POST['format'];


    
$emailExists = selectAll('writters', ['Email' => $email, 'Project' => $project]);
$num = count($emailExists);

if ($num >=1) {
    echo "pending";
}else{
    // echo "<script>window.location.assign('posts.php');</script>";
    echo "success";
  
    $data = [
        'Name' => $name,
        'Email' => $email,
        'Phone' => $phone,
        'Project' => $project,
        'EduLevel' => $level,
        'ProjectFormat' => $format,
        'Status' => 0,

    ];

    insert('writters', $data);

}