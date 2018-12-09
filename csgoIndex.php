<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Speltips - CSGO</title>
    <link rel="stylesheet" href="css/csgoIndexCss.css">
    <link rel="stylesheet" href="css/cssMain.css">
    
    <style>
    
        <?php include("css/speltips.css"); ?>
        
    </style>
    
    <script>

        $(document).ready(function(){
            
            $(".btn").on("click",function(){
                
                $(".input").toggleClass("inclicked");
                $(".btn").toggleClass("close");
                
            });
            
        });
        
        function showTips(x){
            
            var y = $(".tips-closed-" + x);
            $(y).css("display","flex");
            
        }
        
        function hideTips(x){
            
            var y = $(".tips-closed-" + x);
            y.css("display","none");
            
        }

        
    </script>
    
</head>

<?php

require("dbConnect.php");
    
mysqli_query($dbc,"SET NAMES UTF-8");
    
?>

<body>
    
    <?php include("templates/navigation.php"); ?>
    
    <main>
        
        <div class="main-content">
            
            <div class="text">

                <h3>Tips för Spel</h3>

                <div class="middle">

                    <form class="search-box" method="get">

                        <input type="text" class="input" name="search" placeholder="Sök efter publicerare, titel mm">
                        <input type="submit" value="Sök" class="submit">
                        <input type="submit" value="Visa alla">

                    </form>

                </div>

            </div>

            <div class="all-tips">

                <?php
                
                $query = "SELECT * FROM speltips_csgo;";
 
                if(isset($_GET['search'])){
                    
                    $searchq = $_GET['search'];
                    
                    $searchq = preg_replace("#[^0-9a-ö]#i","",$searchq);
                    
                    $query = "SELECT * FROM speltips_csgo WHERE speltips_csgo_publicerare LIKE '%$searchq%' OR speltips_csgo_titel LIKE '%$searchq%';";
                    
                }
                
                $result = mysqli_query($dbc,$query);
                
                $arr = array();
                $n = -1;
                
                if(mysqli_num_rows($result) <= 0){
                    
                    echo "<p style='padding:50px; font-size:25px;color:white;'>Inga speltips hittades. Testa att söka i <a href='speltipsIndex.php'>alla tips.</a></p>";
                    
                }
                else{
                while($row = mysqli_fetch_array($result)){
                $n++;
                $arr[$n] = $row['speltips_csgo_id'];
                
            ?>

                <div class="tips">
                    
                    <img src="imgs/<?php echo $row['speltips_csgo_img_name'];?>">
                    <h2><a class="tips-click-<?php echo $arr[$n]; ?>" onclick="showTips(<?php echo $arr[$n]; ?>)" style="color:blue;text-decoration:underline;cursor:pointer;">
                            <?php echo $row['speltips_csgo_titel']; ?></a></h2>
                    <p>Publicerare:
                        <?php echo $row['speltips_csgo_publicerare']; ?>
                    </p>
                    <p>Spel: <a href="<?php echo $row['speltips_csgo_spel']; ?>Index.php">
                            <?php echo $row['speltips_csgo_spel']; ?></a></p>
                </div>
                <div class="tips-closed tips-closed-<?php echo $arr[$n]; ?>"> 
                    
                    <div class="kryss"> <span onclick="hideTips(<?php echo $arr[$n]; ?>)">&#10006;</span> </div>
                    <h2> <?php echo $row["speltips_csgo_titel"]; ?> </h2>
                    <h5 style="border:none;padding:0;"><i>Spel: </i> <?php echo $row['speltips_csgo_spel']; ?> </h5>
                    <h5><i>Publicerat av: </i> <?php echo $row['speltips_csgo_publicerare']; ?> </h5>
                    <p> <?php echo $row['speltips_csgo_text']; ?> </p>
                  
                </div>
                <?php
                }
                }
                ?>
            </div>

            
        </div>
        
    </main>
    
    <?php include("templates/footer.php"); ?>
    
</body>
</html>
















