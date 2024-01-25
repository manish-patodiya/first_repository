<?php
    session_start();

$con = mysqli_connect("localhost", "root", "") or die("Unable to connect");
mysqli_select_db($con, 'logindb');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    form input {
        font-size: 25px;
    }

    button {
        font-size: 25px;
    }
    </style>


</head>

<body>
    <?php
    print_r($_POST);
        if (isset($_POST['logout'])) {
                $_SESSION["is_user_logged_in"] =  0;
                session_destroy();
        }   
        if (isset($_POST['login'])) {
                $_SESSION["is_user_logged_in"] =  1;

        }   
        if(isset($_SESSION["is_user_logged_in"]) && $_SESSION["is_user_logged_in"] == 1){
            echo "user logged in ";
    ?>
    <form action="" method="post" style="font-size:25px;">
        <input name="logout" type="submit" id="btn"></submit>
    </form>
    <?php
        }else{  
            echo "user logged out ";
    ?>
    <form action="" method="post" style="font-size:25px;">
        <input name="login" type="submit" id="btn"></submit>
    </form>
    <?php 
    

};
    ?>
</body>



</html>