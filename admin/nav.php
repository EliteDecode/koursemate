<?php 
  

   
   $email = $_SESSION['admin'];

   $sql = "SELECT * FROM admin WHERE Email = '$email'";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);
   $admin = $row['Name'];
   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    /*--------------------------NAVBAR-------------------------------*/
    nav {
        z-index: 10;
    }

    .navbar-toggler-icon {
        position: relative;
        color: var(--dark);
        outline: none;
    }

    @media(max-width: 767px) {
        .navbar-toggler-icon>i {
            font-size: 17px !important;
        }

    }

    .display {
        display: block;
    }

    .hide {
        display: none;
    }

    .active {
        color: #007bff !important;
    }

    .navbar {
        display: none !important;
    }



    @media(max-width: 767px) {
        .navbar-desk {
            display: none;
        }

        .navbar {
            display: flex !important;
            flex-direction: row;
            justify-content: space-between;
        }
    }

    .navbar-desk {
        width: 100%;
        height: 90px;
        padding: 2% 2%;
        z-index: 1000 !important;
        position: relative;
    }

    .navbar-desk .container {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .nav-links {
        margin-right: 0%;
        width: 60%;

    }

    .nav-links ul {
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
    }

    .nav-links ul li {
        list-style-type: none;
        margin-left: 2%;

        padding: 0% 1%;
    }

    .nav-links ul li a {
        color: var(--dark);
        font-size: 15px;
        text-decoration: none !important;
        font-weight: 600;
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .nav-links ul li a {
            color: var(--white);
            font-size: 10px;
            font-weight: 600;
        }
    }

    .nav-links ul li a:hover {
        color: var(--yellow);
        transition: .3s ease all;
    }

    .nav-links ul a li {
        list-style-type: none;
        color: #fff;

    }

    .post_link {
        list-style-type: none;
    }

    .post_link a {
        color: var(--dark);
        text-transform: capitalize;
        text-decoration: none;
        font-size: 15px;
    }

    .mob_post_link {
        margin-left: -87px;
        padding: 1px 80px 1px 15px;
    }

    .logo img {
        width: 15%;
    }



    @media (min-width: 0px) and (max-width: 575px) {
        .logo img {
            width: 40% !important;
        }

    }
    </style>
</head>

<body>


    <section class="navbar-desk "
        style="border-bottom: 1px solid #f0efed; position:sticky; top:0%; background-color:#fff">
        <div class="container">
            <a href='dashboard.php' class="logo" style='text-decoration:none'>
                <div class="logo">
                    <a href="../index.php"> <img src="../assets/logo.png" alt=""></a>
                </div>
            </a>
            <div class="nav-links">
                <ul>
                    <li class="flex space-x-1 items-center">
                        <img src="../assets/icons/admin.png " alt="" srcset="">
                        <span class="font-bold text-sm capitalize"> <?php echo $admin ?> </span>
                    </li>
                    <li>
                        <a href="../index.php"> <img src="../assets/icons/house.png" alt="" style="width: 30px;"></a>
                    </li>
                    <li class="post_link space-x-1" style='display:flex; flex-direction:row; align-items:center'>
                        <a href="logout.php"> <img src="../assets/icons/shutdown.png" class='cursor-pointer' alt=""
                                style="width: 30px;">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>



    <!--===================Navigation Section for Mobile=========================-->
    <nav class="navbar flex flex-row justify-between  py-8 "
        style="border-bottom: 1px solid #f0efed;position:sticky; top:0%; background-color:#fff">
        <a href='dashboard.php' class="" style='text-decoration:none'>
            <div class="logo">
                <div class="">
                    <a href="index.php"> <img src="../assets/logo.png" width='40%' alt=""></a>
                </div>
            </div>
        </a>

    </nav>


    <!--===================END Navigation Section=========================-->