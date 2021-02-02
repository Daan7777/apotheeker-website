<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/commonstyle.css">
</head>
<body>
<div class="logo">
</div>
<div class="menu">
<h2>menu</h2>
</div>
    <div class="nav">
    <a href="index.php">Home</a>
        <a href="voorlichting.php">Voorlichting</a>
        <a href="inlogscherm.php">Inloggen</a>
        <a href="service.php">Service</a>
</div>
    <div class="slideshow">
    <img class="mySlides w3-animate-fading" src="slideshowfoto1">
    <img class="mySlides w3-animate-fading" src="slideshowfoto2">
    <img class="mySlides w3-animate-fading" src="slideshowfoto3">
    <img class="mySlides w3-animate-fading" src="slideshowfoto4">
</div>  
    <div class="mid">
        <h2>
        </h2>
    </div>
</body>
</html>

<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "apotheek";
   
  // Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    
  

    $sql = "SELECT * from news";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo " " . $row["Title"].  $row["Information"]. "<br>";
      }
    } else {
      echo "0 results";
    }
  

{
$conn -> close();
}
  
?>
