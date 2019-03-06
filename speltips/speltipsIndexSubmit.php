<?php

require("dbConnect.php");

$search = $_GET['search'];
$search = preg_replace("#[^0-9a-ö]#i","",$search);

$query = "SELECT * FROM speltips_alla WHERE speltips_alla_publicerare LIKE '%$search%' OR speltips_alla_titel LIKE '%$search%'";
    
mysqli_query($dbc,$query);

?>