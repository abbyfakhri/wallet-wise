<?php
    require_once('connection.php');

    
        $username = $_GET['username'];
        $password = $_GET['password'];
        
        $query = mysqli_query($connection,"SELECT username, password FROM user where username = '$username' and password = '$password'");

        if(mysqli_num_rows($query) > 0){
            
            echo "found";

            
        }
        else{
            
            echo "notFound";

        }
    

    

?>