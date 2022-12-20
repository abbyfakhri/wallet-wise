<?php
session_start();
require_once('config.php');

if(isset($_POST['user_delete']))
{
    $username = $_POST['user_delete'];
    
    $query = "DELETE FROM user WHERE username='$username'";
    $quer_run =  mysqli_query($conn,$query);

    if ($query_run) {
        echo "<script>alert('Succesful')</script>";
        header("Location: home.php");
    } else {
        echo "<script>alert('Failed')</script>";
        header("Location: index.php");
    }
}