<?php

include('connection.php');

    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        if($password == $confirmpassword){
            $query = "INSERT INTO user_table (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";
            $result = mysqli_query($connection, $query);

            if($result){
                #If the user registers successfully, this redirects them to the login page, you can change this by modifying the location to the page you want to redirect them to
                echo '<script type="text/javascript">alert("Successfully Registered!"); window.location="../Pages/login.php";</script>';
            }else{
                #This may be due to a database error, check connection to the DB and try again
                echo '<script type="text/javascript">alert("Failed to register!"); window.location="../Pages/register.php";</script>';
            }
        }else{
            #This shows that the password did not match, and redirects them to the register page
            echo '<script type="text/javascript">alert("Password not matched!");window.location = "../Pages/register.php";</script>';
        }
    }


?>