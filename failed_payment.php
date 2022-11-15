<?php
include('includes/header.php');
include('admin/includes/database/db_controllers.php');



$status;
$tx_ref;
$transaction_id;
if(isset($_GET['status']) && isset($_GET['tx_ref']) && isset($_GET['transaction_id'])){
     $status = $_GET['status'];
     $tx_ref = $_GET['tx_ref'];
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
    width: 60%;
    margin: auto;
}

.not-found {
    width: 20%;
}

@media (min-width: 0px) and (max-width: 575px) {
    .container_cust {
        width: 95% !important;
        margin: auto;
    }
}
</style>
<div class=" flex items-center flex-col justify-center space-y-8 mt-4">
    <img src="assets/notfound.svg" alt="" class='not-found'>
    <h4>No Transaction Found With This ID</h4>
    <a href="cart.php"> <button class='btn btn-danger'>Redirect to checkout</button></a>
</div>


<?php include('includes/footer.php') ?>