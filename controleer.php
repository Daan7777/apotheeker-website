<?php
include("includes/databaselink.php");
            $username = mysqli_real_escape_string($conn, $_POST["username"]);  
            $password = mysqli_real_escape_string($conn, $_POST["password"]);  
            $password = md5($password);  
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";  
           
            echo $query; 
            $result = mysqli_query($conn, $query);  
            if(mysqli_num_rows($result) > 0)  
            {  
                   $_SESSION['username'] = $username;  
                    header("location:index.php");  
                   //echo '<script>alert("nice User Details")</script>';  
                }  
              else  
              {  
                   echo '<script>alert("Wrong User Details")</script>';  
              }  
  ?>