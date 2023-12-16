<?php

include("../config/config.php");

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];

    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($image_tmp, '../images/' . $image);

    $check = "SELECT * FROM `users` WHERE `email` = '$email' OR `mobile` = '$number'";
    $result = mysqli_query($conn, $check);
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Sorry, you are already registered')</script>";
    } else {


    $query = "INSERT INTO users (name, email, mobile, address, image) VALUES ('$name', '$email', '$number', '$address', '$image')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: ../join_us.php");
    } else {
        echo "sorry something went wrong";
    }}
} else {
    echo "sorry something went wrong";
}