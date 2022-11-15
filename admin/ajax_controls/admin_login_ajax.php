<?php

session_start();

include('../includes/database/db_controllers.php');

$email = $_POST["email"];
$password = $_POST["password"];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "invalid email";
        }else{

    
                
                 $query = "SELECT * FROM `admin` WHERE Email = '".$email."'";
                 $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) >= 1) {
                $row = mysqli_fetch_array($result);
                $pwd = $row['Pwd'];
                if ($password == $pwd){
                    $_SESSION['admin'] = $email;
                    echo "success";
                }else{
                echo"incorrect password";
                }
            }else{
            echo "unknown email";
            }
           

           


           

        }
        