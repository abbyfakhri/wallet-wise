<?php

require_once('connection.php');

function getHistory($connection,$username){
    $query = mysqli_query($connection,"
        
        SELECT 
        transaction_amount,
        transaction_category
        FROM transaction_history

        WHERE username = '$username'

        ORDER BY transaction_id desc;

    ");

    $array = array();

    while($fetchedData = mysqli_fetch_array($query)){

        $array[] = $fetchedData["transaction_amount"];
        //echo "<br>";
        $array[] = $fetchedData["transaction_category"];
    } 


    $json = json_encode($array);

    echo $json;

}

getHistory($connection,$_GET["username"]);

?>