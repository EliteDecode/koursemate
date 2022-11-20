<?php
include('includes/header2.php');
include('admin/includes/database/db_controllers.php');



$name;
$email;
$total_cost;
$transaction_id;
if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['transaction_id']) && isset($_GET['total_cost'])){
     $name = $_GET['name'];
     $email = $_GET['email'];
     $total_cost = $_GET['total_cost'];
     $transaction_id = $_GET['transaction_id'];
}





?>

<style>
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

.container_cust {
    width: 70%;
    margin: auto;
}

.not-found {
    width: 12%;
}

@media (min-width: 0px) and (max-width: 575px) {
    .not-found {
        width: 42% !important;
    }

    .container_cust {
        width: 90%;
        margin: auto;
    }
}
</style>

<section>

    <div class="container_cust shadow-md rounded-md sm:px-3 px-1" style='background-color:#fafafa'>
        <div class="">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 sm:py-16 py-4">
                    <div class=" p-4 flex items-center flex-col space-y-1">
                        <img src="assets/icons/check.png" width='95px' alt="">
                        <h1 class='text-green-500 text-center'>Payment Successfull!</h1>

                        <p class='text-center text-gray-600'>Hurray <?php echo $name ?> An email has been sent to
                            <?php echo $email ?>
                            containing your
                            item</p>
                    </div>

                    <div class=" p-3">
                        <div class="flex justify-between mb-2">
                            <p class='text-gray-500'> Name </p>
                            <p class='text-gray-500'> <?php echo $name ?></p>
                        </div>
                        <div class="flex justify-between mb-2">
                            <p class='text-gray-500'> Email </p>
                            <p class='text-gray-500'><?php echo $email ?></p>
                        </div>
                        <div class="flex justify-between mb-2">
                            <p class='text-gray-500'> Amount Paid </p>
                            <p class='text-gray-500'>N <?php echo number_format($total_cost) ?></p>
                        </div>
                        <div class="flex justify-between mb-2">
                            <p class='text-gray-500'> Transaction id </p>
                            <p class='text-gray-500'><?php echo $transaction_id ?></p>
                        </div>

                        <div class="flex items-center justify-center mt-5 ">
                            <a href="index.php">
                                <button class='btn bg-orange-500 text-white'>
                                    Return Home
                                </button>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 hidden sm:block">
                    <div class="flex items-center justify-center py-32">
                        <img src="assets/success.svg" alt="">
                    </div>
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


<script>
document.addEventListener("DOMContentLoaded", () => {
    localStorage.removeItem('cart')
});
</script>