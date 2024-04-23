<?php

$hostname ="localhost";
$username ="root";
$password ="";
$database ="carcare";

$conn = mysqli_connect($hostname, $username, $password, $database) or die("Not Connect");
$dbconfig = mysqli_select_db($conn, $database);

if ($dbconfig) {
    //Connected;
} else {
    echo " Data base not Connected";
}

?>