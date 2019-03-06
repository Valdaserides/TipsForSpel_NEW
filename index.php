<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hem</title>

    <style>
        
        <?php include("css/speltips.css"); ?>  /* Including css for tips */
        <?php include("dbConnect.php"); ?>
        
        header {}

        main {

            width: 100%;
            background: url(imgs/header2.jpg);
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding-bottom: 50px;

        }

        .parallax {

            height: 100vh;
            width: 100%;
            background: url(imgs/header2.jpg);
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding-bottom: 200px;

        }

        .parallax h1 {

            text-align: center;
            color: white;
            padding-top: 15vh;
            font-size: 4em;
            font-family: 'Karla';

        }

        .parallax h4 {

            text-align: center;
            color: white;
            font-family: 'Karla';
            font-size: 2em;

        }

        .parallax > a {

            width: 36px;
            height: 36px;
            border: 1px solid white;
            border-radius: 20px;
            position: absolute;
            right: 0;
            left: 0;
            margin: 0;
            margin: auto;
            top: 55%;
            text-align: center;

        }

        .parallax a svg {

            margin-top: 7px;
            fill: white;
            transition: .2s ease;

        }
        
        .parallax a svg:hover{
            fill: black;
        }

        .main-content {

            height: auto;
            background-color: rgba(0, 0, 0, .9);

        }

        #sections {

            width: 100%;
            height: auto;
            display: flex;
            justify-content: space-around;
            flex-direction: row;
            background-color: transparent;
            flex-wrap: wrap;
            margin-top: 30vh;

        }

        #sections section {

            width: 300px;
            height: 350px;
            background-color: lightblue;
            padding: 7px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            margin: 7px;

        }
        
        #sections section:hover{
            box-shadow: 0px 0px 10px #fff;
        }

        #sections section h2,
        p {

            text-align: center;
            font-family: 'Karla';

        }

        #sections section img {

            height: 150px;
            width: 150px;

        }

        #sections section > a {

            background-color: green;
            padding: 9px;
            text-decoration: none;
            color: white;
            font-size: 20px;
            border-radius: 30px;
            transition: .2s ease-in-out;

        }

        #sections section>a:hover {

            background-color: darkgreen;

        }

        .latest {

            width: 100%;
            height: auto;
            background-color: lightblue;
            margin-bottom: 200px;
            padding-bottom: 50px;

        }
        
        .latest h1{
            
            text-align: center;
            font-family: 'Karla';
            padding-top: 20px;
            padding-bottom: 20px;
            
        }
        
        .latest h3{
            
            font-family: 'Karla';
            text-align: center;
            margin-top: 30px;
            
        }

        @media only screen and (max-width: 1330px) {

            .parallax {

                height: auto;
                padding: 0;
                padding-bottom: 30px;

            }

        }

        @media only screen and (max-width: 1000px) {

            .parallax h1 {

                font-size: 2.5em;

            }

        }

        @media only screen and (max-width: 500px) {

            .parallax h1 {

                font-size: 2em;

            }

            .parallax h4 {

                font-size: 1.5em;

            }
            
            .latest h1{
                
                font-size: 1.5em;
                padding: 15px;
                
            }

        }

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            var targetOffseT = $("#sections").offset().top - 150;

            $(".parallax > a").on("click", function() {

                $('html, body').animate({
                    scrollTop: targetOffseT
                }, 200);

            });

        });

    </script>

</head>

<body>

    <?php include("templates/navigation.php"); ?>

    <main>

        <div class="parallax">

            <h1>Välkommen till tips för spel!</h1>
            <h4>Till dig som nybörjare</h4>
            <a href="#"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M23.245 4l-11.245 14.374-11.219-14.374-.781.619 12 15.381 12-15.391-.755-.609z" /></svg></a>

            <div id="sections">

                <section>

                    <img src="imgs/checkmark.png" alt="">

                    <h2>Kom igång med ditt nya spel!</h2>

                    <p>Tips för spel riktar sig mot dig som är nybörjare.</p>
                    <a href="/speltips">Läs mer</a>

                </section>

                <section>

                    <img src="imgs/2-512.png" alt="">

                    <h2>Våra spel</h2>

                    <p>För tillfället är det möjligt att se tips på tre spel; WoW, LoL och CSGO.</p>

                    <a href="/speltips">Läs mer</a>

                </section>
                <section>

                    <img src="imgs/thumb-up.png" alt="">

                    <h2>Publicera dina egna tips!</h2>

                    <p>Hjälp andra att också komma igång genom att publicera dina tips <a href="publiceraIndex.php">här.</a></p>

                    <a href="/publicera">Läs mer</a>

                </section>
                <section>

                    <img src="imgs/5a461410d099a2ad03f9c998.png" alt="">

                    <h2>Synpunkter på sidan?</h2>

                    <p>Om du har synpunkter eller frågor om sidan kan du fylla i formuläret <a href="kontaktIndex.php">här.</a></p>

                    <a href="/kontakt">Läs mer</a>

                </section>

            </div>

        </div>

        <div class="latest">

            <h1> Senaste tipsen från våra tipsare! </h1>
            
            <div class="all-tips" style="justify-content:center;">

                <?php
                
                $query = "select * from speltips_alla order by speltips_alla_id desc limit 3;"; // MySQL question
 
                $result = mysqli_query($dbc,$query); // The result from the database in a varible
                
                $arr = array(); // Making an array to give all tips a unique classname
                $n = -1; // Index for the array
                
                if(mysqli_num_rows($result) <= 0){ // Checking if the table is empty
                    
                    echo "<p style='padding:50px; font-size:25px;color:white;'>Inga speltips hittades.</p>"; // Writing out that there was no speltips found.
                    
                }
                else{
                while($row = mysqli_fetch_array($result)){ // Writing out everything from the database;
                $n++; // Incrementing the index-array
                $arr[$n] = $row['speltips_alla_id']; // The index of the array at index $n, is the same as the id in the database.
                
            ?>

                <div class="tips" style="display:block;">
                    
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
                    <h2> <?php echo $row["speltips_alla_titel"]; ?> </h2>
                    <h5 style="border:none;padding:0;"><i>Spel: </i> <?php echo $row['speltips_alla_spel']; ?> </h5>
                    <h5><i>Publicerat av: </i> <?php echo $row['speltips_alla_publicerare']; ?> </h5>
                    <p> <?php echo $row['speltips_alla_text']; ?> </p>
                  
                </div>
                <?php
                } // Closing loop
                } // Closing else
                ?>
            </div>
            <h3> Kolla ännu mer tips <a href="/speltips">här!</a> </h3>
        </div>

    </main>

    <?php include("templates/footer.php"); ?>

</body>

</html>
