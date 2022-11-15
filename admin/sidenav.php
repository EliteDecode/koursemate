<?php
include('includes/header.php');

/* Getting the current page name and storing it in a variable. */
$activePage = basename($_SERVER['PHP_SELF'], ".php");


?>
<style>
:root {
    --red: #fb923c;
    --blue: #171d64;
    --white: #f4f3ea;
}

a:hover {
    text-decoration: none !important;
}

.sidenav {
    border: 1px solid #085e79;
    height: 820px;
    background-color: var(--white);
    z-index: 2;
    display: block;
    position: fixed;
    left: 0%;
    width: 16%;
}

.sidenav ul a li {
    list-style-type: none;
}

.show {
    display: block;
}

.sidenav ul {
    text-align: center;

}

.sidenav ul a {
    display: flex;
    flex-direction: row;
    border-bottom: 1px solid #f2f7f4;
    padding: 5% 0% 5% 12%;
    color: var(--white);
    font-size: 13px;
    text-decoration: none;
    /* background: #f2f7f4; */

    text-transform: capitalize;
    margin: 14px 8px;

}

.sidenav ul a:hover {
    background-color: var(--red);
    color: var(--white) !important;
    border-radius: 10px;
    text-decoration: none !important;
}

.active {
    background-color: var(--red);
    color: var(--white) !important;
    border-radius: 10px;
}



#open,
#close {
    display: none;
    margin: 3%;
    position: absolute;
    z-index: 2;
}

@media (min-width: 0px) and (max-width: 767px) {
    .sidenav {
        display: none;
        width: 65%;
        z-index: 1;
        height: 820px;
        background-color: #fff;
        position: fixed;
        left: 0%;
    }

    #open {
        display: block;
    }

    .sidenav ul {
        text-align: center;
        margin-top: 20% !important;
        padding-top: 0% !important;
    }

    .sidenav ul a {
        font-size: 13px !important;
    }
}
</style>

<body>
    <i class="fa fa-bars py-3 px-3 border-2 text-xl bg-orange-600 rounded-md text-white rounded-full"
        style="color: #085e79; z-index:2; position:fixed; bottom: 0%; right:0%" id='open'></i>

    <div class="sidenav" style="background-color:#fff; border:1px solid #f0efed " id="nav">
        <i class="fa fa-close py-1 px-2 border-2 text-xl  bg-orange-600 rounded-md text-white"
            style="color: #085e79; z-index:2;  " id='close'></i>
        <ul class="">
            <a href="dashboard.php" style="color: #181818;  text-decoration:none"
                class="<?= ($activePage == 'dashboard') ? 'active':''; ?> flex space-x-2  items-center">
                <img src="../assets/icons/speedometer.png" class='cursor-pointer' alt="" style="width: 20px;">
                <span>Dashboard
                </span>
            </a>
            <a href="profile.php" style="color: #181818;  text-decoration:none"
                class="<?= ($activePage == 'profile') ? 'active':''; ?> flex space-x-2  items-center">
                <img src="../assets/icons/profile.png" class='cursor-pointer' alt="" style="width: 20px;">
                <span>Profile</span>
            </a>

            <?php  
            $email = $_SESSION['admin'];
              $sql = "SELECT * FROM admin WHERE Email = '$email' ";
              $result = mysqli_query($conn, $sql);
              
              $row = mysqli_fetch_assoc($result);
              $status = $row['Status'];
            

              if($status == 1):
            ?>
            <a href="admins.php" style="color: #181818;  text-decoration:none"
                class="<?= ($activePage == 'admins') ? 'active':''; ?> flex space-x-2  items-center">
                <img src="../assets/icons/addp.png" class='cursor-pointer' alt="" style="width: 20px;">
                <span>Manage Admins
                </span>
            </a>


            <?php else : ?>
            <?php endif; ?>
            <a href="posts.php" style="color: #181818;  text-decoration:none"
                class="flex space-x-2 items-center <?= ($activePage == 'posts') ? 'active':''; ?>">
                <img src="../assets/icons/idea.png" class='cursor-pointer' alt="" style="width: 20px;">
                <span>Manage Projects</span>
            </a>

            <?php  
                $requestsCount = selectAll('writters', ['Status' => 0]);
                $num = count($requestsCount);
                
            ?>
            <a href="writters_request.php" style="color: #181818;  text-decoration:none"
                class="flex space-x-2 items-center <?= ($activePage == 'writters_request') ? 'active':''; ?>">
                <img src="../assets/icons/implementer.png" class='cursor-pointer' alt="" style="width: 20px;">
                <span>Writters Request </span><span
                    class=' border-green-700 text-white rounded-full px-1 -mt-2 bg-green-700 -ml-4 '
                    style='font-size:10px'>
                    <?php if($num > 0){
                    echo $num;
                    }else{
                        echo '';
                    }  ?></span>
            </a>

            <?php  
            $email = $_SESSION['admin'];
              $sql = "SELECT * FROM admin WHERE Email = '$email' ";
              $result = mysqli_query($conn, $sql);
              
              $row = mysqli_fetch_assoc($result);
              $status = $row['Status'];
              $requestsCount = selectAll('patners', ['Status' => 0]);
              $num = count($requestsCount);
              

              if($status == 1):
            ?>
            <a href="patners_request.php" style="color: #181818;  text-decoration:none"
                class="flex space-x-2 items-center <?= ($activePage == 'patners_request.php') ? 'active':''; ?>">
                <img src="../assets/icons/idea.png" class='cursor-pointer' alt="" style="width: 20px;">
                <span>Patners Request</span><span
                    class=' border-green-700 text-white rounded-full px-1 -mt-2 bg-green-700 -ml-4 '
                    style='font-size:10px'> <?php if($num > 0){
                        echo $num;
                    }else{
                        echo '';
                    }  ?></span>
            </a>
            <?php else : ?>
            <?php endif; ?>



            <a href="../adminBlog/login.php" style="color: #181818;  text-decoration:none"
                class="flex space-x-2 items-center <?= ($activePage == 'subscribers') ? 'active':''; ?>">
                <img src="../assets/icons/blog.png" class='cursor-pointer' alt="" style="width: 20px;">
                <span>Manage Blog</span>
            </a>

            <a href="settings.php" style="color: #181818;  text-decoration:none"
                class="<?= ($activePage == 'settings') ? 'active':''; ?> flex space-x-2  items-center">
                <img src="../assets/icons/execute.png" class='cursor-pointer' alt="" style="width: 20px;">
                <span>Settings</span>
            </a>
            <a href="logout.php" style="color: #181818;  text-decoration:none" class="flex space-x-2 items-center">
                <img src="../assets/icons/shutdown.png" class='cursor-pointer' alt="" style="width: 20px;">
                <span>logout</span>
            </a>


        </ul>
    </div>
    <script>
    var open = document.getElementById('open').addEventListener('click', e => {
        var nav = document.getElementById('nav');
        nav.style.display = 'block';
        document.getElementById('open').style.display = 'none';
        document.getElementById('close').style.display = 'block';

    })

    var close = document.getElementById('close').addEventListener('click', e => {
        var nav = document.getElementById('nav');
        nav.style.display = 'none';
        document.getElementById('open').style.display = 'block';
        document.getElementById('close').style.display = 'none';

    })
    </script>
</body>

</html>