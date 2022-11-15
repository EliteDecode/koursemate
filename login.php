<?php include('includes/header.php');
include('admin/includes/database/db_controllers.php');
$id;
$faculty;
$department;
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $faculty = $_GET['faculty'];
    $department = $_GET['department'];
}
?>


<style>
.reg_container {
    width: 70%;
    margin: auto;

}

.form-group {
    margin-top: -3%;
}

label {
    font-size: 14px;
}

input {
    padding: 3% 5% !important;
    font-size: 14px !important;
}

.mainBody {
    padding: 1% 0%;
}

.form {
    margin-top: 27%;
    padding: 2% 5%;
}

@media (min-width: 0px) and (max-width: 575px) {
    .reg_container {
        width: 95%;
        margin: 0% auto;
    }

    .mainBody {
        padding: 1% 0% !important;
    }

    .form {
        margin-top: 2% !important;
        padding: 2% 5%;
    }

}
</style>



<section class="mainBody" style="background-color:#edeaea;">
    <div class="reg_container">
        <div class="row sm:shadow-md shadow-none" style="background-color: #fafafa;">
            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 ">
                <div class="bg-right py-4">

                    <div class="logo px-4 sm:p-4">
                        <input type="text" hidden id='project_id' value='<?php echo $id ?>'>
                        <input type="text" hidden id='project_fac' value='<?php echo $faculty ?>'>
                        <input type="text" hidden id='project_dpt' value='<?php echo $department ?>'>
                        <h2 class="font-semibold sm:text-lg text-xl">

                            Project Hub
                        </h2>
                        <p class="text-xs ">A central hub, where the standards of projects and research works are
                            simplified and accesible with ease</p>
                    </div>
                    <div class="img py-5 flex items-center justify-center hidden sm:block">
                        <img src="assets/sign2.svg" alt="" width="80%">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 bg-white">
                <div class="form">


                    <h1 class="font-bold my-3 text-md uppercase" style="font-size:17px ;">
                        LOGIN
                    </h1>

                    <form enctype="multipart/form-data" onsubmit="return false">
                        <div class="form-row">

                            <div class="col-md-12 form-group mb-3">
                                <label for="Email">Email</label>
                                <input type="email" class="form-control" name="Email" id="Email"
                                    placeholder="e.g. johndoe@gmail.com" value="">
                                <div class="invalid-feedback error-email">
                                    Please provide a valid Email.
                                </div>
                            </div>


                            <div class="col-md-12 form-group mb-3">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" name="Password" id="Password"
                                    placeholder="e.g. 12@Oluwe2" value="">
                                <div class="invalid-feedback error-password">
                                    Please provide a valid Password.
                                </div>
                            </div>


                        </div>
                        <?php if(isset($_GET['id'])): ?>
                        <button class="btn w-100 text-white" type="submit" style="background-color:  #ea6d08;;"
                            onclick='loginFormId()'>LOGIN
                        </button>
                        <span style="font-size: 12px;">Don't have an account? <a
                                href="register.php?id=<?php echo $id?>&faculty=<?php echo $faculty ?>&department=<?php echo $department ?>"
                                class="text-blue-500">Register</a></span>
                        <?php  else: ?>
                        <button class="btn w-100 text-white" type="submit" style="background-color:  #ea6d08;;"
                            onclick='loginForm()'>LOGIN
                        </button>
                        <span style="font-size: 12px;">Don't have an account? <a href="register.php"
                                class="text-blue-500">Register</a></span>
                        <?php endif ?>

                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>


<?php include('includes/footer.php') ?>

<script>
function loginForm() {
    const fullname = $('#Fullname').val();
    const email = $('#Email').val();
    const password = $('#Password').val();
    const password2 = $('#Password2').val();

    var id = $('#project_id').val()



    if (email == "") {
        $("#email").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-email').show();

    } else {
        $("#email").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-email').hide();
    }

    if (password == "") {
        $("#password").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-password').show();

    } else {
        $("#password").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-password').hide();
    }




    if (fullname != "" && email != '' && password != "" && password2 != "") {


        $.ajax({
            url: 'admin/ajax_controls/user_login.php',
            method: 'post',
            data: {
                email,
                password
            },
            success: function(data) {
                console.log(data)
                if (data == 'success') {

                    window.location = "index.php";


                } else if (data == 'invalid') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Invalid email entered',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    })
                } else if (data == 'incorrect password') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Invalid credentials entered',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    })
                } else if (data == 'not found') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'User details not found',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    })
                }
            },

        })
    }
}


function loginFormId() {
    const fullname = $('#Fullname').val();
    const email = $('#Email').val();
    const password = $('#Password').val();
    const password2 = $('#Password2').val();

    var id = $('#project_id').val()
    var faculty = $('#project_fac').val()
    var department = $('#project_dpt').val()



    if (email == "") {
        $("#email").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-email').show();

    } else {
        $("#email").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-email').hide();
    }

    if (password == "") {
        $("#password").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-password').show();

    } else {
        $("#password").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-password').hide();
    }




    if (fullname != "" && email != '' && password != "" && password2 != "") {


        $.ajax({
            url: 'admin/ajax_controls/user_login.php',
            method: 'post',
            data: {
                email,
                password
            },
            success: function(data) {
                console.log(data)
                if (data == 'success') {

                    window.location =
                        `singleProject.php?id=${id}&faculty=${faculty}$department=${department}`;


                } else if (data == 'invalid') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Invalid email entered',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    })
                } else if (data == 'incorrect password') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Invalid credentials entered',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    })
                } else if (data == 'not found') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'User details not found',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    })
                }
            },

        })
    }
}
</script>