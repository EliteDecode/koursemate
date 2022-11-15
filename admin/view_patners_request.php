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

</style>

<?php include ('nav.php') ?>

<body>
    <div class="wrap h-screen" style="background:#F9F9F9;  overflow-x:hidden">
        <div class="row">
            <div class="col-md-2 col-lg-2 col-xl-2">
                <?php include('sidenav.php') ?>
            </div>
            <div class="col-md-10 col-lg-10 col-xl-10 ">
                <div class="row flex items-center justify-center">
                    <div class="col-lg-11 col-md-11">
                        <div class="p-4 my-5 rounded-md bg-white">
                            <h2 class='text-md font-semibold'>Request Details</h2>
                            <?php if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $result = selectOne('patners', ['id' => $id]);
                       $name = $result['Name'];
                       $email = $result['Email'];
                       $phone = $result['Phone'];
                       $State = $result['State'];
                       $level = $result['EduLevel'];
                       $bio = $result['Bio'];
                        $feedback = $result['Feedback'];
                     
                        }?>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="col-md-12 my-3">
                                        <h2 class='text-sm font-semibold'>Name:</h2>
                                        <p><?php echo $name ?></p>
                                    </div>

                                    <div class="col-md-12 my-3">
                                        <h2 class='text-sm font-semibold'>Email:</h2>
                                        <p><?php echo $email ?></p>
                                    </div>

                                    <div class="col-md-12 my-3">
                                        <h2 class='text-sm font-semibold'>Phone:</h2>
                                        <p><?php echo $phone ?></p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 my-3">
                                        <h2 class='text-sm font-semibold'>State of Residence:</h2>
                                        <p><?php echo $State ?></p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 my-3">
                                        <h2 class='text-sm font-semibold'>Education Level:</h2>
                                        <p><?php echo $level ?></p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 my-3">
                                        <h2 class='text-sm font-semibold'>Bio:</h2>
                                        <p><?php echo $bio ?></p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 my-3">
                                        <h2 class='text-sm font-semibold'>Status:</h2>
                                        <?php if ($result['Status'] === 1):  ?>
                                        <p class='text-green-400 '>Approved</p>
                                        <?php elseif($result['Status'] === 0): ?>
                                        <p class='text-orange-400'>Pending</p>
                                        <?php elseif($result['Status'] === -1): ?>
                                        <p class='text-red-400'>Declined</p>
                                        <?php endif; ?>
                                    </div>
                                    <?php if ($result['Status'] === 1):  ?>
                                    <div class="col-lg-12 col-md-12 my-3">
                                        <h2 class='text-sm font-semibold'>Request Feedback:</h2>
                                        <p><?php echo $feedback ?></p>
                                    </div>
                                    <?php else:  ?>
                                    <?php endif; ?>
                                    <input type="text" hidden id='request_id' value='<?php echo $id ?>'>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="col-lg-12 col-md-12">
                                        <label for="feedback" class='font-semibold text-sm'>Feedback <sup
                                                class='text-red-600' style='font-size:10px'>(This feedback goes to the
                                                requester
                                                Email*)</sup></label>
                                        <textarea name="feedback" placeholder='Add Request Feedback'
                                            class='form-control' id="feedback" cols="30" rows="10"></textarea>
                                        <div class="invalid-feedback error-feedback">
                                            Please add a feedback
                                        </div>
                                    </div>
                                    <?php if ($result['Status'] === 1):  ?>
                                    <button class="btn w-100 bg-red-600 text-white mt-2" onclick='decline()'>Decline
                                        Request</button>
                                    <?php elseif($result['Status'] === 0): ?>
                                    <div class="flex items-center justify-between">
                                        <button class="btn  bg-green-600 text-white mt-2" onclick='Approve()'>Approve
                                            Request</button>
                                        <button class="btn  bg-red-600 text-white mt-2" onclick='decline()'>Decline
                                            Request</button>
                                    </div>
                                    <?php elseif($result['Status'] === -1): ?>
                                    <button class="btn w-100 bg-green-600 text-white mt-2" onclick='Approve()'>Approve
                                        Request</button>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>






    <?php include('includes/footer.php')?>


    <script>
    function decline() {
        console.log('hello')
        var request_id = $('#request_id').val();
        var feedback = $('#feedback').val();

        if (feedback == "") {
            $("#feedback").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-feedback').show();

        } else {
            $("#feedback").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-feedback').hide();

        }

        if (feedback !== "") {

            Swal.fire({
                title: 'Do you want to decline this request?',
                showCancelButton: true,
                confirmButtonText: 'Decline',

            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'ajax_controls/admin_decline_request_patner.php',
                        method: 'post',
                        data: {
                            id: request_id,
                            feedback: feedback,
                        },
                        success: function(data) {
                            console.log(data)
                            if (data == 'success') {

                                Swal.fire({
                                    icon: 'success',
                                    title: 'Congratulations',
                                    text: 'This request has been declined successfully',
                                    showClass: {
                                        popup: 'animate__animated animate__fadeInDown'
                                    },
                                    hideClass: {
                                        popup: 'animate__animated animate__fadeOutUp'
                                    }
                                }).then(function() {
                                    window.location = "writters_request.php";
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Something went wrong...',
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
            })
        }



    }


    function Approve() {
        console.log('hello')
        var request_id = $('#request_id').val();
        var feedback = $('#feedback').val();

        if (feedback == "") {
            $("#feedback").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-feedback').show();

        } else {
            $("#feedback").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-feedback').hide();

        }

        if (feedback !== "") {

            Swal.fire({
                title: 'Do you want to approve this request?',
                showCancelButton: true,
                confirmButtonText: 'Approve',

            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'ajax_controls/admin_approve_request_patner.php',
                        method: 'post',
                        data: {
                            id: request_id,
                            feedback: feedback,
                        },
                        success: function(data) {
                            console.log(data)
                            if (data == 'success') {

                                Swal.fire({
                                    icon: 'success',
                                    title: 'Congratulations',
                                    text: 'This request has been approved Successfully',
                                    showClass: {
                                        popup: 'animate__animated animate__fadeInDown'
                                    },
                                    hideClass: {
                                        popup: 'animate__animated animate__fadeOutUp'
                                    }
                                }).then(function() {
                                    window.location = "patners_request.php";
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Something went wrong...',
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
            })
        }



    }
    </script>