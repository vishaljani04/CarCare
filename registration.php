
 <!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Registration Form - Car Care</title>
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
            User Registration
        </div>
        <form action="registration_code.php" method="post">
            <div class="field">
                <input type="text" name="name" required>
                <label>Name</label>
            </div>
            <div class="field">
                <input type="email" name="email" required>
                <label>Email Address</label>
            </div>
            <div class="field">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="content">
                <label>-------- Car Care --------</label>
            </div>
            <div class="field">
                <input type="submit" name="submit" value="Register">
            </div>
            <div class="signup-link">
                Already have a Member? <a href="login.php">Login now</a>
            </div>
        </form>
    </div>
</body>

</html>