<?php
require_once ('connection.php');
require_once ('getUserBalance.php');

function updateBalance($connection,$transaction,$username){
    $query = mysqli_query($connection," 
    
        UPDATE
        user_balance
        SET balance = '$transaction'
        WHERE username = '$username';
                
    ");

    getUserBalance($connection,$username);
}

updateBalance($connection,$_POST['data1'],$_POST['username']);


?>