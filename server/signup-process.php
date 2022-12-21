<?php

require_once ('connection.php');


function isExist($user,$connection){
   
    $query = mysqli_query($connection,"
    SELECT username FROM user WHERE username = '$user'; ");

    if(mysqli_num_rows($query)>0){

        return true;

    }
}

function checkIfMatch($password,$confirm){
    if($password != $confirm){

        return false;
    }
    else{
        return true;
    }

}


    $username = $_GET['username'];
    $password = $_GET['password'];
    $confirm_password = $_GET['password2'];

    
        if(isExist($username,$connection) == true){
            echo "alreadyExist";
        }
        else{
            if(checkIfMatch($password,$confirm_password) ==  false){
                echo "notMatch";
            }
            else{

                $query = mysqli_query($connection,"
            
                INSERT INTO user(username,password)
                VALUES (
                        '$username',
                        '$password'
                    );
    
                    
                ");

            
                require_once('connection.php');
    
                $query2 = mysqli_query($connection,"
    
                    INSERT INTO
                    user_balance (username,balance)
                    VALUES
                    ('$username',0);
                
                ");  
    
                echo "success";
            }
        }
    
    
    


?>