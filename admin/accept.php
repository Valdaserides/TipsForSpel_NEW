<?php

include_once("../dbConnect.php");

if(isset($_GET['acc'])){
    
    $id = $_GET['acc'];
    
    $query = "UPDATE speltips_alla SET speltips_alla_confirmed = 1 WHERE speltips_alla_id = $id";
    
    if(mysqli_query($dbc,$query)){
        echo "ACCEPTERAD";
        echo "<a href='admin.php'> tillbaka </a>";
    }
    else{
        echo $query;
    }
    
}

?>