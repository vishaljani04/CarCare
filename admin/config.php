<?php

$hostname ="localhost";
$username ="root";
$password ="";
$database ="CarCare";

// $hostname ="sql208.infinityfree.com";
// $username ="if0_34365807";
// $password ="8VgoQTqcR9jUAGu";
// $database ="if0_34365807_CarCare";

$conn = mysqli_connect($hostname, $username, $password, $database) or die("Not Connect");
$dbconfig = mysqli_select_db($conn, $database);

if ($dbconfig) {
    //Connected;
} else {
    echo " Data base not Connected";
}

?>