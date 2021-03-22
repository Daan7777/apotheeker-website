 <?php  
    /* Dit is de logout. */  
    session_start();  
    session_destroy();  
    header("location:index.php?action=login");  
 ?>  