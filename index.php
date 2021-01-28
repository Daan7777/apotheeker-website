<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    lalalala
    <br>
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
        echo " " . $row["Title"].  "<br>";
      }
    } else {
      echo "0 results";
    }
  

{
$conn -> close();
}
  
?>
