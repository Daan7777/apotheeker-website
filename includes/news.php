<?php /* Dit is de include voor alle news items op de hoofd pagina. */
  $sql = "SELECT * FROM `news` ORDER BY `news`.`Insert_date` DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo " <div class='news'><a href='". $row["Link"]."'target='_blank'  >" . $row["Title"].  $row["Information"]. "</a></div><br>";
      }
    } else {
      echo "0 results";
    }


  {
  $conn -> close();
  }
?>