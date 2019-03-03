<?php

include_once("../dbConnect.php");

if(isset($_GET['del'])){
    
    $id = $_GET['del'];
    
    $query = "DELETE FROM speltips_alla WHERE speltips_alla_id=$id";
    
    if(mysqli_query($dbc,$query)){
        echo "<h1> BORTTAGEN </h1>";
        echo "<a href='admin.php'> tillbaka </a>";
    }
    
}

?>