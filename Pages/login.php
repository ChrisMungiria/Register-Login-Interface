<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/loginStyle.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="loginForm">
            <form action="../PHP/loginAction.php" method="POST">
                <h1>Login</h1>
                <label>Email :</label>
                <input class = "text" type="email" name="email" placeholder="johnsmith@example.com" required><br>
                <label>Password :</label>
                <input class = "text" type="password" name="password" placeholder="Password" required><br>
                <input class = "submit" type="submit" value="Login"><br>
                <a href="register.php" class="toRegister">Don't have an account? Register</a>
            </form>
        </div>
    </div>
</body>
</html>