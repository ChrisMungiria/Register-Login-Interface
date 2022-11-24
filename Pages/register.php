<?php
    include('../PHP/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="loginForm">
            <form action="../PHP/registerAction.php" method="POST">
                <h1>Register</h1>
                <label>Firstname :</label>
                <input class = "text" type="text" name="firstname" placeholder="John" required><br>
                <label>Lastname :</label>
                <input class = "text" type="text" name="lastname" placeholder="Smith" required><br>
                <label>Email :</label>
                <input class = "text" type="email" name="email" placeholder="johnsmith@example.com" required><br>
                <label>Password :</label>
                <input class = "text" type="password" name="password" placeholder="Password" required><br>
                <label>Confirm Password :</label>
                <input class = "text" type="password" name="confirmpassword" placeholder="Confirm Password" required><br>
                <input type="submit" class="submit" name="submit" value="Register"><br>
                <a href="login.php" class="toLogin">Already have an account? Login</a>
            </form>
        </div>
    </div>
</body>
</html>