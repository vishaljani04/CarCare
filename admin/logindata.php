<?php

//     session_start();

//     // error_reporting(0);

//     include('config.php'); 

//     if(isset($_POST['Login'])) {

//         $email = $_POST['email'];
//         $password = $_POST['password'];
     

//         $query = mysqli_query($conn,"SELECT * FROM adminlogin WHERE email = '$email' AND password = '$password' ");
//         $row = mysqli_fetch_array($query);

//         if(is_array($row)) {
//             $_SESSION["email"] = $row['email'];
//             $_SESSION["password"] = $row['password']; 
//         } else {
//             header('Location: index.php');
//         }

//         if(isset($_SESSION["email"])) {
//             header('location:home.php');
//         } else {
//             echo '<script>';
//             echo 'alert("Invalid Email");';
//             echo '</script>';
//         }

// }


session_start();
include('config.php');

if(isset($_POST['Login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn,"SELECT * FROM adminlogin WHERE email = '$email' AND password = '$password' ");
    $row = mysqli_fetch_array($query);

    if($row) {
        $_SESSION["email"] = $row['email'];
        header('Location: home.php');
        exit();
    } else {
        echo '<script>';
        // echo 'alert("Invalid Email or Password");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
        exit();
    }
}

?>