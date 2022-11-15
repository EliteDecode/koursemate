<?php  
/* Getting the current page name and storing it in a variable. */
$activePage = basename($_SERVER['PHP_SELF'], ".php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Boostrap library-->
    <link rel="stylesheet" href="lib/css/bootstrap.min.css" />
    <!--Tailwind library-->
    <link rel="stylesheet" href="lib/css/tailwind.min.css" />
    <!--Tachycons Library Framework-->
    <link rel="stylesheet" href="lib/css/tachyons.min.css" />
    <!--Font Awesome-->
    <link rel="stylesheet" href="lib/fonts/css/all.css" />
    <!--Carousel Library-->
    <link rel="stylesheet" href="lib/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="lib/css/owl.theme.default.min.css" />
    <!--global-->
    <link rel="stylesheet" href="styles/css/global.css" />
    <!--Css-->
    <link rel="stylesheet" href="styles/css/index.css" />
    <link rel="stylesheet" href="lib/css/jquery.toast.css">


    <title>Koursemate Projects</title>


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

    .not-found {
        width: 12%;
    }


    .chat {
        position: fixed;
        bottom: 50px;
        right: 50px;
        z-index: 111111;
        width: 55px;
    }

    @media (min-width: 0px) and (max-width: 575px) {


        .chat {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 111111;
            width: 50px;
        }
    }
    </style>
</head>

<body>


    <div>
        <a href="https://wa.link/2sole0"> <img src="assets/whatsapp.png" alt="" class='chat'></a>
    </div>
    <!--header-->
    <div class="header bg-white" style='position:sticky; top: 0%; z-index:10;'>
        <div class="minibar py-2 w-full">
            <div class="container flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-2">
                        <img src="assets/gmail.png" alt="" style="width: 12px" />
                        <h5 class="font-normal text-sm text-gray-600" style="font-size: 12px">
                            support@koursemate.com
                        </h5>
                    </div>
                    <div class="flex items-center space-x-2 minibar__phone">
                        <img src="assets/phone-call.png" alt="" style="width: 12px" />
                        <h5 class="font-normal text-sm text-gray-600" style="font-size: 12px">
                            +234 703 0548 630
                        </h5>
                    </div>
                </div>

                <div class="flex items-center space-x-2">

                    <a href="cart.php">
                        <button type="button" class="btn bg-orange-600  flex items-center p-1">
                            <img src="assets/shopping-cart.png" alt="" width="15px"> <span class="  badge badge-light "
                                style="font-size: 11px;" id='cart_count'>0</span>

                        </button>
                    </a>

                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        class="btn bg-orange-600 text-white font-semibold uppercase text-xs">
                        Subscribe
                    </button>





                </div>
            </div>
        </div>
        <div class="container">
            <div class="flex items-center justify-between py-4">
                <div class="logo">
                    <h2 class="font-semibold text-2xl custom-dark">
                        Kourse<span class="custom-orange">Mate.</span>
                    </h2>
                </div>

                <div class="nav__links">
                    <ul class="flex items-center space-x-8">
                        <li class=" " style="list-style: none">
                            <a href="index.php" style="text-decoration: none"
                                class="<?= ($activePage == 'index') ? 'active':''; ?> flex items-center space-x-1">
                                <img src="assets/house.png" alt="" width="15px" />
                                <span class="text-sm">Home</span>
                            </a>
                        </li>

                        <li class=" " style="list-style: none">
                            <a href="project.php" style="text-decoration: none"
                                class="<?= ($activePage == 'project') ? 'active':''; ?> flex items-center space-x-1">
                                <img src="assets/project-management.png" alt="" width="15px" />
                                <span class="text-sm">Project</span>
                            </a>
                        </li>
                        <li class=" " style="list-style: none">
                            <a href="writter.php" style="text-decoration: none"
                                class="<?= ($activePage == 'writter') ? 'active':''; ?> flex items-center space-x-1">
                                <img src="assets/new-post.png" alt="" width="15px" />
                                <span class="text-sm">Hire a writter</span>
                            </a>
                        </li>
                        <li class=" " style="list-style: none">
                            <a href="patnership.php" style="text-decoration: none"
                                class="<?= ($activePage == 'patnership') ? 'active':''; ?> flex items-center space-x-1">
                                <img src="assets/team.png" alt="" width="15px" />
                                <span class="text-sm"> Contributors</span>
                            </a>
                        </li>
                        <!-- <li class=" " style="list-style: none">
                            <a href="about.php" style="text-decoration: none"
                                class="<?= ($activePage == 'about') ? 'active':''; ?> flex items-center space-x-1">
                                <img src="assets/aboutb.png" alt="" width="15px" />
                                <span class="text-sm">About us</span>
                            </a>
                        </li> -->
                        <li class=" " style="list-style: none">
                            <a href="blog.php" style="text-decoration: none"
                                class="<?= ($activePage == 'blog') ? 'active':''; ?> flex items-center space-x-1">
                                <img src="assets/blog.png" alt="" width="15px" />
                                <span class="text-sm">Blog</span>
                            </a>
                        </li>
                        <li class=" " style="list-style: none">
                            <a href="https://wa.link/2sole0" style="text-decoration: none"
                                class="<?= ($activePage == 'contact') ? 'active':''; ?> flex items-center space-x-1">
                                <img src="assets/phone-call.png" alt="" width="15px" />
                                <span class="text-sm">Contact us</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="controller border-2 px-2 py-1" id="controller">
                    <img src="assets/list.png" alt="" width="24px" />
                </div>
            </div>
        </div>

        <div class="mobile__links bg-white py-5 h-screen"
            style="position: absolute; top: 0%; width: 75%; z-index:111111" id="mobile_nav">
            <div class="logo px-4 py-2 mb-3">
                <h2 class="font-semibold text-2xl custom-dark">
                    Kourse<span class="custom-orange">Mate.</span>
                </h2>
            </div>
            <ul class="flex flex-col p-3 space-y-8">
                <li class=" " style="list-style: none">
                    <a href="index.php" style="text-decoration: none"
                        class="<?= ($activePage == 'index') ? 'activeMob':''; ?> flex items-center space-x-1">
                        <img src="assets/house.png" alt="" width="15px" />
                        <span class="text-sm">Home</span>
                    </a>
                </li>

                <li class=" " style="list-style: none">
                    <a href="project.php" style="text-decoration: none"
                        class="<?= ($activePage == 'project') ? 'activeMob':''; ?> flex items-center space-x-1">
                        <img src="assets/project-management.png" alt="" width="15px" />
                        <span class="text-sm">Project</span>
                    </a>
                </li>
                <li class=" " style="list-style: none">
                    <a href="writter.php" style="text-decoration: none"
                        class="<?= ($activePage == 'writter') ? 'activeMob':''; ?> flex items-center space-x-1">
                        <img src="assets/new-post.png" alt="" width="15px" />
                        <span class="text-sm">Hire a writter</span>
                    </a>
                </li>
                <li class=" " style="list-style: none">
                    <a href="patnership.php" style="text-decoration: none"
                        class="<?= ($activePage == 'patnership') ? 'activeMob':''; ?> flex items-center space-x-1">
                        <img src="assets/team.png" alt="" width="15px" />
                        <span class="text-sm">Patnership</span>
                    </a>
                </li>
                <!-- <li class=" " style="list-style: none">
                    <a href="about.php" style="text-decoration: none"
                        class="<?= ($activePage == 'about') ? 'activeMob':''; ?> flex items-center space-x-1">
                        <img src="assets/aboutb.png" alt="" width="15px" />
                        <span class="text-sm">About us</span>
                    </a>
                </li> -->
                <li class=" " style="list-style: none">
                    <a href="blog.php" style="text-decoration: none"
                        class="<?= ($activePage == 'blog') ? 'activeMob':''; ?> flex items-center space-x-1">
                        <img src="assets/blog.png" alt="" width="15px" />
                        <span class="text-sm">Blog</span>
                    </a>
                </li>
                <li class=" " style="list-style: none">
                    <a href="https://wa.link/2sole0" style="text-decoration: none"
                        class="<?= ($activePage == 'contact') ? 'activeMob':''; ?> flex items-center space-x-1">
                        <img src="assets/phone-call.png" alt="" width="15px" />
                        <span class="text-sm">Contact us</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--end of header-->