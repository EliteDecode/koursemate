<?php 
session_start();
require('includes/header.php');
require('includes/database/db_controllers.php');

if (!isset($_SESSION['admin'])) {
    header('location:login.php');
 }
 $email = $_SESSION['admin'];

 $sql = "SELECT * FROM admin WHERE Email = '$email'";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($result);
 $admin = $row['Name'];
 $ademail = $row['Email'];
 $picture = $row['Picture']
 
?>

<style>
.ba {
    border-style: solid;
    border-width: 1px;
}

.b--black-10 {
    border-color: rgba(0, 0, 0, .1);
}

.b--black-05 {
    border-color: rgba(0, 0, 0, .05);
}

.br3 {
    border-radius: .5rem;
}

.br-100 {
    border-radius: 100%;
}

.dib {
    display: inline-block;
}

.fw4 {
    font-weight: 400;
}

.h4 {
    height: 8rem;
}

.mw5 {
    max-width: 16rem;
}

.w4 {
    width: 8rem;
}

.gray {
    color: #777;
}

.bg-white {
    background-color: #fff;
}

.pa2 {
    padding: .5rem;
}

.pa3 {
    padding: 1rem;
}

.mb2 {
    margin-bottom: .5rem;
}

.mt0 {
    margin-top: 0;
}

.mv3 {
    margin-top: 1rem;
    margin-bottom: 1rem;
}

.tc {
    text-align: center;
}

.f3 {
    font-size: 1.5rem;
}

.f5 {
    font-size: 1rem;
}

.center {
    margin-right: auto;
    margin-left: auto;
}

@media screen and (min-width: 30em) {
    .pa4-ns {
        padding: 2rem;
    }
}
</style>

<?php include ('nav.php') ?>

<body>

    <div class="wrap h-screen" style=" background:#F9F9F9; overflow-x:hidden">

        <div class="row">
            <div class="col-md-2 col-lg-2 col-xl-2">
                <?php include('sidenav.php') ?>
            </div>
            <div class="col-md-10 col-lg-10 col-xl-10" style='padding:0% 5%'>
                <article class="mw5 center bg-white br3 pa3 pa4-ns mv3 ba b--black-10">
                    <div class="tc">
                        <img src="images/<?php echo $picture ?>" class="br-100 h4 w4 dib ba b--black-05 pa2"
                            title="Photo of a kitty staring at you">
                        <h1 class="f3 mb2 capitalize"><?php  echo $admin ?></h1>
                        <h2 class="f5 fw4 gray mt0"><?php echo $ademail ?></h2>
                    </div>
                </article>
            </div>
        </div>
    </div>






    <?php include('includes/footer.php')?>
</body>

</html>