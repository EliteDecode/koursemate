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
                    <h3 class="mb-3 font-semibold">JOIN OUR TEAM, BECOME A CONTRIBUTOR IN YOUR SCHOOL</h3>
                    <p>Fill the form below ( <span style='color:red'>*</span> )</p>
                </div>
                <div class=" rounded-md shadow-lg p-4 sm:p-5 bg-white">
                    <form id='post_form' enctype="multipart/form-data" onsubmit="return false">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class=" col-lg-12 col-md-12 mb-3">
                                    <label for="name">Your Name <span style="color:red">*</span></label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" name='name' id="name"
                                            placeholder="Enter Your Full Name...">
                                        <div class="invalid-feedback error-name">
                                            Please enter your full name.
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-lg-12 col-md-12 mb-3">
                                    <label for="email">Your Email <span style="color:red">*</span></label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" name='email' id="email"
                                            placeholder="Enter A Valid Email Address">
                                        <div class="invalid-feedback error-email">
                                            Please enter your email.
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-lg-12 col-md-12 mb-3">
                                    <label for="phone">Enter Your Phone Number <span style="color:red">*</span></label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" name='phone' id="phone"
                                            placeholder="Enter Your Phone Number">
                                        <div class="invalid-feedback error-phone">
                                            Please enter your phone number
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="state">Your State of Residence <span style="color:red">*</span></label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" name='state' id="state"
                                            placeholder="Enter Your State of Resisdence">
                                        <div class="invalid-feedback error-state">
                                            Please enter your state of residence
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
                                    <label for="name">Your Bio <span style="color:red">*</span></label>
                                    <textarea name="bio" class="form-control" id="bio" cols="30" rows="11"
                                        placeholder="Enter a Brief Bio"></textarea>
                                    <div class="invalid-feedback error-bio">
                                        Enter a brief bio
                                    </div>
                                </div>
                                <button class="btn bg-orange-600 text-white mt-4 w-100" type="submit"
                                    onclick='registerPatner()'>Submit
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
function registerPatner() {
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var state = $("#state").val();
    var level = $("#level").val();
    var bio = $("#bio").val();


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


    if (state == '') {
        $("#state").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-state').show();
    } else {
        $("#state").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-state').hide();
    }


    if (level == '') {
        $("#level").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-level').show();
    } else {
        $("#level").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-level').hide();
    }

    if (bio == '') {
        $("#bio").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-bio').show();
    } else {
        $("#bio").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-bio').hide();
    }

    if (name != "" && email != '' && phone != "" && level != "" && state != "" && bio != "") {
        $('#add_btn').html('Please Wait....');
        var formData = new FormData(document.getElementById('post_form'));

        fetch('admin/ajax_controls/register_patner.php', {
                method: 'POST',
                body: formData
            })
            .then(function(response) {
                return response.text();
            })
            .then(function(text) {
                $('#add_btn').html('Submit form')

                if (text == 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Congratulations',
                        text: 'Your request for patnership has been sent, check your email, you would be contacted shortly',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    }).then(function() {
                        window.location = "patnership.php";
                    });
                } else if (text == 'exists') {

                    Swal.fire({
                        icon: 'error',
                        title: 'Ooops',
                        text: 'You already sent a request with this email, you will be contacted via email shortly',
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