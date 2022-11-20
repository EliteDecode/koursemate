<?php

include('../includes/database/db_controllers.php');

$review = $_POST['review'];
$name = $_POST['name'];

echo $name;
echo $review;

$data = [
    'Feedback' => $review,
     'Name' => $name
];

 $result = insert('feedback', $data );

 if ($result) {
   echo "success";
}else{
  echo "error";
}