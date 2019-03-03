<?php

include('session.php');

if(!isset($_SESSION['login_user'])){
    header("Location: admin.php");
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
            
            #one{
                
                display: flex;
                flex-direction: row;
                flex-wrap:wrap;
                justify-content:center;
                width: 100%;
                height: auto;
                
            }
            
            #one{
                
                
                
            }
            
            .tips{
                margin-bottom: 15px;
                border:1px solid;
                width:300px;
                
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
        <a href="logout.php" style=""> Logga ut </a>
            <div id="one">
                
                <div class="all-tips">

                <?php
                    
                    $game;
                    
                    $query = "select * from speltips_alla;"; // MySQL question
     
                    $result = mysqli_query($dbc,$query); // The result from the database in a varible
                    
                    while($row = mysqli_fetch_array($result)){ // Writing out everything from the database;
                    
         
                    
                    if($row['speltips_alla_confirmed'] != 1){
                    
                ?>
                    <a href="delete.php?del=<?php echo $row['speltips_alla_id']; ?>"  > Ta bort </a>
                    <a href="accept.php?acc=<?php echo $row['speltips_alla_id'] ?>"> Acceptera </a>
                    <div class="tips">
     
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



































