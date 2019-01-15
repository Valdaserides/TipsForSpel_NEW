<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hem</title>

    <style>
        <?php include("css/speltips.css");
        ?><?php include("css/speltipsDatabase.css");

        ?>header {}

        main {

            height: auto;
            width: 100%;

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

        #sections section h2,
        p {

            text-align: center;
            font-family: 'Karla';

        }

        #sections section img {

            height: 150px;
            width: 150px;

        }
        
        #sections section > a{
            
            background-color: green;
            padding: 5px;
            text-decoration: none;
            color: white;
            font-size: 20px;
            border-radius: 15px;
            transition: .2s ease-in-out;
            
        }
        
        #sections section > a:hover{
            background-color: darkgreen;
        }

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            
            var targetOffseT = $("#sections").offset().top - 150;
            
            $(".parallax > a").on("click", function() {

                $('html, body').animate({
                    scrollTop: targetOffseT }, 200);

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
                    <a href="speltipsIndex.php">Läs mer</a>

                </section>

                <section>

                   <img src="imgs/2-512.png" alt="">
                   
                    <h2>Våra spel</h2>

                    <p>För tillfället är det möjligt att se tips på tre spel; WoW, LoL och CSGO.</p>
                    
                    <a href="speltipsIndex.php">Läs mer</a>

                </section>
                <section>

                    <img src="imgs/thumb-up.png" alt="">

                    <h2>Publicera dina egna tips!</h2>

                    <p>Hjälp andra att också komma igång genom att publicera dina tips <a href="publiceraIndex.php">här.</a></p>
                    
                    <a href="publiceraIndex.php">Läs mer</a>

                </section>
                <section>

                    <img src="imgs/5a461410d099a2ad03f9c998.png" alt="">

                    <h2>Synpunkter på sidan?</h2>

                    <p>Om du har synpunkter eller frågor om sidan kan du fylla i formuläret <a href="kontaktIndex.php">här.</a></p>
                    
                    <a href="kontaktIndex.php">Läs mer</a>

                </section>

            </div>

        </div>

        

    </main>
    
    <?php include("templates/footer.php"); ?>
    
</body>

</html>
