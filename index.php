<?php include('includes/header_index.php');
include('admin/includes/database/db_controllers.php');

if(isset($_SESSION['users'])){
    $user = $_SESSION['users'];
}
$trends =selectPageConditionRandBlog('posts', 0, 3);
$courses = selectPageConditionRand('courses', 0 , 6);
$courses2 = selectPageCondition('courses', 0 , 6);
$reviews = selectAll('feedback', 0 , 6);

?>
<style>
/*footer */


.index_svg {
    width: 90%;
}

.container_index {
    width: 80%;
    margin: auto;
}

.styled-border {
    border-left: 4px solid #ed8936;
}

.recommeded-header {
    width: 33%;
    margin: auto;
}

.card img {
    height: 190px;
    filter: brightness(0.85);
}


.modal-title {
    padding: 4% 3%;
}

.filter {
    width: 20%;
    padding: 1.8%;

}

.main {
    background: url("assets/beams-home@95.jpg");
    background-size: cover;
    background-color: rgba(0, 0, 0, 0.4);
    background-blend-mode: overlay;
    height: 105vh;
    margin-top: -10%;
}

li a {
    font-weight: lighter;
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


.content .container {
    margin-top: 17%;
}


.search {
    width: 100%;
}

@media (min-width: 0px) and (max-width: 575px) {
    .filter {
        width: 45%;
        padding: 4% 2%;

    }

    .content .container {
        margin-top: 52% !important;
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

    .main {
        background: url("assets/beams-home@95.jpg");
        background-position: -250px 0px;
        background-size: cover;
        background-color: rgba(0, 0, 0, 0.5);
        background-blend-mode: overlay;
        height: 105vh;
        margin-top: -40%;
    }

    .recommeded-header {
        width: 80%;
        margin: auto;
    }

    .card img {
        height: 190px !important;
        filter: brightness(0.85);
    }

    .index_svg {
        width: 100% !important;
    }

    .container_index {
        width: 90%;
        margin: auto;
    }

    .apps-footer img {
        width: 25%;
    }
}
</style>
<div class="main">
    <div class="content py-3">
        <div class="container">
            <div class="col-lg-7 py-2" style="margin: auto">
                <div class="flex items-center justify-center space-x-2 title">
                    <img src="assets/idea.png" alt="" width="40px" />
                    <h1 class='text-white opacity-70'>Your research projects right in front of you</h1>
                </div>
                <div class="actions flex space-x-2 justify-center items-center mt-3">
                    <select name="" id="filter" class=" filter  rounded-md custom-slate text-white"
                        onchange="checkEmpty()" style='border:2px solid white'>
                        <option value="" disabled selected>Filter By</option>
                        <option value="Course">Department</option>
                        <option value="Faculty">Faculty</option>
                        <option value="Project">Project</option>
                    </select>

                    <div class="flex  items-center search px-3 py-1 justify-between rounded-md " data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop" id="modal__toggle" style='border:2px solid white'>
                        <div class="flex items-center space-x-4">
                            <img src="assets/search.png" alt="" width="20px" />
                            <h1 class="text-sm text-white">Quick search...</h1>
                        </div>
                        <div id='error-mark' class="error-mark">
                            <img src="assets/exclaim.png" alt="" width="20px">
                        </div>
                    </div>
                </div>

                <!--modal-->
                <!-- error Toast-->
                <div class="toast-container position-fixed  p-3 -mt-3">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header flex items-center justify-between space-x-3">
                            <img src="assets/exclaim.png" width="15px" class="rounded me-2" alt="...">
                            <strong class="me-auto">Please select a filter</strong>

                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"
                                style="outline: none;"><i class="fa fa-close"></i></button>
                        </div>

                    </div>
                </div>
                <!--error toast-->
                <!-- Modal -->
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
                <!--end modal-->
            </div>


        </div>
    </div>
</div>
<!--recormended projects-->
<div class="recommended py-4">
    <div class="container_index">
        <div class="recommeded-header text-center my-3">
            <h1 class="styled-border sm:text-3xl text-xl p-2">
                Recommended Projects
            </h1>
        </div>
        <div class="row mt-5">
            <?php foreach ($courses as $course):  ?>
            <div class="col-lg-2 col-md-2 col-sm-6 col-6  mb-3">
                <div class="card sm:p-3 p-0">
                    <img src="admin/files/<?php echo $course['Photo'] ?>" class="card-img" alt="...">
                    <div class="p-2">
                        <h5 class="text-sm font-bold text-black my-2" style='text-transform:lowercase'>
                            <?php  echo  html_entity_decode(substr($course['Project'], 0, 50)). '...' ?>
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
    <div class="container_index">
        <div class="recommeded-header text-center my-3">
            <h1 class="styled-border sm:text-3xl text-xl p-2">
                Featured Projects
            </h1>
        </div>
        <div class="row mt-5">
            <?php foreach ($courses2 as $course):  ?>
            <div class="col-lg-2 col-md-2 col-sm-6 col-6  mb-3">
                <div class="card sm:p-3 p-0">
                    <img src="admin/files/<?php echo $course['Photo'] ?>" class="card-img" alt="...">
                    <div class="p-2">
                        <h5 class="text-sm font-bold text-black my-2" style='text-transform:lowercase'>
                            <?php  echo  html_entity_decode(substr($course['Project'], 0, 50)). '...' ?>
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
</div>

<!--request for a writter-->
<div class=" py-24" style='background-color:#fafafa;'>
    <div class="container_index">
        <div class="row">
            <div class="col-md-6 sm:py-5 py-0">
                <h2 class='text-5xl'>Do you have a complex Research Project? </h2>

                <p class='font-light opacity-75'>Hire a writter from Koursemate now. click the button below to get
                    started and send us a message</p>

                <button class="btn bg-orange-600 mt-4 text-white">HIRE A WRITTER</button>
            </div>
            <div class="col-md-6 mt-5">
                <img src="assets/contact_home.svg" alt="" class='index_svg'>
            </div>
        </div>
    </div>
</div>

<!--Testimonies-->
<div class="testimonies py-5">
    <div class="container_index">
        <div class="recommeded-header text-center my-3">
            <h1 class="styled-border sm:text-3xl text-xl p-2">
                What koursematers say
            </h1>
        </div>
        <div class="owl-carousel owl-theme testimony my-5">
            <?php foreach($reviews as $review): ?>
            <div class="item p-3 shadow-inner bg-white rounded-md" style="border: 1px solid #f2f3f4">
                <div class="header space-x-3">

                    <div class="flex flex-col">
                        <h2 class="font-bold text-md text-dark"><?php echo $review['Name'] ?></h2>
                        <p class="text-xs font-semibold text-gray-600">Koursemater</p>
                    </div>
                </div>
                <div class="testimony-text">
                    <p class="my-3">
                        <i class="fa mx-2 fa-quote-left text-sm font-semibold text-gray-700"></i>
                        <span class="text-xs font-semibold text-gray-700">
                            <?php echo $review['Feedback'] ?></span>

                    </p>
                </div>
            </div>
            <?php endforeach;?>

        </div>
    </div>
</div>
<!--end Testimonies-->

<!--Patner-->
<div class=" py-24" style='background-color:#fafafa;'>
    <div class="container_index">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/cont.svg" alt="" class='index_svg'>
            </div>
            <div class="col-md-6 py-5">
                <h2 class='text-5xl sm:mt-3 mt-1'>Are you a writter or a research expert? </h2>

                <p class='font-light opacity-75'>Join our contributors forum now for amazing deals. click the button
                    below to get
                    started and send us a message</p>

                <button class="btn bg-orange-600 mt-4 text-white">GET STARTED</button>
            </div>

        </div>
    </div>
</div>

<!--blog-->
<div class="blog">
    <div class="container_index">
        <div class="recommeded-header text-center my-3">
            <h1 class="styled-border sm:text-3xl text-xl p-2">
                Featured News from Blog
            </h1>
        </div>
        <!--start of cards-->
        <div class="row">

            <?php
            foreach($trends as $post):
            $id = $post['Topic_id'];
            $post_id = $post['id'];
            $response_category = selectOne('Topic', ['id' => $id]);
          
         
            ?>
            <a href="singlePost.php?id=<?php echo $post['id'] ?>" class="col-lg-4 col-md-4 col-sm-4 cursor-pointer ">
                <div class="card mt-5 shadow shadow-md rounded-lg">
                    <img class="card-img-top rounded-lg" src="blog/admin/images/<?php echo $post['Picture']  ?>"
                        alt="Card image cap" style="height: 200px" />
                    <div class="card-body">
                        <div class="flex items-center space-x-1">
                            <h6 class="text-gray-500 font-semibold" style="font-size: 12px;">
                                <?php echo date('F j, Y', strtotime($post['DateReg'])) ?>
                            </h6>
                        </div>
                        <h1 class="font-bold text-xl my-2">
                            <?php
                        $output = strlen($post['Title']) > 45 ? substr($post['Title'],0,45)."..." : $post['Title'];
                        echo $output;
                        ?></h1>
                        </h1>




                    </div>
                </div>
            </a>

            <?php endforeach ?>
        </div>
        <button class="btn bg-orange-600 text-orange-600 bg-white border-orange-600">VISIT BLOG</button>
        <!--end of cards-->
    </div>
</div>




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

$(".testimony").owlCarousel({
    loop: true,
    margin: 8,
    autoplay: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        600: {
            items: 3,
            nav: false,
        },
        1000: {
            items: 3,
            nav: false,
            loop: true,
        },
    },
});
</script>