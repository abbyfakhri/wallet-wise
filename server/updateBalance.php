<?php
require_once ('connection.php');
require_once ('getUserBalance.php');

function updateBalance($connection,$transaction){
    $query = mysqli_query($connection," 
    
        UPDATE
        user_balance
        SET balance = '$transaction'
        WHERE username = 'abby';
                
    ");
}

updateBalance($connection,$_POST['data1']);

getUserBalance($connection);
?>