<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/commonstyle.css">
  </head>
  <body>
    <img class="logo" src="pictures/banner.jpg">
    <div class="menu">
      <h2>menu</h2>
    </div>
    <div class="nav">
      <a href="index.php">Home</a>
      <a href="voorlichting.php">Voorlichting</a>
      <a href="inlogscherm.php">Inloggen</a>
      <a href="service.php">Service</a>
    </div>
    <div class="fling-minislide">
      <img src="pictures/slideshowfoto1.jpg" alt="Slide 4" />
      <img src="pictures/slideshowfoto2.png" alt="Slide 3" />
      <img src="pictures/slideshowfoto3.jpg" alt="Slide 2" />
      <img src="pictures/slideshowfoto4.jpg" alt="Slide 1" />
    </div>
    <div class="route">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2413.1749007871044!2d4.804512316006107!3d52.78315422444554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47cf4e220fb31a05%3A0x6ff5d3d7e39e81d8!2sACN%20%7C%20Apotheek%20Schagen%2C%20locatie%20Zuiderweg!5e0!3m2!1snl!2snl!4v1612265160880!5m2!1snl!2snl" width="250" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="mid">
      <p>
        Onze service
      </p>
    </div>
      <div class="nav2">
      <a href="haalservice.php"> herhaalservice </a>
      <a href="medicijnoverzicht.php">medicijnoverzicht</a>
      <a href="inschrijven.php">inschrijven</a>
    </div>
    <div class="openingstijden">
      <p>Openingstijden</p>
    </div>
    <div class="adres">
      <p>Adres</p>
    </div>  
    <div class="newslist">
      <?php
    include("includes/databaselink.php");
    $sql = "SELECT * from news";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo " <div class='news'><a href='". $row["Link"]."'>" . $row["Title"].  $row["Information"]. "</a></div><br>";
      }
    } else {
      echo "0 results";
    }


{
$conn -> close();
}

?>
    </div>
  </body>
</html>