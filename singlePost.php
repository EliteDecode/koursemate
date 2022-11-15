<?php 
include('includes/header.php');
include('blog/admin/includes/database/db_controllers.php');

$categories = selectAll('topic');
$trends =selectPageConditionRand('posts', 0, 4);

if (isset($_GET['id'])) {
   $id = $_GET['id'];
}

$post = selectOne('posts', ['id' => $id])

?>


<div class="container">

    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12">
            <section class="mw7 center">

                <article class="pv4 bt bb b--black-10 ph3 ph0-l">
                    <div class=" order-1 order-2-ns mb4 mb0-ns w-100 w-40-ns">
                        <img src="admin/images/<?php  echo $post['Picture'] ?>" class="db"
                            alt="Photo of a dimly lit room with a computer interface terminal.">
                    </div>
                    <div class="flex flex-column flex-row-ns mt-3">
                        <div class="w-100 w-60-ns pr3-ns order-2 order-1-ns">
                            <h1 class="f3 athelas mt0 lh-title"><?php  echo $post['Title'] ?></h1>
                            <p class="f5 f4-l lh-copy athelas">
                                <?php echo $post['Descrip'] ?>
                            </p>
                        </div>

                    </div>
                    <p class="f6 lh-copy gray mv0">By <span class="ttu"><?php echo $post['Authur'] ?></span></p>
                    <time class="f6 db gray"><?php echo date('F j, Y', strtotime($post['DateReg'])) ?></time>
                </article>

                <section class="comment border border-gray-50 p-3">
                    <?php 
                       $id = $post['id'];
                      $result= selectAll('comments', ['Post_id' => $id, 'Approved' => 1]);
                      $res = count($result);

                      if ($res > 0) {
                     echo "   <div class='flex items-center space-x-2'>
                     <h5 class='my-2 font-bold '>See what people say</h5>
                     <img src='assets/icons/comment.png' alt='' style='width: 20px;'>
                 </div>";
                      }else{
                        echo "   <div class='flex items-center space-x-2'>
                        <h5 class='my-2 font-bold '>No Comment on this post</h5>
                        <img src='assets/icons/comment.png' alt='' style='width: 20px;'>
                    </div>";
                      }

                    ?>

                    <?php


                    $id = $post['id'];
                    $comments = selectAll('comments', ['Post_id' => $id, 'Approved' => 1]);

                    foreach($comments as $comment):
                    $name = $comment['Name'];
                    $text = $comment['Text'];
                        echo " <div class='border-b flex flex-col mt-3'>
                        <div class='flex items-center space-x-2'>
                            <h3 class='text-gray-500 text-md'>$name commented</h3>
                            <img src='assets/icons/c.png' alt='' style='width: 20px;'>
                        </div>
                        <p class='text-sm my-2'>$text</p>
                        </div>";
                    endforeach;
                    ?>

                </section>

                <!-- Form -->

                <div class="mt-2">
                    <form id='post_form' enctype="multipart/form-data" onsubmit="return false"
                        class="border bg-white py-1 sm:py-8 px-2 md:py-4 md:px-5 shadow-md rounded-md">
                        <input type="hidden" id='id' value="<?php echo $post['id'] ?>">
                        <input type="hidden" id='title' value="<?php echo $post['Title'] ?>">
                        <div class="flex items-center space-x-2 my-4">
                            <h6 class="font-bold uppercase text-md text-red-600">Add a comment</h6>
                            <img src="../assets/icons/checklist.png" alt="" style="width:20px">
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="name" class="font-semibold">Name</label>
                                        <input type="text" class="form-control" placeholder="e.g. John Doe" id='name'
                                            name='name'>
                                        <div class="invalid-feedback error-name">
                                            Please add your name
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email" class="font-semibold">Email</label>
                                        <input type="email" class="form-control" placeholder="e.g. johndoe@gmail.com"
                                            id='email' name='email'>
                                        <div class="invalid-feedback error-email">
                                            Please add your Email
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="validationServer02">Comment</label>
                                <textarea name="description" cols="20" rows="5" class="form-control"
                                    placeholder=" Your write up goes here..." id='description'></textarea>
                                <div class="invalid-feedback error-description mt-2 mb-2">
                                    Please add your Comment
                                </div>
                            </div>
                        </div>



                        <div class="flex justify-center mb-4">
                            <button class="btn bg-custom-blue py-2  text-white w-64  flex justify-center font-bold mt-4"
                                type="submit" onclick="add_comment()" id="add_btn">
                                &nbsp Submit Comment
                                &nbsp</button>
                        </div>

                    </form>
                </div>
            </section>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 bg-white hidden sm:block">
            <?php  include('includes/sidebar.php') ?>
        </div>
    </div>
</div>


<?php include('includes/footer.php')  ?>

<script>
var id = $("#id").val();
//Automaticallys send the clicked id to database for tracking purpose
var post = new XMLHttpRequest();
var vars = "id=" + id;
post.open('POST', 'admin/ajax_controls/admin_post_track_ajax.php', true);
post.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
post.onreadystatechange = function() {
    if (post.readyState == 4 && post.status == 200) {
        var data = post.responseText;
        console.log(data);
    }
}
post.send(vars);



function add_comment() {


    var name = $("#name").val();
    var email = $("#email").val();
    var id = $("#id").val();
    var title = $("#title").val();
    var description = $("#description").val();



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

    if (description == "") {
        $("#description").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-description').show();
    } else {
        $("#description").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-description').hide();
    }



    if (name != "" && description != "" && email != "") {
        $('#add_btn').html('Please Wait....')
        $.ajax({
            url: "admin/ajax_controls/admin_add_comment_ajax.php",
            method: "post",
            data: {
                name: name,
                email: email,
                id: id,
                title: title,
                description: description

            },
            dataType: "text",
            success: function(data) {
                console.log(data)
                if (data == 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Congratulations',
                        text: 'Comment added successfully',
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

            }
        });

    }



}
</script>