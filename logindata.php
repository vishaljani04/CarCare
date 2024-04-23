<?php
session_start();
include('config.php');

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn,"SELECT * FROM register WHERE email = '$email' AND password = '$password' ");
    $row = mysqli_fetch_array($query);

    if($row) {
        $_SESSION["email"] = $row['email'];
        header('Location: index.php');
        exit();
    } else {
        echo '<script>';
        echo 'alert("Invalid Email or Password");';
        echo 'window.location.href = "login.php";';
        echo '</script>';
        exit();
    }
}
?>
