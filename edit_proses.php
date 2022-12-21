<?php
session_start();
require_once('config.php');

$username = $_SESSION['username'];
$redirect = 'edit_profile.php';
$result = mysqli_query($conn,"SELECT * FROM user WHERE username ='$username'");

if (isset($_POST['submit']))
{
    $paslam = $_POST['paslam'];
    $pasnew = $_POST['pasnew'];

    $cek = mysqli_fetch_array($result);
        if($paslam <> $cek['password'] )
        {
            echo "<script>alert('Password Lama tidak sama');window.location='$redirect';</script>";
        }else{

            if($paslam <> $pasnew )
            {
                $sql = mysqli_query($conn,"UPDATE user SET password = '$pasnew' WHERE username = '$username'");
                if($sql)
                    {
                    echo "<script>alert('Password berhasil disimpan');window.location='$redirect';</script>";
                    }else
                        {
                            echo "<script>alert('Password gagal disimpan');window.location='$redirect';</script>";
                        }
            }else{
                echo "<script>alert('Password baru dan lama sama ');window.location='$redirect';</script>";
            }
        }
    }

?>