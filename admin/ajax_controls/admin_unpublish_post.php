<?php

include('../includes/database/db_controllers.php');

$id = $_POST['id'];


 $result = update('courses', $id, ['Status' => 0 ]);

 if ($result) {
   echo "success";
}else{
  echo "error";
}