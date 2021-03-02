<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/commonstyle.css">
</head>
<body> 
    <img class="logo" src="pictures/banner.jpg">
    <div class="menu">    <h2>menu</h2> </div> 
        <div class="nav">
        <a href="index.php">Home</a>
        <a href="voorlichting.php">Voorlichting</a>
        <a href="inlogscherm.php">Account</a>
        <a href="service.php">Service</a>
    </div> <br>
        </body>
    <div class="mid">
        </h2>
    </div>
    <?php  
   include("includes/databaselink.php");
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:index.php?action=login");  
 }  
 ?>  
      <head>  
           <title>U bent ingelogd</title>  
      </head>  
      <body>  
           <br /><br />  
           <div class="account" style="width:500px;">  
                <h3 text-align="center">U bent ingelogd!</h3>  
                <br />  
                <?php  
                echo '<h1>Welcome - '.$_SESSION["username"].'</h1>';  
                echo '<label><a href="logout.php">Logout</a></label>';  
                ?>  
           </div>  
      </body>  
 </html> 