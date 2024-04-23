<?php

include("config.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `register` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Registration Successfully');</script>";
        header("location:login.php");
    } else {
        echo "<script>alert('Failed');</script>";
    }
}

?>