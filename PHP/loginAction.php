<?php

    #Change this to your PHPMyAdmin Username
    $username = "USERNAME";
    #Change this to your PHPMyAdmin Password
    $password = "PASSWORD";
    #Change this to your Database Name
    $database = "users";

    #If your localhost is on port 3306 you can change this to 'localhost' or 'localhost:3306'
    #If your localhost is on a different port you can change this to 'localhost:PORT'
    $connection = mysqli_connect("localhost:3307", $username, $password, $database);

    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    $query = "SELECT * FROM user_table WHERE email = '$userEmail' AND password = '$userPassword'";
    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result) > 0){
        #If the user logs in successfully, redirect them to the home page by adding 'window.location="home.php"', or whatever page you want to redirect them to
        echo '<script type="text/javascript">alert("Login Successful!");</script>';
    }else{
        #If you want to redirect to a different page on failed login change the location to the page you want to redirect to
        echo '<script type="text/javascript">alert("Login Failed!"); window.location="login.php";</script>';
    }


?>