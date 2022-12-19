<?php
require_once('connection.php');

$username = $_GET['username'];
$redirect = 'edit_profile.php';

if (isset($_POST['ganti']))
{
    $paslam = $_POST['paslam'];
    $pasnew = $_POST['pasnew'];
    $conpas = $_POST['conpas'];

    $cek = mysqli_fetch_array($result);
    if ($paslam=='' || $pasnew=='' || $conpas =='')
    {
        echo "<script>alert('Form tidak boleh ada yang kosong'); window.location='$redirect';</script>";
    }
    if($paslam <> $cek['password'] )
    {
        echo "<script>alert('Password Lama tidak sama'); window.location='$redirect';</script>";
    }
    if($paslam <> $conpas )
    {
        echo "<script>alert('Password Baru dan Konfirmasi Password baru tidak cocok'); window.location='$redirect';</script>";
    }

    $sql = mysqli_query($connection,"UPDATE user SET password = '$pasnew' WHERE username = '$username'");

    if($sql)
    {
        echo "<script>alert('Password berhasil disimpan'); window.location='$redirect';</script>";
    } else
    {
        echo "<script>alert('Password gagal disimpan'); window.location='$redirect';</script>";
    }
}
?>