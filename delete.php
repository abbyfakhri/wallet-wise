<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Edit Profile</title>
</head>

<body style="background-color: rgba(186,180,214,255);">

<div class="header">
        <h1>Are you sure you want to delete your account?</h1>
    </div>
    <div class="container">
                <form action="delete_proses.php" method="POST">
                <button class="login-button" name="user_delete" value="<?=$row ['username'];?>">Delete</button>
                     
                </form>
                <div class="container">
                <button class="login-button" >
                    <a href="profile.php" color:#483884>No</a>
                    </button>
                </div>