<?php
session_start();

if (isset($_SESSION['email'])) {
    // Redirect to home page or other authorized page
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>CarCare - Login</title>
    <link rel="stylesheet" href="css/login.css">
    <style>
        /* Inline CSS to set background image */
        html,
        body {
            display: grid;
            height: 100%;
            width: 100%;
            place-items: center;
            background-image: url('img/backcar.jpg');
            background-size: cover;
            background-position: center;
            /* background: linear-gradient(-135deg, #c850c0, #4158d0); */
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="title">
            User Login
        </div>
        <form action="logindata.php" method="post">
            <div class="field">
                <input type="email" name="email" required>
                <label>Email Address</label>
            </div>
            <div class="field">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="content">
                <div class="checkbox">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <div class="pass-link">
                    <a href="#">Forgot password?</a>
                </div>
            </div>
            <div class="field">
                <input type="submit" value="Login" name="submit">
            </div>
            <div class="signup-link">
                Not a member? <a href="registration.php">Signup now</a>
            </div>
        </form>
    </div>
</body>

</html>
