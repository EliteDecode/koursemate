<?php 
session_start();
require('includes/header.php') ;
require('includes/database/db_controllers.php');


$admin = $_SESSION['admin'];
if (!isset($_SESSION['admin'])) {
    header('location:login.php');
 }

  
 $result = selectOne('admin', ['Email' => $admin]);
 $status = $result['Status'];
 $name = $result['Name'];
 

?>

<style>
.track {
    margin-top: 4%;
}

.inner_box {
    width: 90%;
    padding: 7% 8%;
    margin: 0% 5% 4% 5%;
}

.dash {
    color: #fff !important;
    text-decoration: none !important;
}

.dash:hover {
    color: var(--white) !important;
}

.dash i {
    font-size: 25px;
    margin-bottom: 8%;
}

.wrap {
    overflow: hidden;
    height: 820px;
}

@media (min-width: 0px) and (max-width: 969px) {
    .wrap {
        overflow: hidden;
        height: 1020px;
    }

    .form-group {
        margin-top: 4%;
        margin-bottom: 8%;
    }

}

@media (min-width: 0px) and (max-width: 969px) {

    .tabss {
        overflow: scroll;
        margin-top: 7%;
    }



    .track {
        margin-top: 9%;
    }
}
</style>

<?php include ('nav.php') ?>

<body>

    <div class="wrap h-min-screen" style=" background:#F9F9F9">



        <div class="row">
            <div class="col-md-2 col-lg-2 col-xl-2">
                <?php include('sidenav.php') ?>
            </div>
            <div class="col-md-10 col-lg-10 col-xl-10" style='padding:0% 5%'>
                <div class="container pt2">
                    <div class="row">
                        <div class="col-md-6 col-lg 4 col-xl-4 col-sm-12 ">
                            <div class="bg-primary inner_box" style='border-radius:10px;'>
                                <a href='profile.php' class='dash'>
                                    <img src="../assets/icons/profile.png" class='cursor-pointer ' alt=""
                                        style="width: 45px;">

                                    <h4 class="font-light mt-3">My Profile</h4>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg 4 col-xl-4 col-sm-12 ">
                            <div class="bg-secondary inner_box" style='border-radius:10px;'>
                                <a href='posts.php' class='dash'>
                                    <img src="../assets/icons/post.png" class='cursor-pointer ' alt=""
                                        style="width: 45px;">

                                    <h4 class="mt-3 font-light">Total Projects :
                                        <?php
                                     $num;
                                   if($status == 1){
                                      $num = selectAll('courses');
                                   }else{
                                    $num = selectAll('courses', ['Authur' => $name]);
                                   }
                                    $res = count($num);
                                  if ($res > 0) {
                                      echo" <span>$res</span>";
                                  }else{
                                    echo "<span>0</span>";
                                  }
                                 
                                 ?>
                                    </h4>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg 4 col-xl-4 col-sm-12 ">
                            <div class="bg-info inner_box" style='border-radius:10px;'>
                                <a href='add_posts.php' class='dash'>
                                    <img src="../assets/icons/new-post.png" class='cursor-pointer ' alt=""
                                        style="width: 45px;">

                                    <h4 class='font-light mt-3'>Add Projects </h4>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg 4 col-xl-4 col-sm-12 ">
                            <div class="bg-warning inner_box" style='border-radius:10px;'>
                                <a href='posts.php' class='dash'>
                                    <img src="../assets/icons/publishing.png" class='cursor-pointer ' alt=""
                                        style="width: 45px;">

                                    <h4 class="mt-3 font-light">Published Projects :

                                        <?php
                                     $num;
                                   if($status == 1){
                                      $num = selectAll('courses', ['Status' => 1]);
                                   }else{
                                    $num = selectAll('courses', ['Status' => 1, 'Authur' => $name]);
                                   }
                                    $res = count($num);
                                  if ($res > 0) {
                                      echo" <span>$res</span>";
                                  }else{
                                    echo "<span>0</span>";
                                  }
                                 
                                 ?>
                                    </h4>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg 4 col-xl-4 col-sm-12 ">
                            <div class="bg-dark inner_box" style='border-radius:10px;'>
                                <a href='posts.php' class='dash'>
                                    <img src="../assets/icons/delete.png" class='cursor-pointer ' alt=""
                                        style="width: 45px;">


                                    <h4 class="mt-3 font-light">Unpublished Projects : <?php 
                                $num;
                                if($status == 1){
                                   $num = selectAll('courses', ['status' => 0]);
                                }else{
                                 $num = selectAll('courses', ['status' => 0, 'Authur' => $name]);
                                }
                                 $res = count($num);
                               if ($res > 0) {
                                   echo" <span>$res</span>";
                               }else{
                                 echo "<span>0</span>";
                               }
                                 ?>
                                    </h4>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg 4 col-xl-4 col-sm-12 ">
                            <div class="bg-danger inner_box" style='border-radius:10px;'>
                                <a href='logout.php' class='dash'>
                                    <img src="../assets/icons/logout.png" class='cursor-pointer ' alt=""
                                        style="width: 45px;">

                                    <h4 class='font-light mt-3'>Logout</h4>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <?php include('includes/footer.php')?>
</body>

</html>