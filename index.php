<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/commonstyle.css">
</head>
<body>
    <div class="logo"></div>
    <div class="menu">
        <h2>menu</h2>
    </div>
    <div class="nav">
        <a href="index.php">Home</a>
        <a href="voorlichting.php">Voorlichting</a>
        <a href="inlogscherm.php">Inloggen</a>
        <a href="service.php">Service</a>
    </div>
    <div class="mid">
        <h2>
        </h2>
    </div>
    <div class="fling-minislide">
        <img src="pictures/slideshowfoto1.jpg" alt="Slide 4" />
        <img src="pictures/slideshowfoto2.png" alt="Slide 3" />
        <img src="pictures/slideshowfoto3.jpg" alt="Slide 2" />
        <img src="pictures/slideshowfoto4.jpg" alt="Slide 1" />
      </div>
      <div class="nav2">
        <a href="haalservice.php">Haalservice</a>
        <a href="medicijnoverzicht.php">medicijneoverzicht</a>
        <a href="inschrijven.php">inschrijven</a>
      </div>  
</body>
</html>

<?php
    include("includes/databaselink.php");
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


