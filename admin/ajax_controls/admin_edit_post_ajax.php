<?php
session_start();

include('../includes/database/db_controllers.php');

$id = $_POST['id'];
$description = $_POST['description'];
$authur = $_POST['authur'];
$topic = $_POST['topic'];
$faculty = $_POST['faculty'];
$price = $_POST['price'];
$department = $_POST['department'];
$pdf = $_FILES['pdf']['name'];
$pdf_tmp = $_FILES['pdf']['tmp_name'];
$photo = $_FILES['photo']['name'];
$photo_tmp = $_FILES['photo']['tmp_name'];
$published = $_POST['publish'];

echo $price;

$folder_pdf = '../files/'  ;
$folder_photo = '../files/'  ;


//PDF VALIDATION
$valid_extensions_pdf = array('pdf'); // valid extensions
// get uploaded file's extension
$ext_pdf = strtolower(pathinfo($pdf, PATHINFO_EXTENSION));
// can upload same pdf using rand function
$final_pdf = rand(1000,1000000).$pdf;
$substringsToRemove = ['\'', '"'];
$final_pdf = str_replace($substringsToRemove, "_", $final_pdf);
// check's valid format


//PHOTO VALIDATION
$valid_extensions_photo=  array('jpeg', 'jpg', 'png'); // valid extensions
// get uploaded file's extension
$ext_photo= strtolower(pathinfo($photo, PATHINFO_EXTENSION));
// can upload same photousing rand function
$final_photo= rand(1000,1000000).$photo;
$final_photo = str_replace($substringsToRemove, "_", $final_photo);
// check's valid format

if($photo != ""){
   if(!in_array($ext_photo, $valid_extensions_photo)){
        echo "invalid image format";
    }else if( $pdf != "" && !in_array($ext_pdf, $valid_extensions_pdf)){
        echo "invalid file format";
    }
    else{
        
        $result = selectOdd('courses', ['Project' => $topic, 'id' => $id]);
        $num = count($result);
    
    if ($num >=1) {
        echo "topic exists";
    }else{
        // echo "<script>window.location.assign('posts.php');</script>";
        echo "success";
        $path_pdf= strtolower($final_pdf); 
        $folder_pdf= $folder_pdf. $path_pdf;
        $path_photo = strtolower($final_photo); 
        $folder_photo = $folder_photo . $path_photo;
       
    $data = [
        'Authur' => $authur,
        'Project' => $topic,
        'Photo'=> $path_photo,
        'Preview' => $description,
        'Status' => $published,
        'Faculty' => $faculty,
        'Course' => $department,
        "Price" => $price,
        
       ];
        
        update('courses',$id,  $data);
        move_uploaded_file($pdf_tmp, $folder_pdf); 
        move_uploaded_file($photo_tmp, $folder_photo); 
        
    }
    
    }
}else
if($pdf != "" ){
    if(!in_array($ext_pdf, $valid_extensions_pdf)){
         echo "invalid file format";
     }else   if($photo != "" && !in_array($ext_photo, $valid_extensions_photo)){
        echo "invalid image format";
    }
     else{
         
         $result = selectOdd('courses', ['Project' => $topic, 'id' => $id]);
         $num = count($result);
     
     if ($num >=1) {
         echo "topic exists";
     }else{
         // echo "<script>window.location.assign('posts.php');</script>";
         echo "success";
         $path_pdf= strtolower($final_pdf); 
         $folder_pdf= $folder_pdf. $path_pdf;
         $path_photo = strtolower($final_photo); 
         $folder_photo = $folder_photo . $path_photo;
        
     $data = [
         'Authur' => $authur,
         'Project' => $topic,
         'Pdf'=> $path_pdf,
         'Preview' => $description,
         'Status' => $published,
         'Faculty' => $faculty,
         'Course' => $department,
         "Price" => $price,
         
        ];
         
         update('courses',$id,  $data);
         move_uploaded_file($pdf_tmp, $folder_pdf); 
         move_uploaded_file($photo_tmp, $folder_photo); 
         
     }
     
     }
 }
else{

        $result = selectOdd('courses', ['Project' => $topic, 'id' => $id]);
        $num = count($result);
    
    if ($num >=1) {
        echo "topic exists";
    }else{
        // echo "<script>window.location.assign('posts.php');</script>";
        echo "success";
    $data = [
        'Authur' => $authur,
        'Project' => $topic,
        'Preview' => $description,
        'Status' => $published,
        'Faculty' => $faculty,
        'Course' => $department,
        "Price" => $price,
       ];
        
        update('courses',$id,  $data);
      
        
    }
}
     