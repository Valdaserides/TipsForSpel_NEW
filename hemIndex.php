<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Hem</title>

    <link rel="stylesheet" href="css/hemIndexCss.css">
    <link rel="stylesheet" href="css/cssMain.css">

    <style>
        
        <?php include("css/speltips.css"); ?>
        
        .main-content{
            
            height: auto;
            
        }
        
        .main-content h1 {

            font-size: 4em;
            color: white;
            text-align: center;
            padding: 35px;

        }

        #hem-text {

            height: auto;
            margin-top: 25px;
            padding: 15px;

        }

        #hem-text p {

            text-align: center;
            color: antiquewhite;
            font-family: 'Karla';
            font-size: 1.4em;

        }

        #latest-tips > h2 {

            color: white;
            font-family: 'Karla';
            text-align: center;
            font-size: 1.1em;
            padding: 5px;

        }

        #latest-tips-container {

            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            flex-wrap: wrap;

        }
        
        .tips{
            display: block;
        }
        
        @media only screen and (max-width: 1000px){
            
            .main-content{
                
                width: 100%;
                
            }
            
        }

        <?php include("css/speltipsDatabase.css");
        ?>

    </style>
    
    <script> // Script for toggeling 
        $(document).ready(function() {

            $(".btn").on("click", function() {

                $(".input").toggleClass("inclicked");
                $(".btn").toggleClass("close");

            });
            
             

        });

        function showTips(x) {

            var y = $(".tips-closed-" + x);
            $(y).css("display", "flex");

        }

        function hideTips(x) {

            var y = $(".tips-closed-" + x);
            y.css("display", "none");

        }

    </script>
    
</head>

<body>

    <?php include("templates/navigation.php"); ?>

    <main>

        <div class="main-content">

            <h1>Välkommen till Tips för spel!</h1>

            <div id="hem-text">
                <p> Här kan du lära dig att bli bättre på ditt favoritspel eller själv lägga ut tips som gör andra spelare bättre. </p>
            </div>

            <div id="latest-tips">

                <h2>Senaste tipsen från våra besökare:</h2>

                <div id="latest-tips-container">

                    <?php
                        
                        require("dbConnect.php");
                        
                        $query = "SELECT * FROM speltips_alla LIMIT 3";
                        
                        $result = mysqli_query($dbc,$query);
                        
                        $arr = array();
                        $n = -1;
                        
                        if(mysqli_num_rows($result) <= 0){
                            echo "<p style='padding:50px; font-size:25px;color:white;text-align:center;'>Inga speltips hittades.</p>";
                        }
                        
                        else{
                            
                            while($row = mysqli_fetch_array($result)){
                                
                                $n++;
                                $arr[$n] = $row['speltips_alla_id'];
            
                        ?>
                    <div class="tips">

                        <img src="imgs/<?php echo $row['speltips_alla_img_name'];?>">
                        <h2><a class="tips-click-<?php echo $arr[$n]; ?>" onclick="showTips(<?php echo $arr[$n]; ?>)" style="color:blue;text-decoration:underline;cursor:pointer;">
                                <?php echo $row['speltips_alla_titel']; ?></a></h2>
                        <p>Publicerare:
                            <?php echo $row['speltips_alla_publicerare']; ?>
                        </p>
                        <p>Spel: <a href="<?php echo $row['speltips_alla_spel']; ?>Index.php">
                                <?php echo $row['speltips_alla_spel']; ?></a></p>
                    </div>
                    <div class="tips-closed tips-closed-<?php echo $arr[$n]; ?>">

                        <div class="kryss"> <span onclick="hideTips(<?php echo $arr[$n]; ?>)">&#10006;</span> </div>
                        <h2>
                            <?php echo $row["speltips_alla_titel"]; ?>
                        </h2>
                        <h5 style="border:none;padding:0;"><i>Spel: </i>
                            <?php echo $row['speltips_alla_spel']; ?>
                        </h5>
                        <h5><i>Publicerat av: </i>
                            <?php echo $row['speltips_alla_publicerare']; ?>
                        </h5>
                        <p>
                            <?php echo $row['speltips_alla_text']; ?>
                        </p>

                    </div>

                    <?php
                        }
                        }
                    ?>

                </div>

                <h2>Kolla ut ännu fler tips <a href="speltipsIndex.php" style="color:white;">här!</a></h2>

            </div>

        </div>

    </main>

    <?php include("templates/footer.php"); ?>

</body>

</html>
