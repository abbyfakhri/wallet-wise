<?php
require_once('config.php');

$query = mysqli_query($conn, "DELETE FROM user WHERE username='$_GET[username]'");

if ($query) {
    echo 'Data berhasil dihapus!';
    echo "<meta http-equiv='refresh' content='1;url=?hal=pegawai'>";
} else {
    echo 'Tidak dapat menghapus data!<br/>';
    echo mysqli_error($conn);
}