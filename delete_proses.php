<?php
session_start();
require_once('config.php');

$username =$_SESSION['username'];
$data =mysqli_query($conn,"DELETE FROM user WHERE username='$username'");
echo "<script>alert('Akun telah berhasil di delete');window.location='index.php';</script>";
?>