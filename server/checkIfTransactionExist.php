<?php
require_once('connection.php');


function check($connection,$username){

$query = mysql_query($connection,"

    SELECT transaction_id FROM transaction_history
    WHERE username = $username;

");

    echo mysqli_num_rows($query);


}


check($connection,$_GET['username']);

?>