<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$db = "wallet";
 
$conn = mysqli_connect($server, $user, $pass, $db);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>