<?php  

include('../database/db_controllers.php');

$searchTerm = $_POST['searchTerm'];

$results = searchTrack($searchTerm);

foreach($results as $result){
    $course = $result['Course'];
    $faculty = strlen($result['Faculty']) > 12 ? substr($result['Faculty'],0,12)."..." : $result['Faculty'];
    
   echo "
   <div class='border px-2 py-2 rounded-md mb-2 transition delay-150 duration-300 ease-in-out' id='buttons'>
   <button class='w-full uppercase text-sm flex space-x-2 items-center'
     style='background: none; outline:none' id='$course' onclick='pushText(this)'>
     <img src='assets/tag.png' alt='' width='25px' />
     <div class='flex flex-col items-center space-y-2'>
     <h5>$course (<span class='text-gray-600 text-sm'>$faculty </span>)</h5>                              
      </div>
   </button>
    </div>";
}