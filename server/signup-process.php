<?php
require_once ('connection.php');


function isExist($user,$connection){
   
    $query = mysqli_query($connection,"
    SELECT username FROM user WHERE username = '$user'; ");

    if(mysqli_num_rows($query)>0){

        

        echo "<script>window.location = '/project/uas/signup.html';alert('user already exist');</script>";

    }
}

function checkIfMatch($password,$confirm){
    if($password != $confirm){

        
        echo "
        <script>alert('password not match, try again')</script>
        ";
        echo "<script>window.location = '/project/uas/signup.html';</script>";


        if(isset($_GET['create-password']) && $_GET['confirm-password']){
            $_GET['create-password']='';
            $_GET['confirm-password']='';
        }
        return false;
    }
    else{
        return true;
    }

}

if(isset($_GET['username']) && isset($_GET['create-password']) && $_GET['confirm-password']){
    $username = $_GET['username'];
    $password = $_GET['create-password'];
    $confirm_password = $_GET['confirm-password'];

    isExist($username,$connection);

    if(checkIfMatch($password,$confirm_password) == true){
        $query = mysqli_query($connection,"
        
        INSERT INTO user(username,password)
        VALUES (
                '$username',
                '$password'
               );

               
        ");



        //mysqli_close($connection);

        require_once('connection.php');

          $query2 = mysqli_query($connection,"

            INSERT INTO
            user_balance (username,balance)
            VALUES
            ('$username',0);
        
        ");  

        echo "
        <script>alert('account created')</script>
        ";
        echo "<script>window.location = '/project/uas/home.html';                    
        sessionStorage.setItem('username', '$username');
        </script>";

    }

}
?>