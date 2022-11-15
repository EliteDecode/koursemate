<?php include('includes/header.php');
include('admin/includes/database/db_controllers.php');


$id;

if(isset($_GET['id'])){
    $id = $_GET['id'];
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
        <div class="row" style="background-color: #fafafa;">
            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 ">
                <div class="bg-right ">

                    <div class="logo px-4 sm:p-4">
                        <input type="text" hidden id='project_id' value='<?php echo $id ?>'>
                        <h2 class="font-semibold sm:text-lg text-xl custom-dark">
                            Project Hub.
                        </h2>
                        <p class="text-xs ">A central hub, where the standards of projects and research works are
                            simplified and accesible with ease</p>
                    </div>
                    <div class="img py-5 flex items-center justify-center hidden sm:block">
                        <img src="assets/sign1.svg" alt="" width="78%">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 bg-white">
                <div class="py-8 px-4">
                    <div class="flex items-center space-x-1">
                        <img src="assets/idea.png" alt="" width="20px">
                        <p class=" text-xs" style="font-weight: 600;">START FOR FREE</p>
                    </div>
                    <h1 class="font-bold my-3 text-md uppercase" style="font-size:17px ;">
                        Create Account
                    </h1>

                    <form enctype="multipart/form-data" onsubmit="return false">
                        <div class="form-row">
                            <div class="col-md-12 form-group mb-3">
                                <label for="Fullname">Fullname</label>
                                <input type="text" name="Fullname" class="form-control" id="Fullname"
                                    placeholder="e.g. John Doe" value="">
                                <div class="invalid-feedback error-name">
                                    Please provide your name
                                </div>
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <label for="Email">Email</label>
                                <input type="email" class="form-control" name="Email" id="Email"
                                    placeholder="e.g. johndoe@gmail.com" value="">
                                <div class="invalid-feedback error-email">
                                    Please provide a valid email.
                                </div>
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" name="Password" id="Password"
                                    placeholder="e.g. 12@Oluwe2" value="">
                                <div class="invalid-feedback error-password">
                                    Please provide a valid password.
                                </div>
                            </div>
                            <div class="col-md-12 form-group mb-3">
                                <label for="Password">Confirm password</label>
                                <input type="password" class="form-control" name="Password2" id="Password2"
                                    placeholder="e.g. 12@Oluwe2" value="">
                                <div class="invalid-feedback error-password2">
                                    Please confirm your password
                                </div>
                                <div class="invalid-feedback error-password2b">
                                    Password do not match
                                </div>
                            </div>

                        </div>
                        <?php if(isset($_GET['id'])):  ?>
                        <button class="btn w-100 text-white" type="submit" style="background-color:  #ea6d08;"
                            onclick='registerFormId()'>Register
                        </button>
                        <?php else: ?>
                        <button class="btn w-100 text-white" type="submit" style="background-color:  #ea6d08;"
                            onclick='registerForm()'>Register
                        </button>
                        <?php  endif; ?>

                        <span style="font-size: 12px;">Already have an account? <a href="login.php"
                                class="text-blue-500">Login</a></span>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>


<?php include('includes/footer.php') ?>



<script>
function registerForm() {
    const fullname = $('#Fullname').val();
    const email = $('#Email').val();
    const password = $('#Password').val();
    const password2 = $('#Password2').val();



    if (fullname == "") {
        $("#Fullname").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-fullname').show();

    } else {
        $("#Fullname").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-fullname').hide();
    }

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

    if (password2 == "") {
        $("#password2").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-password2').show();

    } else {
        $("#password2").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-password2').hide();
    }



    if (fullname != "" && email != '' && password != "" && password2 != "") {

        if (password2 != password) {
            $("#password2").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-password2b').show();

        } else {
            $("#password2").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-password2b').hide();
            $.ajax({
                url: 'admin/ajax_controls/user_register.php',
                method: 'post',
                data: {
                    fullname,
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
                    } else if (data == 'exists') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'User already exists',
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

}

function registerFormId() {
    const fullname = $('#Fullname').val();
    const email = $('#Email').val();
    const password = $('#Password').val();
    const password2 = $('#Password2').val();
    var id = $('#project_id').val()


    if (fullname == "") {
        $("#Fullname").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-fullname').show();

    } else {
        $("#Fullname").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-fullname').hide();
    }

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

    if (password2 == "") {
        $("#password2").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-password2').show();

    } else {
        $("#password2").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-password2').hide();
    }



    if (fullname != "" && email != '' && password != "" && password2 != "") {

        if (password2 != password) {
            $("#password2").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-password2b').show();

        } else {
            $("#password2").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-password2b').hide();
            $.ajax({
                url: 'admin/ajax_controls/user_register.php',
                method: 'post',
                data: {
                    fullname,
                    email,
                    password
                },
                success: function(data) {
                    console.log(data)
                    if (data == 'success') {

                        window.location = `singleProject.php?id=${id}`;

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
                    } else if (data == 'exists') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'User already exists',
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

}
</script>