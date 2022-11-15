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

@media (min-width: 0px) and (max-width: 575px) {
    .container_cust {
        width: 95% !important;
        margin: auto;
    }
}
</style>
<div class="cart">

    <div class="container_cust">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="p-3">
                    <div class="flex items-center space-x-1">
                        <img src="assets/icons/shopping-cart.png" alt="" width="25px" />
                        <h2 class="text-xl">Shopping Cart</h2>
                    </div>


                    <div class="item border bg-white my-4 rounded-md mb-3 shadow-md cursor-pointer" id='item-container'>

                    </div>


                </div>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-12" id='checkoutDiv'>

                <div class="p-3 bg-gray-100">
                    <div class="flex items-center space-x-1">
                        <img src="assets/icons/summary.png" alt="" width="18px" />
                        <h2 class="text-md font-bold">Order Summary</h2>
                    </div>

                    <div class="total flex items-center justify-between mt-4">
                        <h3 class="font-bold text-md mb-1 ">Total <span class='check_count'></span></h3>
                        <div>$ <span class='check_amount'></span></div>
                    </div>

                    <div class="flex items-center justify-center">
                        <button type='button' class="btn bg-teal-700 text-white font-lighter my-3 w-100"
                            data-bs-toggle="modal" data-bs-target="#paymentModal">
                            Checkout
                        </button>
                    </div>
                </div>

            </div>

            <!--modal for user details-->
            <!-- Button trigger modal -->


        </div>
    </div>
</div>



<?php include('includes/footer.php') ?>
<script src="https://checkout.flutterwave.com/v3.js"></script>


<script>
//total checkout items in cart.php
let check_count = document.querySelector('.check_count');
let cost = document.getElementById('cost');

document.addEventListener("DOMContentLoaded", () => {

    // Total cart Amount
    let amount = cartAmount()
    document.querySelector('.check_amount').innerHTML = amount || 0
    cost.value = amount

    let cartItems = totalCartItems()

    check_count.innerHTML = cartItems || 0


});



function deleteItem(event) {
    let item = event.target
    let id = event.target.dataset.id;

    console.log(id);
    cart = cart.filter((item) => item.project_id !== id);
    Storage.saveCart(cart);



    /* Getting the total number of items in the cart and displaying it in the header. */
    let cartItem = totalCartItems()
    cart_count.innerHTML = cartItem || 0


    itemContainer.removeChild(item.parentElement.parentElement.parentElement.parentElement.parentElement);

    let amount = cartAmount()
    document.querySelector('.check_amount').innerHTML = amount || 0

    let cartItems = totalCartItems()
    check_count.innerHTML = cartItems || 0



}

function payment(event) {
    event.preventDefault();
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var cost = document.querySelector('.check_amount').textContent;



    if (name == "") {
        $("#name").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-name').show();

    } else {
        $("#name").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-name').hide();

    }


    if (email == "") {
        $("#email").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-email').show();

    } else {
        $("#email").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-email').hide();

    }



    if (phone == "") {
        $("#phone").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-phone').show();

    } else {
        $("#phone").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-phone').hide();

    }


    if (name != "" && email != "" && phone != "") {
        $('#pay_btn').html('Please wait...')
        FlutterwaveCheckout({
            public_key: "FLWPUBK_TEST-8d1bf7c2fb10e35985b5fb64c748468a-X",
            tx_ref: "KM_" + Math.floor((Math.random() * 1000000000) + 1),
            amount: parseInt(cost),
            currency: "NGN",

            redirect_url: `http://localhost/koursemate/verify_payment.php`,
            customer: {
                email: email,
                name: name,
                phone_number: phone
            },
            customizations: {
                title: "Koursemate, research projects made easy",
                description: "Payment for research project",

            },
            callback: function(data) {
                console.log(data)

            }
        });
    }

}
</script>