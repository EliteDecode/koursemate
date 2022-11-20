<!--footer-->
<section class="footer mt-5 py-5" style="background-color: #fafafa">
    <div class="container_index">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="p-2">
                    <div class="footer-logo mt-4">

                        <a href="index.php"> <img src="assets/logo.png" alt=""></a>

                        <p class="text-xs sm:text-xs font-semibold opacity-75 mt-2">
                            With innovative research projects and state of the art published works, koursemate is the
                            leading firm for breaking complexity in research projects
                        </p>
                    </div>
                    <div class="my-5">
                        <h1 class="= font-semibold text-sm sm:text-sm text-gray-600">
                            Find us on
                        </h1>
                        <div class="flex footer-icons items-center space-x-2 mt-2">
                            <img src="assets/icons/facebook (1).png" alt="" />
                            <img src="assets/icons/instagram.png" alt="" />
                            <img src="assets/icons/youtube.png" alt="" />
                            <img src="assets/icons/twitter (2).png" alt="" />
                            <img src="assets/icons/linkedin (1).png" alt="" />
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="p-2">
                    <h1 class="font-bold text-md sm:text-md">Support</h1>
                    <ul class="footer-products">
                        <li><a href="">Help Center</a></li>
                        <li><a href="">Daily reviews</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Video Tutorials</a></li>
                    </ul>
                </div>
                <div class="p-2">
                    <h1 class="font-bold text-md sm:text-md">Contact</h1>
                    <ul class="footer-products">
                        <li><a href="">+234-90-1070-203</a></li>
                        <li><a href="">partnership@stormgain.com </a></li>
                        <li><a href="">careers@stormgain.com s</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="p-2">
                    <h1 class="font-bold text-md sm:text-md">Learn</h1>
                    <ul class="footer-products">
                        <li><a href="">Easy start</a></li>
                        <li><a href="">How to search your project topics</a></li>
                        <li><a href="">How to make payment </a></li>
                        <li><a href="">How to hire a writter</a></li>
                        <li><a href="">How to become a contributor</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="p-2">
                    <h1 class="font-bold text-md sm:text-md">Company</h1>
                    <ul class="footer-products">
                        <li><a href="">About us</a></li>
                        <li><a href="">Hire a writter</a></li>
                        <li><a href="">Become a contributor</a></li>
                        <li><a href="">Refer a friend</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<!--footer -->


<!--Javascript libraries-->
<!-- Subscribe Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Subscribe</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" id='subEmail' class='form-control' placeholder='Enter your valid Email'>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gray-700 text-white font-semibold uppercase text-xs"
                    data-bs-dismiss="modal" id='mod'>Close</button>
                <button type="button" id='sub_btn' class="btn bg-orange-500 text-white font-semibold uppercase text-xs"
                    onclick="subscribe()">Subscribe</button>
            </div>
        </div>
    </div>
</div>

<!--Payment Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Fill in your details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" placeholder='Fullname e.g John doe' class='text-sm my-2 py-3 form-control' id='name'>
                <div class="invalid-feedback error-name">
                    Please enter your name
                </div>
                <input type="email" placeholder='Email e.g Johndoe@gmail.com' class='text-sm my-2 py-3 form-control'
                    id='email'>
                <div class="invalid-feedback error-email">
                    Please enter a valid email
                </div>
                <input type="number" placeholder='Phone Number e.g 09010707383' class='text-sm my-2 py-3 form-control'
                    id='phone'>
                <div class="invalid-feedback error-phone">
                    Please enter a valid phone number
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick='payment(event)' id='pay_btn'>Proceed
                    Payment</button>
            </div>

        </div>
    </div>
</div>
<!--end-->


<script src="lib/js/jquery-1.12.4.min.js"></script>
<script src="lib/js/owl.carousel.min.js"></script>
<script src="lib/js/jquery.toast.js"></script>
<script src="lib/js/sweetalert2.all.min.js"></script>
<script src="lib/js/bootstrap.min.js"></script>




<script>
function subscribe() {

    var subEmail = $("#subEmail").val();


    if (subEmail == "") {
        $("#subEmail").removeClass('form-control').addClass('form-control is-invalid');

    } else {
        $("#subEmail").removeClass('form-control is-invalid').addClass('form-control');


    }


    if (subEmail != "") {
        $('#sub_btn').html('Please Wait....')
        $.ajax({
            url: "admin/ajax_controls/admin_subscribe_ajax.php",
            method: "post",
            data: {
                email: subEmail,
            },
            dataType: "text",
            success: function(data) {
                console.log(data)
                if (data == 'success') {
                    $('#sub_btn').html('SUBSCRIBE')

                    $.toast({
                        heading: 'Subscribed successfully',
                        text: 'Congratulations you have subscribed successfully',
                        showHideTransition: 'slide',
                        bgColor: '#15803d',
                        textColor: 'white',

                        afterHidden: function() {
                            window.location = "contact.php";
                        }

                    })

                } else if (data == 'invalid email') {
                    $('#sub_btn').html('SUBSCRIBE')
                    $.toast({
                        heading: 'Error',
                        text: 'You have entered an incorrect email',
                        showHideTransition: 'slide',
                        bgColor: '#dc2626',
                        textColor: 'white',
                        icon: "error"

                    })
                } else if (data == 'email exists') {
                    $('#sub_btn').html('SUBSCRIBE')
                    $.toast({
                        heading: 'Info',
                        text: 'You have an active subscription',
                        showHideTransition: 'slide',
                        bgColor: '#0284c7',
                        textColor: 'white',
                        icon: "info"

                    })
                } else {
                    $('#sub_btn').html('SUBSCRIBE')
                    $.toast({
                        heading: 'Error',
                        text: 'Something went wrong',
                        showHideTransition: 'slide',
                        bgColor: '#dc2626',
                        textColor: 'white',
                        icon: "error"

                    })
                }

            }
        });

    }
}
//total cart items in header
let cart_count = document.getElementById('cart_count');


//total checkout ammount in cart.php
let check_amount = document.querySelector('.check_amount');

let itemContainer = document.getElementById('item-container')

//fetch cart items from local storage
let cart = localStorage.getItem("cart") ?
    JSON.parse(localStorage.getItem("cart")) : [];

document.addEventListener("DOMContentLoaded", () => {

    // Total cart Amount


    /* Getting the total number of items in the cart and displaying it in the header. */
    let cartItems = totalCartItems()
    cart_count.innerHTML = cartItems || 0

    /* Checking if the item is already in the cart. */
    let button = document.getElementById('cart_btn');

    let inCart = cart.find((item) => item.project_id === product.project_id);
    if (inCart) {
        button.disabled = true;
        button.innerText = 'In cart'
    }

    /* Adding the cart items to the cart.php page. */
    addCartDOM()

});

var project_id = $('#project_id').val()
var topic = $('#topic').val()
var photo = $('#photo').val()
var faculty = $('#faculty').val()
var department = $('#department').val()
var price = $('#price').val()
var pdf = $('#pdf').val()


const product = {
    project_id,
    topic,
    photo,
    faculty,
    department,
    price,
    pdf
}

/* Adding the item to the cart. */
function add_to_cart() {

    let button = document.getElementById('cart_btn');
    let inCart = cart.find((item) => item.project_id === product.project_id);
    if (inCart) {
        button.disabled = true;
        button.innerText = 'In cart'

    } else {

        cart = [...cart, product]
        Storage.saveCart(cart)
        button.disabled = true;
        button.innerText = 'In cart'

    }

    //Total cart Amount
    /* Getting the total amount of the cart. */
    let amount = cartAmount()



    //updating cart items
    /* Getting the total number of items in the cart and displaying it in the header. */
    let cartItems = totalCartItems()
    cart_count.innerHTML = cartItems


}

/**
 * If the cart is empty, return 0, otherwise return the length of the cart.
 * 
 * @return The length of the cart array.
 */
function totalCartItems() {
    cart = Storage.getCart();
    return cart.length
}

/**
 * It takes the price of each item in the cart and adds them together to get the total amount.
 * 
 * @return The total amount of the cart.
 */
function cartAmount() {
    let tempTotal = 0;

    cart.map((item) => {
        tempTotal += parseInt(item.price)
    });

    return tempTotal
}

function addCartDOM() {

    const items = Storage.getCart();


    if (items.length > 0) {

        items.forEach(item => {

            const div = document.createElement('div');
            div.classList.add("mb-5");
            div.classList.add("border-b-2");
            div.innerHTML = `
                             <div class="row">
                                    <div class="col-4 hidden sm:block">
                                        <img src="admin/files/${item.photo}" width='90%' alt="...">
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="details p-3">
                                            <h3 class="font-bold text-md mb-2">
                                                TOPIC :
                                                <span class="font-light">
                                                   ${item.topic}</span>
                                            </h3>
                                            <h3 class="font-bold text-md mb-1">
                                                Department :
                                                <span class="font-light">${item.department}</span>
                                            </h3>
                                            <h3 class="font-bold text-md mb-2">
                                                Faculty :
                                                <span class="font-light"> <span class="font-light">
                                                       ${item.faculty}</span>
                                            </h3>
                                            <h3 class="font-bold text-md mb-2">
                                                Price :
                                                <span class="font-light"> $ <span class="font-light">
                                                      ${item.price}</span>
                                            </h3>
                                            <div class="flex items-center justify-between pr-3 space-x-2 mt-3">
                                                <img src="assets/icons/delete 4.png" alt="" width="25px" onclick='deleteItem(event)' data-id=${item.project_id} />
                                            </div>
                                        </div>
                                    </div>
                                </div>
            `
            itemContainer.appendChild(div);
        })


    } else {
        let checkoutDiv = document.getElementById('checkoutDiv');

        checkoutDiv.style.display = 'none';

        const div = document.createElement('div');
        div.innerHTML = `
                         <div class="img p-3">
                          
                            <img src="assets/empty.svg" alt="">
                        </div>
            `
        itemContainer.appendChild(div);
    }


}


class Storage {
    static saveCart(cart) {
        localStorage.setItem("cart", JSON.stringify(cart));
    }

    static getCart() {
        return localStorage.getItem("cart") ?
            JSON.parse(localStorage.getItem("cart")) : [];
    }


}



var controller = document.getElementById("controller");
var mobile_nav = document.getElementById("mobile_nav");
var main = document.getElementById("main-head");

controller.addEventListener("click", (e) => {
    mobile_nav.classList.toggle("toggleNav");
    main.classList.toggle('stick');

});
</script>


</body>

</html>