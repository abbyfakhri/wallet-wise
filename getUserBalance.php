<?php

require_once 'connection.php';

function getUserBalance($connection){
    
    $query = mysqli_query($connection," 
    
        SELECT
        balance
        FROM user_balance
        WHERE username = 'abby';
                
    ");

   

    while($fetchedData = mysqli_fetch_array($query)){

        return 
        number_format($fetchedData['balance']);
    }

}

echo getUserBalance($connection);

?>