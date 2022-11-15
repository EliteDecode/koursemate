<?php 
session_start(); 
include('includes/header.php');
require('includes/database/db_controllers.php');
$admin = $_SESSION['admin'];
if (!isset($_SESSION['admin'])) {
    header('location:login.php');
 }
 ?>

<style>
:root {
    --blue: #171d64;
    --red: #f0513a;
    --white: #f4f3ea;
}

label {
    font-weight: 600;
}

.btn-linked-alt {
    background-color: var(--white);
    border: 1px solid var(--blue);
    color: var(--blue) !important;
    font-weight: 600;

}

.btn-linked-alt:hover,
.btn-linked-alt:focus,
.btn-styled:hover,
.btn-styled:focus {
    background-color: var(--blue);
    border: 1px solid var(--blue);
    color: var(--white) !important;
}

.form-control:focus {
    border: 1px solid var(--blue);
    outline: 1px solid var(--blue);
}

.form-group {
    margin-top: 1%;
    margin-bottom: 0%;
}

.invalid-feedback {
    position: absolute;
    margin-top: -1% !important;
}
</style>

<?php include ('nav.php') ?>

<body>
    <div class="wrap h-min-screen" style="background:#F9F9F9;  overflow-x:hidden">
        <div class="row">
            <div class="col-md-2 col-lg-2 col-xl-2">
                <?php include('sidenav.php') ?>
            </div>
            <div class="col-md-10 col-lg-10 col-xl-10 ">

                <?php if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $result = selectOne('courses', ['id' => $id]);
                        $faculty = $result['Faculty'];
                        $department = $result['Course'];
                        $project = $result['Project'];
                        $preview = $result['Preview'];
                        $id = $result['id'];
                        $pdf = $result['Pdf'];
                        $photo = $result['Photo'];
                        $name = $result['Authur'];
                        $price = $result['Price'];

                     
                        }?>
                <div class="container mt-3 ">

                    <form id='post_form' enctype="multipart/form-data" onsubmit="return false"
                        class="border bg-white py-1 px-2 md:py-4 md:px-5 shadow-md rounded-md mb-5">
                        <div class="flex items-center justify-between my-4">
                            <div class="flex items-center space-x-2">
                                <h6 class="font-bold uppercase text-md text-red-600">Edit Project</h6>
                                <img src="../assets/icons/edit2.png" alt="" style="width:20px">
                            </div>
                            <div>
                                <a href="files/<?php echo $pdf ?>"
                                    class="btn bg-orange-600 font-normal text-xs px-2 py-1 text-white">View
                                    Pdf</a>
                            </div>
                        </div>
                        <div class="row mb-3">


                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label for="topic">Project Topic</label>
                                    <input type="text" class="form-control" placeholder="Title of Post" id='topic'
                                        name='topic' value="<?php echo $project ?>">
                                    <div class="invalid-feedback error-title">
                                        Please add a project topic
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cover Photo</label>
                                    <input type="file" class="form-control" placeholder="" name='photo' id='photo'>
                                    <div class="invalid-feedback error-photo mt-1">
                                        Please add project cover Photo
                                    </div>
                                </div>

                            </div>
                            <input type="hidden" value='<?php echo $name ?>' name='authur'>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Project Pdf</label>
                                    <input type="file" class="form-control" placeholder="" name='pdf' id='pdf'>
                                    <div class="invalid-feedback error-image mt-1">
                                        Please add project PDF
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label for="price">Project price</label>
                                    <input type="text" class="form-control" placeholder="Price of Project" id='price'
                                        name='price' value="<?php echo $price ?>">
                                    <div class="invalid-feedback error-price">
                                        Please add a project price
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-3">

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="faculty">Faculty</label>
                                    <input type="text" class="form-control" placeholder="e.g. Engineering" id='faculty'
                                        name='faculty' value="<?php echo $faculty ?>">
                                    <div class="invalid-feedback error-faculty">
                                        Please add a faculty
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 ">
                                <div class="form-group">
                                    <label for="department">Department</label>
                                    <input type="text" class="form-control" placeholder="e.g.Chemical Engineering"
                                        id='department' name='department' value="<?php echo $department ?>">
                                    <div class="invalid-feedback error-department">
                                        Please add a department
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 ">
                                <div class="form-group">
                                    <label for="publish">Publish Project</label>
                                    <select name="publish" id="publish" class='form-control'>
                                        <option value="">Select a choice</option>
                                        <option value="1" selected>Yes, Do publish </option>
                                        <option value="0">No, Later</option>
                                    </select>
                                    <div class="invalid-feedback error-publish">
                                        Please choose if you want your post published
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="validationServer02">Body</label>
                            <input type="text" id="descrip" name='descrip' value='<?php echo $preview ?>' hidden>
                            <input type="text" id="id" name='id' value='<?php echo $id ?>' hidden>
                            <textarea name="description" cols="20" rows="5" class="form-control"
                                placeholder=" Your write up goes here..." id='description'></textarea>
                            <div class="invalid-feedback error-description mt-2 mb-2">
                                Please add your write up
                            </div>
                        </div>
                        <div class="flex justify-center mb-4">
                            <button class="btn bg-orange-600 py-2  text-white w-64  flex justify-center font-bold mt-4"
                                type="submit" onclick="add_post()" id="add_btn">
                                UPDATE PROJECT
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>






    <?php include('includes/footer.php')?>

    <script>
    var editor = CKEDITOR.replace('description');
    CKFinder.setupCKEditor(editor)

    var desc = $('#descrip').val()
    CKEDITOR.instances.description.setData(desc)
    </script>
    <script>
    $("#hide-fa").hide();

    function show() {
        console.log('hello')
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            footer: '<a href="">Why do I have this issue?</a>'
        })
    }

    function add_post() {
        var topic = $("#topic").val();
        var faculty = $("#faculty").val();
        var price = $("#price").val();
        var pdf = $("#pdf").val();
        var department = $("#department").val();
        var authur = $("#authur").val();
        var publish = $("#publish").val();
        var des = CKEDITOR.instances.description.getData()





        if (topic == "") {
            $("#topic").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-topic').show();

        } else {
            $("#topic").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-topic').hide();
        }


        if (faculty == "") {
            $("#faculty").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-faculty').show();

        } else {
            $("#faculty").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-faculty').hide();

        }



        if (department == "") {
            $("#department").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-department').show();

        } else {
            $("#department").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-department').hide();

        }


        if (price == "") {
            $("#price").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-price').show();

        } else {
            $("#price").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-price').hide();

        }



        if (publish == "") {
            $("#publish").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-publish').show();

        } else {
            $("#publish").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-publish').hide();

        }



        if (des == "") {
            $("#description").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-description').show();
        } else {
            $("#description").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-description').hide();
        }



        if (topic != "" && des != '' && faculty != "" && price != "" && department != "" && publish != "") {

            $('#add_btn').html('Please Wait....')
            var formData = new FormData(document.getElementById('post_form'))
            formData.append('description', des)
            fetch('ajax_controls/admin_edit_post_ajax.php', {
                    method: 'POST',
                    body: formData
                })
                .then(function(response) {

                    return response.text();
                })
                .then(function(text) {
                    $('#add_btn').html('UPDATE POST')


                    if (text == 'invalid file format') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Invalid File Format',
                            showClass: {
                                popup: 'animate__animated animate__fadeInDown'
                            },
                            hideClass: {
                                popup: 'animate__animated animate__fadeOutUp'
                            }
                        })
                    } else if (text == 'topic exists') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Posts With This Topic Exists',
                            showClass: {
                                popup: 'animate__animated animate__fadeInDown'
                            },
                            hideClass: {
                                popup: 'animate__animated animate__fadeOutUp'
                            }
                        })
                    } else if (text == 'invalid image format') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Invalid Image Format For Cover Photo',
                            showClass: {
                                popup: 'animate__animated animate__fadeInDown'
                            },
                            hideClass: {
                                popup: 'animate__animated animate__fadeOutUp'
                            }
                        })
                    } else {

                        Swal.fire({
                            icon: 'success',
                            title: 'Congratulations',
                            text: 'Your Project has been updated successfully',
                            showClass: {
                                popup: 'animate__animated animate__fadeInDown'
                            },
                            hideClass: {
                                popup: 'animate__animated animate__fadeOutUp'
                            }
                        }).then(function() {
                            window.location = "posts.php";

                        });
                    }
                })

        }
    }
    </script>
</body>

</html>