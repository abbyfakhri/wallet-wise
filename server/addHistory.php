<?php
require_once ('connection.php');

function addHistory($connection,$username,$transaction_amount,$category){
    $query = mysqli_query($connection,"
    INSERT INTO transaction_history
    (username,transaction_amount,transaction_category)
    VALUES
    (
        '$username',
        '$transaction_amount',
        '$category'
    );

    ");

    echo "history successfully added";
}


addHistory($connection,$_POST['username'],$_POST['transaction_amount'],$_POST['category']);

?>