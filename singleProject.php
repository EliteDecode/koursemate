<?php 
include('includes/header.php'); 
include('admin/includes/database/db_controllers.php');



$post;
if(isset($_GET['id'])){
    $id = $_GET['id'];
   $post = selectOne('courses', ['id' => $id]);
}

$faculties;
$courses;
$browseFaculties = selectDistinctPage('courses', 'Course', 0 , 12);

if (isset($_GET['faculty']) && isset($_GET['department'])) {
   $filter = $_GET['faculty'];
   $term = $_GET['department'];
   $faculties = selectAll('courses', ['Faculty' => $filter, 'Status' => 1]);
   $courses = selectAll('courses',  ['Course' => $term, 'Status' => 1]);  
}
if (isset($_GET['filter']) && isset($_GET['term'])){
    $filter = $_GET['filter'];
    $project = $_GET['term'];
   
    $query = "SELECT * FROM courses WHERE Project ='$project' AND Status = 1";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

   $faculty = $row['Faculty'];
   $dpt = $row['Course'];

    //This fetchs the particular project
    $post = selectOne('courses', ['id' => $row['id']]);
    $faculties = selectAll('courses', ['Faculty' => $faculty, 'Status' => 1]);
    $courses = selectAll('courses',  ['Course' => $dpt, 'Status' => 1]);  
}

?>

<style>
.owl-dots {
    display: none !important;
}

.owl-nav {
    display: none !important;
}

.card img {
    height: 220px;
    filter: brightness(0.85);
}

@media (min-width: 0px) and (max-width: 575px) {
    .card img {
        height: 330px !important;
        filter: brightness(0.85);
    }
}
</style>
<section class=" h-min-screen">


    <div class=" py-3 ">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="rounded-md shadow-lg p-4 bg-white">
                        <div class="row ">
                            <div class='col-lg-4 col-md-4 col-sm-12 mb-3'>
                                <img src="admin/files/<?php echo $post['Photo'] ?>" class="card-img-top" alt="...">
                            </div>
                            <div class=" col-lg-8 col-md-8 col-sm-12">
                                <div class="project_info mb-3">
                                    <div>
                                        <div class="flex items-center space-x-2">
                                            <img src="assets/proj.png" alt="" width='22px'>
                                            <h5 class='text-md uppercase font-semibold '>Project</h5>
                                        </div>


                                        <h1 class='font-lighter text-gray-700 lead '
                                            style='font-size:16px; line-height:1.5rem;'>
                                            <?php echo $post['Project'] ?></h1>

                                    </div>
                                </div>
                                <div class="project_info my-3">
                                    <div>
                                        <div class="flex items-center space-x-2">
                                            <img src="assets/icons/preview.png" alt="" width='22px'>
                                            <h5 class='text-md uppercase font-semibold '>Preview</h5>
                                        </div>
                                        <h1 class='font-lighter text-gray-700 lead'
                                            style='font-size:16px; line-height:1.5rem'>
                                            <?php echo $post['Preview'] ?></h1>
                                    </div>
                                </div>
                                <div class="project_info my-3">
                                    <div>
                                        <div class="flex items-center space-x-2">
                                            <img src="assets/icons/university.png" alt="" width='22px'>
                                            <h5 class='text-md uppercase font-semibold '>Faculty/Department</h5>
                                        </div>
                                        <h1 class='font-lighter text-gray-700 lead'
                                            style='font-size:16px; line-height:1.5rem'>
                                            <span> <?php echo $post['Faculty'] ?></span>/ <span>
                                                <?php echo $post['Course'] ?></span>
                                        </h1>
                                    </div>
                                </div>
                                <div class="project_info my-3">
                                    <div>
                                        <div class="flex items-center space-x-2">
                                            <img src="assets/icons/tag.png" alt="" width='22px'>
                                            <h5 class='text-md uppercase font-semibold '>Price of Project</h5>
                                        </div>
                                        <h1 class='font-lighter text-gray-700 lead'
                                            style='font-size:16px; line-height:1.5rem'>
                                            $<?php echo number_format($post['Price']) ?>
                                        </h1>
                                    </div>
                                </div>

                                <input type="hidden" id='project_id' value="<?php echo $post['id'] ?>">
                                <input type="hidden" id='photo' value="<?php echo $post['Photo'] ?>">
                                <input type="hidden" id='topic' value="<?php echo $post['Project'] ?>">
                                <input type="number" hidden id='price' value="<?php echo $post['Price'] ?>">
                                <input type="hidden" id='faculty' value="<?php echo $post['Faculty'] ?>">
                                <input type="hidden" id='department' value="<?php echo $post['Course'] ?>">

                                <input type="hidden" hidden id='pdf' value="<?php echo $post['Pdf'] ?>">


                                <div class="project_info my-2">
                                    <div>

                                        <button class="bg-orange-600 text-white p-2 font-bold uppercase justify-center text-md btn w-100 
                                            flex items-center space-x-2" onclick='add_to_cart()' id='cart_btn'><img
                                                src="assets/icons/shopping-cart.png" alt="" width='20px'><span>Add
                                                to
                                                Cart</span></button>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="border p-4 rounded-md shadow-lg bg-white">
                        <div class="flex items-center space-x-2 border-b p-2">
                            <img src="assets/icons/university.png" alt="" width='22px'>
                            <h5 class='text-md uppercase font-bold '>Browse Departments</h5>
                        </div>
                        <ul class='p-2'>
                            <?php foreach ($browseFaculties as $browseFaculty): ?>
                            <li class=' uppercase flex items-center space-x-2 text-md my-3'> <img class='-mt-2'
                                    src="assets/icons/school.png" width='17px' alt="" style='filter: grayscale(100%);'>
                                <a href="project.php?filter=Course&term=<?php echo $browseFaculty['Course'] ?>"
                                    class='font-lighter'><?php  echo $browseFaculty['Course']?></a>
                            </li>
                            <?php  endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='p-4  my-3'>


                <div class="department ">
                    <h1 class='' style='font-size:20px'>Faculty related Projects </h1>
                    <div class='owl-carousel owl-carousel2  owl-theme'>

                        <?php foreach($faculties as $faculty): ?>
                        <div class="card " style='border-bottom:none;'>
                            <img src="admin/files/<?php echo $faculty['Photo'] ?>" class="card-img-top" alt="...">
                            <div class="p-2 text-black">
                                <h5 class="text-sm font-bold text-black my-2">
                                    <?php  echo  html_entity_decode(substr($faculty['Project'], 0, 80)). '...' ?>
                                </h5>

                                <a href="singleProject.php?id=<?php echo $faculty['id']?>&faculty=<?php echo $faculty['Faculty'] ?>&department=<?php echo $faculty['Course'] ?>"
                                    class="btn bg-orange-600 w-100 px-2 py-1 font-light capitalize text-white mt-2">view
                                    project</a>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>

                <div class="department my-3 mt-5">
                    <h1 class='' style='font-size:20px'>Departmental related Projects </h1>
                    <div class='owl-carousel  owl-theme'>

                        <?php foreach($courses as $course): ?>
                        <div class="card ">
                            <img src="admin/files/<?php echo $course['Photo'] ?>" class="card-img-top" alt="...">
                            <div class="p-2 text-black">
                                <h5 class="text-sm font-bold text-black my-2">
                                    <?php  echo  html_entity_decode(substr($course['Project'], 0, 100)). '...' ?>
                                </h5>
                                <a href="singleProject.php?id=<?php echo $faculty['id']?>&faculty=<?php echo $faculty['Faculty'] ?>&department=<?php echo $faculty['Course'] ?>"
                                    class="btn bg-orange-600 w-100 px-2 py-1 font-light capitalize text-white mt-2">view
                                    project</a>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php') ?>










<script>
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 5,
    autoplay: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true,
        },
        600: {
            items: 4,
            nav: false,
        },
        1000: {
            items: 6,
            nav: true,
            loop: false,
        },
    },
})

$('.owl-carousel2').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    autoplay: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 4,
            nav: false
        },
        1000: {
            items: 6,
            nav: true,
            loop: false
        }
    }
})
</script>