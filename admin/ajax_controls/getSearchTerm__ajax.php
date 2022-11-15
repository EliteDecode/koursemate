<?php  
include('../includes/database/db_controllers.php');

$searchTerm = $_POST['searchTerm'];
$filter = $_POST['filter'];

$results = searchTrack($searchTerm, $filter);


if($filter == 'Project'){
  foreach($results as $result){
      $project = $result['Project'];
     
 
    
     echo "
     <div class='border px-2 py-2 rounded-md mb-2 transition delay-150 duration-300 ease-in-out' id='buttons'>
     <button class='w-full uppercase text-sm flex space-x-2 items-center'
       style='background: none; outline:none' id='$project'   onclick='pushText(this)'>
       <img src='assets/tag.png' alt='' width='25px' />
       <div class='flex flex-col items-center space-y-2'>
       <h5>$project</h5>                              
        </div>
     </button>
    
      </div>";
  }
}else if($filter == 'Faculty'){
  foreach($results as $result){
    $faculty = $result['Faculty'];
  
   echo "
   <div class='border px-2 py-2 rounded-md mb-2 transition delay-150 duration-300 ease-in-out' id='buttons'>
   <button class='w-full uppercase text-sm flex space-x-2 items-center'
     style='background: none; outline:none' id='$faculty' onclick='pushText(this)'>
     <img src='assets/tag.png' alt='' width='25px' />
     <div class='flex flex-col items-center space-y-2'>
     <h5>$faculty</h5>                              
      </div>
   </button>
    </div>";
}
}else{
  foreach($results as $result){
    $course = $result['Course'];
   echo "
   <div class='border px-2 py-2 rounded-md mb-2 transition delay-150 duration-300 ease-in-out' id='buttons'>
   <button class='w-full uppercase text-sm flex space-x-2 items-center'
     style='background: none; outline:none' id='$course' onclick='pushText(this)'>
     <img src='assets/tag.png' alt='' width='25px' />
     <div class='flex flex-col items-center space-y-2'>
     <h5>$course</h5>                              
      </div>
   </button>
    </div>";
}
}