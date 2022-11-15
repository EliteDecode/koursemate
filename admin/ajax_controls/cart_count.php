<?php
session_start();
include('../includes/database/db_controllers.php');

if (isset($_SESSION['users'])) {
    $email = $_SESSION['users'];
    $re = selectOne('users', ['Email' => $email]);
    $id = $re['id'];
    if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') {
        $result = selectAll('cart', ['User_id' => $id]);
        $count = count($result);
        echo $count;
    }
    
}else{
    $count = 0;

    echo $count;
}