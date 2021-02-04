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
    <div class="menu">    <h2>menu</h2> </div> <br>
        <div class="nav">
        <a href="index.php">Home</a>
        <a href="voorlichting.php">Voorlichting</a>
        <a href="inlogscherm.php">Inloggen</a>
        <a href="service.php">Service</a>
    </div>
    <br>
<div class="container">
  <form action="connect.php" method="post">

    <label for="fname">Naam</label>
    <input type="text" id="fname" name="firstname" placeholder="Uw naam..">

    <label for="lname">Achternaam</label>
    <input type="text" id="lname" name="lastname" placeholder="Uw achternaam..">

    <label for="mail">Mail Adress</label>
    <input type="text" id="mail" name="mail" placeholder="Uw mail adres..">

    <label for="country">Land</label>
    <select id="country" name="country">
      <option value="nederland">Nederland</option>
    </select>

    <label for="subject">Onderwerp</label>
    <textarea id="subject" name="subject" placeholder="Uw vraag?.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</body>
</div> 
    <div class="mid">
        </h2>
    </div>
    <?php
    
    include("includes/databaselink.php");
    ?>