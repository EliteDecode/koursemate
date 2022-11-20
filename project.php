<?php include('includes/header.php');
include('admin/includes/database/db_controllers.php');
// if(isset($_GET['']))


$faculties;
$departments;
$filter = 3;

if (isset($_GET['filter']) && isset($_GET['term'])) {
   $filter = $_GET['filter'];
   $term = $_GET['term'];
    
   if($filter == 'Faculty'){
    $faculties = selectAllDistinct('courses','Faculty', ['Faculty' => $term, 'Status' => 1]);
   }elseif($filter == 'Course'){
    $departments = selectAllDistinct('courses', 'Course', ['Course' => $term, 'Status' => 1]);
   }
}else{
    $faculties =selectAllDistinct2('courses', 'Faculty', ['Status' => 1]);
}

?>
<style>
* {
    overflow: visible;
}

.card img {
    height: 210px;
    filter: brightness(0.85);
}

@media (min-width: 0px) and (max-width: 575px) {
    .card img {
        height: 190px !important;
        filter: brightness(0.85);
    }
}

.modal-title {
    padding: 4% 3%;
}

.filter {
    width: 20%;
    padding: 1%;
}

.error {
    border: 1px solid red;
}

.error-mark {
    display: none;
}

.show {
    display: block;
}

@media (min-width: 0px) and (max-width: 575px) {

    .filter {
        width: 45%;
        padding: 4% 2%;
    }

    .content .container {
        margin-top: 10%;
    }

    .title {
        display: block !important;
        text-align: center;
    }

    .title h1 {
        font-size: 30px !important;
        font-weight: 600;
    }

    .title img {
        width: 50px !important;
        margin: auto;
    }

    .search {
        width: 90% !important;
    }
}

.title h1 {
    font-size: 35px;
    font-weight: 600;
}

.search {
    width: 50%;
}

.modal-body a {
    width: 100%;
}
</style>
<section class="">


    <div class=" py-3 ">
        <div class="container">
            <div class="actions flex space-x-2 justify-center items-center my-5">
                <select name="" id="filter" class="filter border rounded-md custom-slate text-white"
                    onchange="checkEmpty()">
                    <option value="" disabled selected>Filter By</option>
                    <option value="Course">Department</option>
                    <option value="Faculty">Faculty</option>
                    <option value="Project">Project</option>
                </select>

                <div class="flex  items-center search px-3 py-1 justify-between rounded-md border-slate"
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="modal__toggle">
                    <div class="flex items-center space-x-4">
                        <img src="assets/search.png" alt="" width="20px" />
                        <h1 class="text-sm text-gray-600">Quick search...</h1>
                    </div>
                    <div id='error-mark' class="error-mark">
                        <img src="assets/exclaim.png" alt="" width="20px">
                    </div>
                </div>
            </div>
            <div>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="modal-title flex space-x-4 w-full items-center border rounded-md"
                                    id="staticBackdropLabel">
                                    <i class="fa fa-search text-md"></i>
                                    <input type="text" name="search" id="search" class="w-full"
                                        style="border: none; outline: none"
                                        placeholder="Search project by name, department or faculty " />
                                </div>
                            </div>
                            <div class="modal-body " id="modal-body">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                    onclick="closeModal()">
                                    Close
                                </button>
                                <button type="button" class="btn btn-primary" onclick="searchTerm()">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cards">

                <?php            
                    if( $filter == 'Faculty'): 
                  ?>
                <?php 
                   foreach($faculties as $faculty):
                    $fac = $faculty['Faculty'];
                    $courses = selectAll('courses', ['Faculty' => $fac]);
                    ?>
                <div class="">
                    <h1>Project's related to "<?php echo $fac ?>"</h1>
                    <div class="row">
                        <?php foreach ($courses as $course):  ?>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-6  mb-3">
                            <div class="card sm:p-3 p-0">
                                <img src="admin/files/<?php echo $course['Photo'] ?>" class="card-img" alt="...">
                                <div class="p-2">
                                    <h5 class="text-sm font-bold text-black my-2" style='text-transform:lowercase'>
                                        <?php  echo  html_entity_decode(substr($course['Project'], 0, 100)). '...' ?>
                                    </h5>

                                    <a href="singleProject.php?id=<?php echo $course['id']?>&faculty=<?php echo $course['Faculty'] ?>&department=<?php echo $course['Course'] ?>"
                                        class="btn bg-orange-600 w-100 px-2 py-2 font-light capitalize text-white mt-2">view
                                        project</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;  ?>
                    </div>
                </div>
                <?php endforeach; ?>

                <?php
                
                elseif($filter == 'Course'): ?>
                <?php 
                   foreach($departments as $department):
                    $dpt = $department['Course'];
                    $courses = selectAll('courses', ['Course' => $dpt]);
                    ?>


                <div class="">

                    <h1>Project's related to "<?php echo $dpt ?>"</h1>
                    <div class="row">
                        <?php foreach ($courses as $course):  ?>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-6  mb-3">
                            <div class="card sm:p-3 p-0">
                                <img src="admin/files/<?php echo $course['Photo'] ?>" class="card-img" alt="...">
                                <div class="p-2">
                                    <h5 class="text-sm font-bold text-black my-2" style='text-transform:lowercase'>
                                        <?php  echo  html_entity_decode(substr($course['Project'], 0, 100)). '...' ?>
                                    </h5>

                                    <a href="singleProject.php?id=<?php echo $course['id']?>&faculty=<?php echo $course['Faculty'] ?>&department=<?php echo $course['Course'] ?>"
                                        class="btn bg-orange-600 w-100 px-2 py-2 font-light capitalize text-white mt-2">view
                                        project</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;  ?>
                    </div>
                </div>
                <?php endforeach; ?>

                <?php  else: ?>
                <?php 
                   foreach($faculties as $faculty):
                    $fac = $faculty['Faculty'];
                    $courses = selectAll('courses', ['Faculty' => $fac]);
                    ?>


                <div class="">

                    <h1>Project's related to "<?php echo $fac ?>"</h1>
                    <div class="row">
                        <?php foreach ($courses as $course):  ?>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-6  mb-3">
                            <div class="card sm:p-3 p-0">
                                <img src="admin/files/<?php echo $course['Photo'] ?>" class="card-img" alt="...">
                                <div class="p-2">
                                    <h5 class="text-sm font-bold text-black my-2" style='text-transform:lowercase'>
                                        <?php  echo  html_entity_decode(substr($course['Project'], 0, 100)). '...' ?>
                                    </h5>

                                    <a href="singleProject.php?id=<?php echo $course['id']?>&faculty=<?php echo $course['Faculty'] ?>&department=<?php echo $course['Course'] ?>"
                                        class="btn bg-orange-600 w-100 px-2 py-2 font-light capitalize text-white mt-2">view
                                        project</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;  ?>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>



            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php') ?>



<script>
var search = document.getElementById("search");
var tooglebtn = document.getElementById('modal__toggle')
tooglebtn.setAttribute('data-bs-toggle', 'none-modal');

/* Adding a class to the element with the id of modal__toggle and error-mark. */
tooglebtn.addEventListener('click', e => {
    var filter = document.getElementById('filter').value;
    console.log(filter)
    if (filter == "") {
        const toastLiveExample = document.getElementById('liveToast')
        document.getElementById('modal__toggle').classList.add('error');
        document.getElementById('error-mark').classList.add('show');
        const toast = new bootstrap.Toast(toastLiveExample)
        toast.show()
    }
})


/* Checking if the input is empty. If it is empty, it will show an error message. */
function checkEmpty() {
    var filter = document.getElementById('filter').value
    var btnModal = document.getElementById('modal__toggle')
    btnModal.setAttribute('data-bs-toggle', 'modal');
    document.getElementById('modal__toggle').classList.remove('error');
    document.getElementById('error-mark').classList.remove('show');

    const toastLiveExample = document.getElementById('liveToast')
    const toast = new bootstrap.Toast(toastLiveExample)

    toast.hide()
}


$("#search").keyup(function() {
    var searchTerm = search.value
    var filter = document.getElementById('filter').value;

    if (searchTerm != "") {
        $.ajax({
            url: "admin/ajax_controls/getSearchTerm__ajax.php",
            method: "post",
            data: {
                searchTerm: searchTerm,
                filter: filter
            },
            dataType: "text",
            success: function(data) {
                $('#modal-body').html(data)

            }
        });
    } else {
        $('#modal-body').html('')
    }
});

function pushText(e) {
    console.log(e.id);
    search.value = e.id;
    $('#modal-body').html('')
}

function closeModal() {
    document.getElementById("search").value = "";
}

function searchTerm() {
    var filter = document.getElementById('filter').value;
    var search = document.getElementById("search").value;

    if (filter == 'Project') {
        window.location = `singleProject.php?filter=${filter}&term=${search}`;
    } else {
        window.location = `project.php?filter=${filter}&term=${search}`;
    }

}
</script>