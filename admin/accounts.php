<?php

include('session.php');

if(!isset($_SESSION['login_user'])){
    header("Location: /admin");
}

require('../dbConnect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Accounts</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        main {

            width: 75%;
            height: auto;
            margin: auto;
            margin-left: 250px;

        }

        main h1 {
            text-align: center;

        }

        .accounts {

            width: 100%;
            height: auto;

        }

    </style>
</head>

<body>
    <?php include("navigation.php"); ?>
    <main>

        <h1>Hantera administratörkonton</h1>
        <hr>

        <div class="accounts">

            <?php
                    
                    $query = "select * from admin;"; // MySQL question
     
                    $result = mysqli_query($dbc,$query); // The result from the database in a varible
                    
                    while($row = mysqli_fetch_array($result)){ // Writing out everything from the database;
                    }
         
                    
                    if($row['speltips_alla_confirmed'] == 1){}
                    
                ?>

        </div>

    </main>

</body>

</html>
