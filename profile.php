<?php 
session_start();
require_once('connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
</head>

<body style="background-color: rgba(186,180,214,255);">

<div class="header">
        <h1>WalletWise</h1>
</div>

<div class="user-profile">
    <div class="container">
                <div>
                    <img src="assets/bibi.png" alt="" style="width:160px;height:160px;border-radius: 50%;">
                </div>
                
                <h2>Hello, <?php echo $_SESSION['username']; ?></h2>
                <div>
                <div class="container">
                <button class="login-button" >
                    <a href="edit_profile.php" color:#483884>Edit Profile</a>
                    </button>
                </div> 
                <div class="container">
                <button class="login-button" >
                    <a href="signout.php" color:#483884>Signout</a>
                    </button>
                </div>
                <div class="container">
                <button class="login-button" >
                    <a href="delete.php" color:#483884>Delete Account</a>
                    </button>
                </div>

            </div>