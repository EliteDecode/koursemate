<?php require('includes/header.php');
session_start()
?>

<style>
.form-control,
.form-control:focus,
.input-group-addon {
    border-color: #171d64;
    border-radius: 0;
}


.signup-form {
    width: 40%;
    margin: 0% 30%;
}

@media (min-width: 0px) and (max-width: 969px) {

    .signup-form {
        width: 94%;
        margin: 0% 3%;
    }

}

.signup-form h2 {
    color: #636363;
    margin: 0 0 15px;
    text-align: center;

}

.signup-form .lead {
    font-size: 14px;
    margin-bottom: 30px;
    text-align: center;
}

.signup-form form {
    border-radius: 1px;
    margin-bottom: 15px;
    background: #fff;
    border: 2px solid #171d64;
    ;
    padding: 30px;
}

.signup-form .form-group {
    margin-bottom: 20px;
}

.signup-form label {
    font-weight: normal;
    font-size: 13px;
}

.signup-form .form-control {
    min-height: 38px;
    box-shadow: none !important;
    border-width: 0 0 1px 0;
}

.signup-form .form-control:focus {
    background-color: #fff;
}

.signup-form .input-group-addon {
    max-width: 42px;
    text-align: center;
    background: none;
    border-width: 0 0 1px 0;
    padding-left: 5px;
}

.signup-form .btn {
    font-size: 16px;
    font-weight: bold;
    background: #171d64;
    border-radius: 3px;
    border: none;
    min-width: 140px;
    outline: none !important;


}

.signup-form .btn:hover,
.signup-form .btn:focus {
    background: var(--white);
    color: #171d64;
}

.signup-form a {
    color: #171d64;
    text-decoration: none;
}

.signup-form a:hover {
    text-decoration: underline;
}

.signup-form .fa {
    font-size: 17px;
    margin-top: 10px;
}

.signup-form .fa-paper-plane {
    font-size: 13px;
}

.signup-form .fa-check {
    color: #fff;
    left: 9px;
    top: 18px;
    font-size: 7px;
    position: absolute;
}
</style>



<body>

    <div class="wrap h-screen flex flex-col items-center justify-center">
        <div class="signup-form">
            <form method="post">
                <h2>LOGIN</h2>
                <p class="lead">It's free and hardly takes more than 30 seconds.</p>
                <div id="msg"></div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" id='email'>
                    </div>
                    <div class="invalid-feedback email-error error-email" style='padding-left:5%'>
                        Please put your email.
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password"
                            id='password'>
                    </div>
                    <div class="invalid-feedback password-error error-password" style='padding-left:5%'>
                        Please choose a password.
                    </div>
                </div>



            </form>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" id='login'> &nbsp
                    Login &nbsp</button>
            </div>

        </div>


    </div>

    <?php include('includes/footer.php')?>



    <script>
    $(document).ready(function() {


        $("#login").click(function() {
            var email = $("#email").val();
            var password = $("#password").val();

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




            if (email != "" && password != "") {
                $('#login').html('Please wait...')

                $.ajax({
                    url: "ajax_controls/admin_login_ajax.php",
                    method: "post",
                    data: {
                        email: email,
                        password: password
                    },
                    dataType: "text",
                    success: function(data) {
                        $('#login').html('login')
                        if (data == 'invalid email') {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Invalid Email Entered..',
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
                                text: 'Incorrect Password...',
                                showClass: {
                                    popup: 'animate__animated animate__fadeInDown'
                                },
                                hideClass: {
                                    popup: 'animate__animated animate__fadeOutUp'
                                }
                            })
                        } else if (data == 'unknown email') {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Admin Email Not Found...',
                                showClass: {
                                    popup: 'animate__animated animate__fadeInDown'
                                },
                                hideClass: {
                                    popup: 'animate__animated animate__fadeOutUp'
                                }
                            })
                        } else if (data == 'success') {
                            window.location = "dashboard.php";
                        }
                    }
                });

            } else {

            }

        });
    });
    </script>
</body>

</html>