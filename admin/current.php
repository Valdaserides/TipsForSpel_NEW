<?php

include('session.php');

if(!isset($_SESSION['login_user'])){
    header("Location: /admin");
}

require('../dbConnect.php');

?>

<html>

<head>

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
        
        main h1{
            text-align: center;
            
        }
        
        .all-tips {

            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;

        }

        .tips {
            margin-bottom: 15px;
            border: 1px solid;
            width: 300px;
            overflow: scroll;
            margin: 5px;
        }

        .tips img {

            width: 250px;
            height: 300px;

        }

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        document.ready(function() {



        });

    </script>

</head>

<body>

    <?php include("navigation.php"); ?>
    <main>



        <h1>Nuvarande speltips</h1>
        <hr>
        <div class="all-tips">

            <?php
                    
                    $game;
                    
                    $query = "select * from speltips_alla;"; // MySQL question
     
                    $result = mysqli_query($dbc,$query); // The result from the database in a varible
                    
                    while($row = mysqli_fetch_array($result)){ // Writing out everything from the database;
                    
         
                    
                    if($row['speltips_alla_confirmed'] == 1){
                    
                ?>

            <div class="tips">
                <a href="delete.php?del=<?php echo $row['speltips_alla_id']; ?>"> Ta bort </a>
                <a href="edit.php?id=<?php echo $row['speltips_alla_id']; ?>&titel=<?php echo $row['speltips_alla_titel']; ?>&publ=<?php echo $row['speltips_alla_publicerare']; ?>&spel=<?php echo $row['speltips_alla_spel']; ?>&text=<?php echo $row['speltips_alla_text']; ?>&img=<?php echo $row['speltips_alla_img_name']; ?>"> Redigera </a>

                <img src="../imgs/<?php echo $row['speltips_alla_img_name'];?>" class="pointer">
                <p> <b> Titel: </b> <?php echo $row['speltips_alla_titel']; ?> </p>
                <p> <b> Publicerare: </b> <?php echo $row['speltips_alla_publicerare']; ?> </p>
                <p> <b> Spel: </b> <?php echo $row['speltips_alla_spel']; ?></p>
                <p> <b> Brödtext: </b> <?php echo $row['speltips_alla_text']; ?> </p>

            </div>

            <?php
                    } // Closing loop
                    
                    }
                    ?>
        </div>


    </main>

</body>

</html>

<?php




?>
