<?php
$con = mysqli("localhost","root","");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" name="username" placeholder="Enter your name"></input><br>

        <input type="text" name="password" placeholder="Enter your password"></input>

        <input type="submit" name="submit">


    </form>
    <?php

    if( isset( $_POST["submit"]) ){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $query = "select * from user WHERE username=" $_POST["username"]" And password=' $_POST["password"]'";
        $query_run = mysqli_query($con,$query);
        if(mysqli_num_rows($query_run)>0)
        { 
    }   ?>




</body>

</html>