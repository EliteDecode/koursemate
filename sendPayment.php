<?php
include('includes/header.php');
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



<input type="email" hidden value='<?php echo $email ?>' id='email'>
<input type="text" hidden value='<?php echo $name ?>' id='name'>
<input type="number" hidden value='<?php echo $total_cost ?>' id='total_cost'>
<input type="number" hidden value='<?php echo $transaction_id ?>' id='id'>

<div class="h-screen" style=''>
    <div class="d-flex justify-content-center sm:mt-32  mt-32">
        <div class="spinner-border" role="status">

        </div>
    </div>
</div>


<?php include('includes/footer.php') ?>

<script>
document.addEventListener("DOMContentLoaded", () => {
    runit()
})
var projects = localStorage.getItem('cart');
var email = $('#email').val();
var id = $('#id').val();
var name = $('#name').val();
var cost = $('#total_cost').val();



function runit() {

    var jsonString = JSON.stringify(projects);
    $.ajax({
        url: "admin/ajax_controls/ajax_send_payment.php",
        method: "post",
        data: {
            projects: projects,
            email: email,
            name: name,
            id: id,
        },


        success: function(data) {
            if (data.includes('success')) {

                window.location.replace(
                    `success_payment.php?transaction_id=${id}&name=${name}&email=${email}&total_cost=${cost}`
                )
            } else {
                console.log(data)
            }
        }
    });
}
</script>