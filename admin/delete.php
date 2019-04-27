<?php

include('session.php');

if(!isset($_SESSION['login_user'])){
    header("Location: /admin");
}
include_once("../dbConnect.php");

if(isset($_GET['del'])){
    
    $id = $_GET['del'];
    
    $query = "DELETE FROM speltips_alla WHERE speltips_alla_id=$id";
    
    if(mysqli_query($dbc,$query)){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    
}

?>