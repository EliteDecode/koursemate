<?php include('includes/header.php');
if(isset($_SESSION['users'])){
    $user = $_SESSION['users'];
}
?>
<style>
.modal-title {
    padding: 4% 3%;
}

.filter {
    width: 20%;
    padding: 1.8%;

}

.main {
    background: url("assets/bgbook3.jpg");
    background-position: 0px -375px;
    background-size: cover;
    background-color: rgba(0, 0, 0, 0.7);
    background-blend-mode: overlay;
    height: 82vh;
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


.content .container {
    margin-top: 10%;
}


.search {
    width: 100%;
}
</style>
<section class="main">


    <div class="content py-3">
        <div class="container">
            <div class="col-lg-7 py-2" style="margin: auto">
                <div class="flex items-center justify-center space-x-2 title">
                    <img src="assets/idea.png" alt="" width="40px" />
                    <h1 class='text-white opacity-70'>Your research projects right in front of you</h1>
                </div>
                <div class="actions flex space-x-2 justify-center items-center mt-3">
                    <select name="" id="filter" class=" filter  rounded-md custom-slate text-white"
                        onchange="checkEmpty()" style='border:2px solid gray'>
                        <option value="" disabled selected>Filter By</option>
                        <option value="Course">Department</option>
                        <option value="Faculty">Faculty</option>
                        <option value="Project">Project</option>
                    </select>

                    <div class="flex  items-center search px-3 py-1 justify-between rounded-md " data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop" id="modal__toggle" style='border:2px solid gray'>
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