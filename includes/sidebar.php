<div class="mt-4 ">
    <div class="header p-2 custom-border-right  rounded-md bg-gray-100">
        <h1 class="text-xl uppercase font-bold cursor-pointer ">Categories</h1>
    </div>


    <?php foreach($categories as $category): ?>
    <a href="index.php?category=<?php echo $category['id'] ?>" class="mt-2">
        <div class="p-1 my-2 text-center border  rounded-md cursor-pointer" style="background-color: #422774;">
            <h1 class="font-semibold text-lg text-white"><?php echo $category['Topic']  ?></h1>
        </div>
    </a>
    <?php endforeach ?>
</div>


<div class="mt-4">
    <div class="header p-2 custom-border-right  rounded-md bg-gray-100">
        <h1 class="text-xl uppercase font-bold cursor-pointer ">Follow us</h1>
    </div>
    <div class="flex items-center space-x-8 border mt-4 bg-blue-500 cursor-pointer">
        <div class="py-3 px-4 bg-blue-700">
            <i class="fa-brands fa-facebook-f text-xl text-white"></i>
        </div>
        <span class="text-sm font-semibold text-white">1,234 Followers</span>
    </div>
    <div class="flex items-center space-x-8 border mt-4 bg-red-500 cursor-pointer">
        <div class="py-3 px-4 bg-red-700">
            <i class="fa-brands fa-youtube text-xs text-white"></i>
        </div>
        <span class="text-sm font-semibold text-white">8,036 Youtube Subscribers</span>
    </div>
    <div class="flex items-center space-x-8 border mt-4 bg-green-500 cursor-pointer">
        <div class="py-3 px-4 bg-green-700">
            <i class="fa-brands fa-whatsapp text-sm text-white"></i>
        </div>
        <span class="text-sm font-semibold text-white">3,091 Whatsapp Messagers</span>
    </div>
    <div class="flex items-center space-x-8 border mt-4 bg-orange-500 cursor-pointer">
        <div class="py-3 px-4 bg-orange-700">
            <i class="fa-brands fa-instagram text-sm text-white"></i>
        </div>
        <span class="text-sm font-semibold text-white">80,063 Instagram Followers</span>
    </div>
</div>

<div class="mt-4">
    <div class="header p-2 custom-border-right  rounded-md bg-gray-100">
        <h1 class="text-xl uppercase font-bold">Advertisement</h1>
    </div>
    <div class="img mt-3">
        <div class="row">
            <div class="col-6">
                <img src="assets/ads.png " alt="" />
            </div>
            <div class="col-6">
                <img src="assets/ads2.png " alt="" />
            </div>
        </div>
    </div>
</div>

<div class="mt-4">
    <div class="header p-2 custom-border-right  rounded-md bg-gray-100">
        <h1 class="text-xl uppercase font-bold">Trending News</h1>
    </div>
    <div class="p-2">
        <?php 
             foreach($trends as $trend): 
             $id = $post['Topic_id'];
             $response_category = selectOne('Topic', ['id' => $id]);
             $category = $response_category['Topic']
            ?>
        <a href="singlePost.php?id=<?php echo $trend['id'] ?>" class="border mt-4">
            <div class="flex items-center space-x-2">
                <div class="p-2">
                    <div class="flex items-center space-x-2">
                        <h2 class="border py-1 px-2 bg-custom-blue text-white font-bold capitalize "
                            style="font-size: 12px;">
                            <?php echo   $category ?>
                        </h2>
                        <h6 class="text-gray-500 font-semibold">
                            <?php echo date('F j, Y', strtotime($trend['DateReg'])) ?>
                        </h6>
                    </div>
                    <h1 class="font-bold text-sm my-2">
                        <?php
                       
                        echo $trend['Title'];
                        ?>
                    </h1>
                </div>
            </div>
        </a>
        <?php endforeach  ?>
    </div>
</div>

<div class="mt-4" id='subscribe'>
    <div class="header p-2 custom-border-right  rounded-md bg-gray-100">
        <h1 class="text-xl uppercase font-bold">Newsletter</h1>
    </div>
    <div class="text-center p-4">
        <h1 class="text-xs font-semibold text-gray-600">
            Subscribe to our newsletter, to get update on the latest happenings
        </h1>

        <input type="email" class="form-control mt-3 p-4" placeholder="e.g. johndoe@gmail.com" id='email' />
        <button class="bg-custom-blue text-white w-full mt-2 p-2 font-bold" id="add_btn" onclick="subscribe()">
            SUBSCRIBE
        </button>
    </div>
</div>



<script src="lib/js/jquery-1.12.4.min.js"></script>
<script src="lib/js/sweetalert2.all.min.js"></script>
<script src="lib/js/bootstrap.min.js"></script>
<script src="lib/js/owl.carousel.min.js"></script>
<script src="styles/js/main.js"></script>
<script>
function subscribe() {

    var email = $("#email").val();

    if (name == "") {
        $("#email").removeClass('form-control').addClass('form-control is-invalid');

    } else {
        $("#email").removeClass('form-control is-invalid').addClass('form-control');


    }


    if (email != "") {
        $('#add_btn').html('Please Wait....')
        $.ajax({
            url: "admin/ajax_controls/admin_subscribe_ajax.php",
            method: "post",
            data: {
                email: email,
            },
            dataType: "text",
            success: function(data) {
                console.log(data)
                if (data == 'success') {
                    $('#add_btn').html('SUBSCRIBE')
                    Swal.fire({
                        icon: 'success',
                        title: 'Congratulations',
                        text: 'You have subscribed successfully',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    }).then(function() {
                        location.reload();
                    });
                } else if (data == 'invalid email') {
                    $('#add_btn').html('SUBSCRIBE')
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
                } else if (data == 'email exists') {
                    $('#add_btn').html('SUBSCRIBE')
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'You have an active subscription',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    })
                } else {
                    $('#add_btn').html('SUBSCRIBE')
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

            }
        });

    }
}
</script>