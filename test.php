<?php

require_once 'connection.php';

function getUser($string){
    return $string;
}


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

function convertNumber($number){
    $inputWithReplacedComma = str_replace(array(","),"",$number);
    $convertedInput = intval($inputWithReplacedComma);
    return $convertedInput;
}

function editCurrentBalance($connection,$input_amount){
    
    $input = convertNumber($input_amount);

    //echo "input value: ". $input. " <br>";
    
    $currentBalance = convertNumber(getUserBalance($connection));

    //echo "initial value: ". $currentBalance. " <br>";

    $currentBalance = $currentBalance + $input;

    $updateBalance = mysqli_query($connection,"
    UPDATE user_balance
    SET balance = $currentBalance
    WHERE username = 'abby';
    ");

    //echo "after calculation: ". getUserBalance($connection). " <br>";

    //echo getUserBalance($connection);

    

    // change username later to be dynamic
}

if(isset($_GET['addButton']) && isset($_GET['input-amount'])){

    $input_amount = $_GET['input-amount'];
    
    editCurrentBalance($connection,$input_amount);

    //echo getUserBalance($connection);

    //echo "<script>window.location = 'home.php';</script>";
}

//echo "before ". getUserBalance($connection). " <br>";
//echo "calculated: ". editCurrentBalance($connection,'50,000')." <br>";
//echo "after ". getUserBalance($connection)." <br>";

//editCurrentBalance($connection,'20,000');

?>