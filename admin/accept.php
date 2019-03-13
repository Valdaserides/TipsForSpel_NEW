<?php

include('session.php');

if(!isset($_SESSION['login_user'])){
    header("Location: /admin");
}

include_once("../dbConnect.php");

if(isset($_GET['acc'])){
    
    $id = $_GET['acc'];
    
    $query = "UPDATE speltips_alla SET speltips_alla_confirmed = 1 WHERE speltips_alla_id = $id";
    
    if(mysqli_query($dbc,$query)){
        echo "ACCEPTERAD";
        echo "<a href='../adminView.php'> tillbaka </a>";
    }
    else{
        echo $query;
    }
    
}

?>