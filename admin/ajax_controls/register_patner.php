<?php

include('../includes/database/db_controllers.php');


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$state = $_POST['state'];
$level = $_POST['level'];
$bio = $_POST['bio'];



    
$emailExists = selectAll('patners', ['Email' => $email]);
$num = count($emailExists);

if ($num >=1) {
    echo "exists";
}else{
    // echo "<script>window.location.assign('posts.php');</script>";
    echo "success";
  
    $data = [
        'Name' => $name,
        'Email' => $email,
        'Phone' => $phone,
        'State' => $state,
        'EduLevel' => $level,
        'Bio' => $bio,
        'Status' => 0,
    ];

    insert('patners', $data);

}