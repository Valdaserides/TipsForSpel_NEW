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
            
            *{
                padding:0;
                margin:0;
            }
            
            main{
                
                width: 100%;
                
                height: auto;
                
            }
            
            #one{
                
                height: auto;
                border-bottom: 2px solid;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                width: 100%;
                
            }
            
            #one h1, #two h1{
                
                text-decoration: underline;
                text-align: center;
                
            }
            
            .all-tips{
                
                display: flex;
                justify-content: center;
                align-items: center;
                
            }
            
            #two{
                
                display: flex;
                flex-direction: column;
                width: 100%;
                height: auto;
                
            }
            
            .tips{
                margin-bottom: 15px;
                border:1px solid;
                width:300px;
                overflow: scroll;
            }
            
            .tips img{
                
                width:250px;
                height:300px;
                
            }
            
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <script>
        
            
        </script>
        
    </head>
    
    <body>
        
        <main>
        <h3><a href="../">TILLBAKA</a></h3>
        <a href="logout.php" style=""> Logga ut </a><br>
        <a href="register.php"> Skapa nytt admin konto </a>
            <div id="one">
               <h1>VÄNTANDE</h1>
                <div class="all-tips">

                <?php
                    
                    $game;
                    
                    $query = "select * from speltips_alla;"; // MySQL question
     
                    $result = mysqli_query($dbc,$query); // The result from the database in a varible
                    
                    while($row = mysqli_fetch_array($result)){ // Writing out everything from the database;
                    
         
                    
                    if($row['speltips_alla_confirmed'] != 1){
                    
                ?>
                    
                    <div class="tips">
                        <a href="delete.php?del=<?php echo $row['speltips_alla_id']; ?>"  > Ta bort </a>
                        <a href="accept.php?acc=<?php echo $row['speltips_alla_id'] ?>"> Acceptera </a>
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
            
            </div>
            
            <div id="two">
                <h1>NUVARANDE</h1>
                <div class="all-tips">

                <?php
                    
                    $game;
                    
                    $query = "select * from speltips_alla;"; // MySQL question
     
                    $result = mysqli_query($dbc,$query); // The result from the database in a varible
                    
                    while($row = mysqli_fetch_array($result)){ // Writing out everything from the database;
                    
         
                    
                    if($row['speltips_alla_confirmed'] == 1){
                    
                ?>
                    
                    <div class="tips">
                        <a href="delete.php?del=<?php echo $row['speltips_alla_id']; ?>"  > Ta bort </a>
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
                
            </div>

        </main>
        
    </body>
    
</html>

<?php




?>



































