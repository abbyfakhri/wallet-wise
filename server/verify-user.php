<?php
    require_once('connection.php');

    if(isset($_GET['username']) && isset($_GET['password'])){
        $username = $_GET['username'];
        $password = $_GET['password'];
        
        $query = mysqli_query($connection,"SELECT username, password FROM user where username = '$username' and password = '$password'");

        if(mysqli_num_rows($query) > 0){
            
            echo "<script>
    
                    console.log('username found ')

                    </script>";
            echo "<script>window.location = '/project/uas/home.html'</script>";

            
        }
        else{
            
            echo "<script>
    
            console.log('username not found ')

            </script>";

            echo "<script>window.location = '/project/uas/index.html';
            alert('username not found');
                </script>";

        }
    }

    echo mysqli_connect_error();
    mysqli_close($connection);

?>