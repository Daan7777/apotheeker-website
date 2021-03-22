<!DOCTYPE html>
  <html lang="nl">
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
    <div class="fling-minislide"> <!-- Dit is onze slideshow. -->
      <img src="pictures/slideshowfoto5.jpg" alt="Slide 5" />
      <img src="pictures/slideshowfoto6.jpg" alt="Slide 6" />
      <img src="pictures/slideshowfoto7.jpg" alt="Slide 7" />
    </div>
    <div class="route"> <!-- Google maps -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2413.1749007871044!2d4.804512316006107!3d52.78315422444554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47cf4e220fb31a05%3A0x6ff5d3d7e39e81d8!2sACN%20%7C%20Apotheek%20Schagen%2C%20locatie%20Zuiderweg!5e0!3m2!1snl!2snl!4v1612265160880!5m2!1snl!2snl" width="250" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="mid">
      <p>
        Onze service
      </p>
    </div>
      <div class="nav2"> <!-- Dit is het 2e navigatie menu. -->
      <a href="collectionservice.php"> Herhaalservice </a>
      <a href="medicineoverview.php">Medicijnoverzicht</a>
      <a href="form.php">Formulier</a>
    </div>
    <div class="openingstijden"> <!-- Openingstijden -->
      <p> Openingstijden: <br>	Elke dag: 08:00–18:00 
      </p> 
    </div>
    <div class="adres"> <!-- Adres -->
      <p> Adres: <br> Zuiderweg, Nieuwstraat 23/69</p>
    </div>  
    <div class="newslist">
      Nieuws: <br><br> 
      <?php /* Dit zijn de PHP includes. */
      include("includes/databaselink.php");
      include("includes/news.php");
      ?>
    </div>
  </body>
</html>