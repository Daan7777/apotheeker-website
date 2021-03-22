<!-- HIER START HET MENU -->
<?php
    function active($currect_page){
    $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
    $url = end($url_array);  
    if($currect_page == $url){
        echo 'deze'; 
    } 
    }
?>
<!DOCTYPE html>
    <img class="logo" src="pictures/logo.png">
        <div class="menu"><h2>menu</h2></div> 
        <div class="nav">
            <a class="<?php active('index.php');?>" href="index.php">Home</a>
            <a class="<?php active('information.php');?>" href="information.php">Voorlichting</a>
            <a class="<?php active('login.php');?>" href="login.php">Account</a>
            <a class="<?php active('service.php');?>" href="service.php">Service</a>
        </div>
</html>
<!-- HIER STOPT HET MENU -->