<?php

include('../includes/database/db_controllers.php');

$id = $_POST['id'];
$feedback = $_POST['feedback'];


 $result = update('patners', $id, ['Status' => -1, 'Feedback' => $feedback ]);

 if ($result) {
   echo "success";
}else{
  echo "error";
}