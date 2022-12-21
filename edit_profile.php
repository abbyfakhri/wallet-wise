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
        <h1>Edit Profile</h1>
    </div>

    <div class="box">
        <?php include 'edit_proses.php' ?>
    <form action="" method="post">
    <div class="container">
         <div id="password" class="forms container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                    </svg>

                    <div>
                            <div >
                              <input type="text" name="paslam" id="name" placeholder ="Old Password" style= "text-align: center;" class = "textbox" required>
                            </div>
                    </div>
        </div>
    </div>
    <div class="container">
        <div id="password" class="forms container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                    </svg>

                    <div>
                            <div >
                              <input type="text" name="pasnew" id="name" placeholder ="New password" style= "text-align: center;" class = "textbox" required>
                            </div>
                    </div>
        </div>
    </div>
    <div class="container">
        <div id="password" class="forms container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                    </svg>

                    <div>
                            <div >
                              <input type="text" name="conpas" id="name" placeholder ="Confirm Password" style= "text-align: center;" class = "textbox" required>
                            </div>
                    </div>
        </div>
        </div>

                <div class="container">
                <button name="submit" class="login-button" style ="color:white; text-decoration: none;" >
                        Save
                    </button>
                </div>
                <div class="container">
                <button class="login-button" >
                    <a href="home.php" color:#483884>Back</a>
                    </button>
                </div>

    </div>
</form>
</div>
    