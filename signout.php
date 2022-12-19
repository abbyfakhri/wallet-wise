<?php
require_once ('connection.php');
require_once ('verify-user.php');

$_GET['username'] = '';
$_GET['password'] = '';



    
    echo "<script>console.log('logout succesfully')</script>";
    echo "<script>window.location = 'index.php'</script>";

mysqli_close($connection);
