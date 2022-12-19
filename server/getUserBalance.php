<?php

require_once 'connection.php';

function getUserBalance($connection,$username){
    
    $query = mysqli_query($connection," 
    
        SELECT
        balance
        FROM user_balance
        WHERE username = '$username';
                
    ");

   

    while($fetchedData = mysqli_fetch_array($query)){

        echo 
        number_format($fetchedData['balance']);
    }

}

getUserBalance($connection,$_GET['username']);

?>