<?php

include('includes/header.php'); 
include('admin/includes/database/db_controllers.php');
$browseFaculties = selectDistinctPage('courses', 'Faculty', 0 , 12);
?>

<style>
label {
    font-size: 13px;
}

input {
    font-size: 14px !important;
}
</style>




<section class=" h-min-screen">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8 col-md-8 col-sm-12 mb-5 mt-3">
                <div class='p-2 bg-orange-100 my-2 rounded-md'>
                    <h3 class="mb-3 font-semibold">KINDLY FILL THE FORM BELOW AND CHECK YOUR E-MAIL IMMEDIATELY!</h3>
                    <p>Fill the form below ( <span style='color:red'>*</span> )</p>
                </div>
                <div class=" rounded-md shadow-lg p-4 sm:p-5 bg-white">
                    <form id='post_form' enctype="multipart/form-data" onsubmit="return false">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class=" col-lg-12 col-md-12 mb-3">
                                    <label for="name">Your Name <span style="color:red">*</span></label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter Your Full Name..." name='name'>
                                        <div class="invalid-feedback error-name">
                                            Please enter your full name.
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-lg-12 col-md-12 mb-3">
                                    <label for="email">Your Email <span style="color:red">*</span></label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" id="email"
                                            placeholder="Enter A Valid Email Address" name='email'>
                                        <div class="invalid-feedback error-email">
                                            Please enter your email.
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-lg-12 col-md-12 mb-3">
                                    <label for="phone">Enter Your Phone Number <span style="color:red">*</span></label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" id="phone"
                                            placeholder="Enter Your Phone Number" name='phone'>
                                        <div class="invalid-feedback error-phone">
                                            Please enter your phone number
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="project">Your Project Title <span style="color:red">*</span></label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" id="project"
                                            placeholder="Enter Your Project Title" name='project'>
                                        <div class="invalid-feedback error-project">
                                            Please enter your project title
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="level">Education Level <span style="color:red">*</span></label>
                                    <div class="input-group">

                                        <select name="level" id="level" class="form-control">
                                            <option value="bsc">BSC</option>
                                            <option value="hnd">HND</option>
                                            <option value="ond">OND</option>
                                            <option value="nce">NCE</option>
                                            <option value="pgd">PGD</option>
                                            <option value="msc">MSC</option>
                                            <option value="mba">MBA</option>
                                        </select>
                                        <div class="invalid-feedback error-level">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">

                                <div class="form-group">
                                    <label for="name">Your Department / Project Format (if any)</label>
                                    <textarea name="format" class="form-control" id="format" cols="30" rows="11"
                                        placeholder="Enter Format Here"></textarea>

                                </div>
                                <button class="btn bg-orange-600 text-white mt-4 w-100" id='add_btn' type="submit"
                                    onclick="registerWritter()">Submit
                                    form</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 mt-5 sm:block hidden">
                <div class="border p-4 rounded-md shadow-lg bg-white">
                    <div class="flex items-center space-x-2 border-b p-2">
                        <img src="assets/icons/university.png" alt="" width='22px'>
                        <h5 class='text-md uppercase font-bold '>Browse Faculties</h5>
                    </div>
                    <ul class='p-2'>
                        <?php foreach ($browseFaculties as $browseFaculty): ?>
                        <li class=' uppercase flex items-center space-x-2 text-md my-3'> <img class='-mt-2'
                                src="assets/icons/school.png" width='17px' alt="" style='filter: grayscale(100%);'>
                            <a href="project.php?filter=Faculty&term=<?php echo $browseFaculty['Faculty'] ?>"
                                class='font-lighter'><?php  echo $browseFaculty['Faculty']?></a>
                        </li>
                        <?php  endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include('includes/footer.php') ?>


<script>
function registerWritter() {
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var project = $("#project").val();
    var level = $("#level").val();
    var format = $("#format").val();


    if (name == '') {
        $("#name").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-name').show();
    } else {
        $("#name").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-name').hide();
    }

    if (email == '') {
        $("#email").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-email').show();
    } else {
        $("#email").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-email').hide();
    }


    if (phone == '') {
        $("#phone").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-phone').show();
    } else {
        $("#phone").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-phone').hide();
    }


    if (project == '') {
        $("#project").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-project').show();
    } else {
        $("#project").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-project').hide();
    }


    if (level == '') {
        $("#level").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-level').show();
    } else {
        $("#level").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-level').hide();
    }

    if (name != "" && email != '' && phone != "" && level != "" && project != "") {
        $('#add_btn').html('Please Wait....');
        var formData = new FormData(document.getElementById('post_form'));


        fetch('admin/ajax_controls/register_writter.php', {
                method: 'POST',
                body: formData
            })
            .then(function(response) {
                return response.text();
            })
            .then(function(text) {
                $('#add_btn').html('Submit form')
                console.log(text)
                if (text == 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Congratulations',
                        text: 'Your  request for a writter has been sent, check your email, you would be contacted shortly',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    }).then(function() {
                        // window.location = "writter.php";
                    });
                } else if (text == 'pending') {

                    Swal.fire({
                        icon: 'error',
                        title: 'Ooops',
                        text: 'You already sent a request with this project title, you will be contacted via email shortly',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Ooops',
                        text: 'Something went wrong',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    })
                }
            })


    }
}
</script>