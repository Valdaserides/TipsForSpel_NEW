<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
    <link rel="stylesheet" type="text/css" href="/css/kontaktIndexCss.css">
    <link rel="stylesheet" href="css/cssMain.css">

    <style>

        @import url('https://fonts.googleapis.com/css?family=Karla:700');

        *{

            margin: 0;
            padding: 0;

        }
        
        .main-content{
            
            height: auto;
            padding-bottom: 25px;
            font-family: 'Karla', sans-serif;
            
        }
        
        #mailFail{
            
            display: none;
            background-color: red;
            padding: 10px;
            border: 1px solid;
            border-radius: 10px;
            
        }

        #mailSuccess{

            display: none;
            background-color: green;
            padding: 10px;
            border: 1px solid;
            border-radius: 10px;

        }
        
        .boxes{
            
            border-radius: 5px;
            font-size: 1.1em;
            
        }
        
        #submit{
            
            margin-top: 10px;
            cursor: pointer;
            font-size: 16px;
            border: none;
            text-decoration: none;
            padding: 5px 15px;
            
        }

        form{

            width: 650px;
            text-align: center;
            margin: auto;
            border-radius: 10px;
            background-color: grey;
            box-shadow: 5px 5px 5px 5px rgb(0,0,0);
            padding-bottom: 15px;

        }
        
        form p{
            
            padding: 12px;
            font-size: 18px;
            
        }

        .main-content h2{

            font-size: 2.2em;
            padding: 20px;
            color: white;
            text-align: center;
            

        }

        @media only screen and (max-width: 650px){
            
            form{
                
                width: 100%;
                border-radius: 0px;
                text-shadow: 0px;
                
            }
            
            .boxes{
                
                font-size: .9em;
                
            }
            
        }
        
    </style>

</head>

<body>

    <?php 
    
    echo " <script> $('#mailFail').show(); </script> ";
    
    include("templates/navigation.php"); ?>

    <main>

        <div class="main-content">


            <h2> Kontakt </h2>

            <p> </p>

            <form action="kontaktIndex.php" method="post">

                <h3 id="mailSuccess"> Din förfrågan har skickats. </h3>
                <h3 id="mailFail"> Något gick fel. </h3>

                <p> Ditt namn </p> <input class="boxes" type="text" name="name" autofocus required>
                <p> Din email </p> <input class="boxes" type="email" name="email" required>
                <p> Meddelande </p> <textarea class="boxes" name="text" id="" cols="30" rows="10"></textarea><br>
                <input type="submit" value="Skicka" id="submit">

            </form>

        </div>

    </main>

    <?php include("templates/footer.php"); ?>

</body>

</html>

<?php

if(isset($_POST["namn"]) && isset($_POST["email"]) && isset($_POST["text"])){
    
    $to = "valmaxolo@hotmail.com";
    $subject = "Mail från tipsforspel.nu";

    $name = $_POST["name"];
    $mail = $_POST["email"];
    $message = $_POST["text"];

    $headers = "Från: " . $name . " Svara till: " . $mail;
    
    if(mail($to,$subject,$message,$headers)){
        echo " <script> $('#mailSuccess').show(); </script> ";
    }
    else{
        echo " <script> $('#mailFail').show(); </script> ";
    }
    
}

?>










