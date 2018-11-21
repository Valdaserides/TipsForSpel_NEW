<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Speltips - CSGO</title>
    <link rel="stylesheet" href="css/csgoIndexCss.css">
    <link rel="stylesheet" href="css/cssMain.css">
    
    <style>
    
        .main-content{
            
            height: auto;
            
        }
        
        .tips:hover {
            cursor: default;
        }

        .text {
            
            width: 100%;
            height: 150px;
            padding: 50px;
            display: flex;
            align-items: center;
            flex-direction: column;
            border-bottom: 2px solid;
            
        }

        .text h3 {
            
            background-color: rgb(255, 255, 255,.5);
            text-align: center;
            color: white;
            padding: 25px;
            border-radius: 10px;
            
        }
        
        .all-tips{
            
            width: 100%;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-around;
            
        }

        .tips {

            width: 300px;
            height: 300px;
            background-color: rgba(100, 100, 100, .8);
            border: 1px solid;
            margin: 15px;

        }

        .tips:hover {

            box-shadow: 2px 2px 2px 2px rgb(0, 0, 0);

        }

        .tips img {

            width: 300px;
            height: 170px;

        }

        .tips h2 {

            padding: 5px;
            font-family: 'Karla', sans-serif;
            color: wheat;

        }

        .tips p {

            font-family: 'Karla', sans-serif;
            padding: 5px;
            color: wheat;

        }
        
        form{
            
            margin-top: 80px;
            display: flex;
            flex-direction: row;
            
        }
        
        input[type=text]{
            
            width: 130px;
            box-sizing: border-box;
            border: 1px solid;
            border-radius: 2px;
            font-size: 16px;
            background-color: white;
            background-image: url('imgs/serachicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            transition: width .4s ease-in-out;
            
        }
        
        input[type=text]:focus{
            width: 300px;
        }
        
        input[type=submit]{
            
            border: none;
            background-color: #4CAF50;
            color: white;
            font-weight: 700;
            text-decoration: none;
            width: 65px;
            margin-left: 15px;
            cursor: pointer;
            
        }
        
        input[type=submit]:hover{
            
            background-color: lightgreen;
            
        }
        
        .tips-closed{
            
            padding: 50px;
            height: auto;
            width: 100%;
            background-color: lightskyblue;
            display: none;
            position: fixed;
            margin-top: -300px;
            align-items: center;
            flex-direction: column;
            
        }
        
        .tips-closed span{
            
            cursor: pointer;
            display: inline-block;
            margin-bottom: 20px;
            
        }

        .tips-closed h2{
            
            font-family: 'Karla', sans-serif;
            text-decoration: underline;
            font-size: 2em;
            
        }
        
        .tips-closed h5{
            
            padding: 35px;
            width: 50%;
            border-bottom: 1px solid;
            text-align: center;
            
        }
        
        .tips-closed p{
            
            width: 1000px;
            padding-top: 25px;
            font-family: 'Karla', sans-serif;
            text-align: center;
            overflow: inherit;
            
        }
        
        @media only screen and (max-width: 1000px) {
            
            .tips-closed{
                
                height: 500px;
                
            }
            
            .tips-closed p{
                width: 90%;
                overflow: scroll;
            }
            
        }
        
        @media only screen and (max-width: 900px) {
            
            .tips-closed{
                
                margin-top: -280px;
                
            }
            
            .tips-closed span{
                
                margin: 0;
                
            }
            
            .main-content{
                
                width: 100%;
                
            }
            
            .tips-closed h5{
                
                width: 75%;
                
            }
            
        }
        
        @media only screen and (max-width: 550px) {
            
            .tips-closed{
                height: auto;
            }
            
            .tips-closed h2{
                
                font-size: 1.5em;
                
            }
            
            .tips-closed p{
                
                height: 150px;
                
            }
            
        }
        
        @media only screen and (max-width: 500px) {
            
            
            
        input[type=text]:focus{
            width: 130px;
        }
            
        }

        
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
                    
                    echo "<p style='padding:50px; font-size:25px;color:white;'>Inga speltips hittades.</p>";
                    
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
                    
                    <span onclick="hideTips(<?php echo $arr[$n]; ?>)">&#10006;</span>
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
















