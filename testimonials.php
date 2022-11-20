<?php
include('includes/header2.php');
include('admin/includes/database/db_controllers.php');



$name;
$email;
if(isset($_GET['name']) && isset($_GET['email'])){
     $name = $_GET['name'];
     $email = $_GET['email'];
     $total_cost = $_GET['total_cost'];
     $transaction_id = $_GET['transaction_id'];
}





?>

<style>
.container_index {
    width: 80%;
    margin: auto;
}

.active {
    border-bottom: 4px solid #fd841f;
}

.activeMob {
    color: #fd841f !important;
}

a {
    color: #1e293b !important;
    padding-bottom: 3%;
}

header {
    position: sticky;
    top: 0%;
}

.index_svg {
    width: 90%;
}



@media (min-width: 0px) and (max-width: 575px) {


    .container_index {
        width: 90%;
        margin: auto;
    }

    .index_svg {
        width: 100% !important;
    }


}
</style>

<section class="reviews">
    <div class=" py-24" style='background-color:#fafafa;'>
        <div class="container_index">
            <div class="row">

                <div class="col-md-6 ">
                    <h2 class='text-3xl mt-3'>Your reviews are important to us </h2>

                    <p class='font-light opacity-75 text-gray-600'>Hello Sarah, Please tell us how our services was and
                        how we could
                        make it
                        better</p>
                    <div class="form-group mt-3">
                        <label for="review">Review:</label>
                        <input type="text" hidden value='Gospel' id='name'>
                        <textarea name="review" id="review" cols="30" rows="7" class='form-control'
                            placeholder='Your feedback goes here...'></textarea>
                    </div>
                    <button class="btn bg-orange-600 mt-4 text-white" id='add_btn' onclick='sendFeedback()'>SEND
                        FEEDBACK</button>
                </div>
                <div class="col-md-6">
                    <img src="assets/feedback.svg" alt="" class='index_svg'>
                </div>

            </div>
        </div>
    </div>

</section>

<script src="lib/js/jquery-1.12.4.min.js"></script>
<script src="lib/js/owl.carousel.min.js"></script>
<script src="lib/js/jquery.toast.js"></script>
<script src="lib/js/sweetalert2.all.min.js"></script>
<script src="lib/js/bootstrap.min.js"></script>
<script src="styles/js/main.js"></script>

<script>
function sendFeedback() {
    var review = $("#review").val();
    var name = $('#name').val();



    if (review == '') {
        $("#review").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-review').show();
    } else {
        $("#review").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-review').hide();
    }




    if (review != "") {
        $('#add_btn').html('Please Wait....');
        $.ajax({
            url: "admin/ajax_controls/send_feedback.php",
            method: "post",
            data: {
                review: review,
                name: name
            },
            dataType: "text",
            success: function(data) {
                console.log(data);
                if (data.includes('success')) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Congratulations',
                        text: 'Feedback sent successfully',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    }).then(function() {
                        window.location = "index.php";
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    })
                }
            }
        });

    }
}
</script>