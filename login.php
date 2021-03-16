<!DOCTYPE html>
     <html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <link rel="stylesheet" href="css/commonstyle.css">
     </head>
     <body> 
          <?php
               Include ("includes/menu.php");
          ?>
          </div>
     </body>
          <div class="mid">
               </h2>
          </div>
     <?php  
          if(isset($_GET["action"]) == "login")  
     {  
     ?>  
          <h3 align="center">Register</h3>  
          <br>  
          <form method="post">  
          <label><b>Gebruikersnaam</label>  
          <input type="text"  placeholder="Uw Gebruikersnaam.." name="username" class="form-control" />  
          <br>  
          <label>Wachtwoord</label>  
          <input type="text"  placeholder="Uw Wachtwoord.." name="password" class="form-control" />  
          <br>  
          <input type="submit" name="register" value="Register" class="btn btn-info" />  
          <br>  
          <p align="center"><a href="login.php">Login</a></p>  
          </form>  
     <?php  
     }   
          else  
     {  
     ?>  
          <h3 align="center">Login</h3>  
          <br>   
          <form method="post" >  
          <label for="username"><b>Gebruikersnaam</b></label>
          <input type="text" placeholder="Uw Gebruikersnaam.." name="username" required>
          <br>   
          <label><b>Wachtwoord</label>  
          <input type="text" placeholder="Uw Wachtwoord.." name="password" class="form-control" />  
          <br>  
          <input type="submit" name="login" value="Login" class="btn btn-info" />  
          <br>  
          <p align="center"><a href="login.php?action=login">Register</a></p>  
          </form>
     <?php       
     } 
     ?>  
     <?php
          include("includes/databaselink.php");
          session_start();
          if(isset($_SESSION["username"]))  
          {  
          header("location:entry.php");  
          }  
          if(isset($_POST["register"]))  
          {  
          if(empty($_POST["username"]) && empty($_POST["password"]))  
          {  
          echo '<script>alert("Both Fields are required")</script>';  
          }  
          else  
          {  
               $username = mysqli_real_escape_string($conn, $_POST["username"]);  
               $password = mysqli_real_escape_string($conn, $_POST["password"]);  
               $password = md5($password);  
               $query = "INSERT INTO users (username, password) VALUES('$username', '$password')";  
               if(mysqli_query($conn, $query))  
          {  
               echo '<script>alert("Registration Done")</script>';  
          }  
          }  
          }  
               if(isset($_POST["login"]))  
          {  
               if(empty($_POST["username"]) && empty($_POST["password"]))  
          {  
               echo '<script>alert("Both Fields are required")</script>';  
          }  
               else  
          {  
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
          }  
          } 
     ?>
</html>