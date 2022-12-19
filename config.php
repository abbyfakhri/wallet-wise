<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$db = "wwise";
 
$conn = mysqli_connect($server, $user, $pass, $db);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>