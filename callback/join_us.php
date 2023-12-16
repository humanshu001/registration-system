<?php
include ("../config/config.php");

if(isset($_POST["join"])){
    $mobile = $_POST["mobile"];
    $query = "SELECT * FROM `users` WHERE `mobile` = '$mobile'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        $query = "UPDATE `users` SET `joined_at` = '$currentTime' WHERE `mobile` = '$mobile'";
        $result1 = mysqli_query($conn, $query);
        if($result1){
            header("Location: ../home.php");
        }else{
            echo "<script>alert('Sorry, something went wrong')</script>";
        }
    }else{
        echo "<script>alert('Sorry, you are not registered')</script>";
        header("Location: ../register.php");
    }
}