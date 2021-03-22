<!DOCTYPE html> <!-- Dit is de medicine overvieuw waar alle medicijnen op de pagina word gezet. -->
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
    <br>
    <div 
        class="mid">
    </div>
    <div
        class="border2">
    </body>
    <?php /* Dit zijn de includes voor de databaselink + de medicijnen. */
        include("includes/databaselink.php");
        include("includes/medicines.php");
    ?>
    </div>
</html>
