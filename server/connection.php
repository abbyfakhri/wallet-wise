<?php
$server_name="localhost:3308";
$username="root";
$password="1234";
$port = 3308;
$db_name="project";

//create connection to db
$connection= mysqli_connect($server_name,$username,$password,$db_name);

//check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
    }
    /* echo "<script>
    
    console.log('succesfully connected to server ')

    </script>"; */
?>