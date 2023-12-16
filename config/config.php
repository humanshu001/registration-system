<?php

$host = "localhost";
$username = "root";
$password = "";	
$dbname = "join_us";


$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    printf("sorry no connection can be build", mysqli_connect_error());
    exit(1);
}


date_default_timezone_set("Asia/Kolkata");
$currentTime = date("Y-m-d H:i:s");