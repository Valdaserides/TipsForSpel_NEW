<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Speltips - WoW</title>
    <link rel="stylesheet" href="css/csgoIndexCss.css">
    <link rel="stylesheet" href="css/cssMain.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>

        <?php include("css/speltips.css"); 
        
        // For comments, check speltipsIndex.php
        
        ?>
        
    </style>

    <script>

        $(document).ready(function(){ /* For comments, look speltipsIndex.php */
            
            $(".btn").on("click",function(){
                
                $(".input").toggleClass("inclicked");
                $(".btn").toggleClass("close");
                
            });
            
            $(".tips").slice(0,9).show(); // For comments, check speltipsIndex.php
            if($(".tips").length <= 9){
               $("#loadMore").hide();
            }
            $("#loadMore").on("click",function(e){
                
                e.preventDefault();
                $(".tips:hidden").slice(0,6).slideDown();
                if($("#tips:hidden").length == 0){
                    $("#loadMore").fadeOut("slow");
                }
                
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

                <h3>World of Warcraft, eller WoW för förkortning, är ett MMORPG spel. WoW släpptes 2004 av Blizzard och förblir en av de populäraste spelen inom MMO-spel.</h3>

                <div class="middle">

                    <form class="search-box" method="get">

                        <input type="text" class="input" name="search" placeholder="Sök efter publicerare, titel mm">
                        <input type="submit" value="Sök" class="">
                        <a href="wowIndex.php" class="submit">Visa alla</a>

                    </form>

                </div>

            </div>

            <div class="all-tips">

                <?php
                
                $query = "SELECT * FROM speltips_wow order by speltips_wow_id desc;";
 
                if(isset($_GET['search'])){
                    
                    $searchq = $_GET['search'];
                    
                    $searchq = preg_replace("#[^0-9a-ö]#i","",$searchq);
                    
                    $query = "SELECT * FROM speltips_wow WHERE speltips_wow_publicerare LIKE '%$searchq%' OR speltips_wow_titel LIKE '%$searchq%';";
                    
                }
                
                $result = mysqli_query($dbc,$query);
                
                $arr = array();
                $n = -1;
                
                if(mysqli_num_rows($result) <= 0){
                    
                    echo "<p style='padding:50px; font-size:25px;color:white;'>Inga speltips hittades. Testa att söka i <a href='speltipsIndex.php' style='color:white;'>alla tips.</a></p>";
                    
                }
                else{
                while($row = mysqli_fetch_array($result)){
                $n++;
                $arr[$n] = $row['speltips_wow_id'];
                
            ?>

                <a class="tips-click-<?php echo $arr[$n]; ?>" onclick="showTips(<?php echo $arr[$n]; ?>)">
                    <div class="tips">

                        <img src="imgs/<?php echo $row['speltips_wow_img_name'];?>" class="pointer">
                        <h2><a class="tips-click-<?php echo $arr[$n]; ?>" onclick="showTips(<?php echo $arr[$n]; ?>)" style="color:blue;text-decoration:underline;cursor:pointer;">
                                <?php echo $row['speltips_wow_titel']; ?></a></h2>
                        <p>Publicerare:
                            <?php echo $row['speltips_wow_publicerare']; ?>
                        </p>
                        <p>Spel: <a href="<?php echo $row['speltips_wow_spel']; ?>Index.php">
                                <?php echo $row['speltips_wow_spel']; ?></a></p>
                    </div>
                </a>
                <div class="tips-closed tips-closed-<?php echo $arr[$n]; ?>">

                    <div class="kryss"><span onclick="hideTips(<?php echo $arr[$n]; ?>)">&#10006;</span></div>
                    <h2>
                        <?php echo $row["speltips_wow_titel"]; ?>
                    </h2>
                    <h5 style="border:none;padding:0;"><i>Spel: </i>
                        <?php echo $row['speltips_wow_spel']; ?>
                    </h5>
                    <h5><i>Publicerat av: </i>
                        <?php echo $row['speltips_wow_publicerare']; ?>
                    </h5>
                    <p>
                        <?php echo $row['speltips_wow_text']; ?>
                    </p>

                </div>
                <?php
                }
                }
                ?>
            </div>
            <a href="#" id="loadMore">Visa mer</a>
        </div>

    </main>

    <?php include("templates/footer.php"); ?>

</body>

</html>
