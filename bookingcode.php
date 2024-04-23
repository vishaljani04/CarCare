<?php
include("config.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $services = $_POST['services'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `booking` (`name`, `email`, `services`, `date`, `message`) VALUES ('$name', '$email', '$services', '$date', '$message')";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Message sent Successfully');</script>";
        header("location:booking.php");
        exit();
    } else {
        echo "<script>alert('Failed');</script>";
    }
}


// Waterless Car Washing Booking System Code

if (isset($_POST['washbook'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $num = $_POST['num'];
    $date = $_POST['date'];
    $state = $_POST['state'];
    $services = $_POST['services'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `carwashbook` (`fname`, `lname`, `email`, `num`, `date`, `state`, `services`,`city`, `address`, `gender`) VALUES ('$fname', '$lname', '$email', '$num', '$date', '$state', '$services', '$city', '$address','$gender')";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Booking Successfully');</script>";
        header("location:index.php");
        exit();
    } else {
        echo "<script>alert('Failed');</script>";
    }
}

// Waterless Car Washing Booking System Code

if (isset($_POST['carbook'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $num = $_POST['num'];
    $date = $_POST['date'];
    $state = $_POST['state'];
    $cars = $_POST['cars'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `carbook` (`fname`, `lname`, `email`, `num`, `date`, `state`, `cars`,`city`, `address`, `gender`) VALUES ('$fname', '$lname', '$email', '$num', '$date', '$state', '$cars', '$city', '$address','$gender')";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Booking Successfully');</script>";
        header("location:index.php");
        exit();
    } else {
        echo "<script>alert('Failed');</script>";
    }
}

if (isset($_POST['carrent'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $num = $_POST['num'];
    $date = $_POST['date'];
    $state = $_POST['state'];
    $cars = $_POST['cars'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `carrent` (`fname`, `lname`, `email`, `num`, `date`, `state`, `cars`,`city`, `address`, `gender`) VALUES ('$fname', '$lname', '$email', '$num', '$date', '$state', '$cars', '$city', '$address','$gender')";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Booking Successfully');</script>";
        header("location:index.php");
        exit();
    } else {
        echo "<script>alert('Failed');</script>";
    }
}

?>
