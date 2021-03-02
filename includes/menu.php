<!-- HIER START HET MENU -->
<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'deze'; //class name in css 
  } 
}
?>
<img class="logo" src="pictures/banner.jpg">
    <div class="menu"><h2>menu</h2></div> 
    <div class="nav">
        <a class="<?php active('index.php');?>" href="index.php">Home</a>
        <a class="<?php active('voorlichting.php');?>" href="voorlichting.php">Voorlichting</a>
        <a class="<?php active('inlogscherm.php');?>" href="inlogscherm.php">Account</a>
        <a class="<?php active('service.php');?>" href="service.php">Service</a>
    </div>

<!-- HIER STOPT HET MENU -->