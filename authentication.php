<?php
include_once 'db-inc.php';

 $username = $_POST['usr'];  
    $password = $_POST['pword'];  

    
    $_SESSION['user'] = $username;
    //echo $_SESSION['user'];
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($dbConnection, $username);  
        $password = mysqli_real_escape_string($dbConnection, $password);  
      
        $sql = "select * from register where uname = '$username' and rpwd = '$password'";  
        $result = mysqli_query($dbConnection, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
            header('location: index.html');
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }

  ?>