<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
    <link rel="stylesheet" type="text/css" href="../css/kontaktIndexCss.css">
    <link rel="stylesheet" href="../css/cssMain.css">

    <style>

        @import url('https://fonts.googleapis.com/css?family=Karla:700');

        *{

            margin: 0;
            padding: 0;

        }
        
        .main-content{
            
            height: auto;
            padding-bottom: 55px;
            font-family: 'Karla', sans-serif;
            
        }
        
        #mailFail{
            
            display: none;
            background-color: red;
            padding: 10px;
            border: 1px solid;
            
        }

        #mailSuccess{

            display: none;
            background-color: green;
            padding: 10px;
            border: 1px solid;
            

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
    
    include("../templates/navigation.php"); ?>

    <main>

        <div class="main-content">


            <h2> Kontakt </h2>

            <p> </p>

            <form action="kontaktIndex.php" method="post">

                <h3 id="mailSuccess"> Ditt mail har skickats. Förvänta svar inom kort. </h3>
                <h3 id="mailFail"> Något gick fel. </h3>

                <p> Ditt namn </p> <input class="boxes" type="text" name="namn" autofocus required>
                <p> Din email </p> <input class="boxes" type="email" name="email" required>
                <p> Meddelande </p> <textarea class="boxes" name="text" id="" cols="30" rows="10"></textarea><br>
                <input type="submit" value="Skicka" id="submit">

            </form>

        </div>

    </main>

    <?php include("../templates/footer.php"); ?>

</body>

</html>

<?php

if(isset($_POST["namn"]) && isset($_POST["email"]) && isset($_POST["text"])){
    
            echo "fel";
            $to = "submittips@tipsforspel.nu";
            $subject = "Mail från hemsidan!";
            $message = htmlspecialchars($_POST['text']);
            $name = htmlspecialchars($_POST['namn']);
            $email = htmlspecialchars($_POST['email']);
            $headers = "From: tipsforspel.nu";
            
            utf8_decode($namn,$email,$subject,$message);
            
            $message .= "\n\n\n" . "Namn: " . $name;
            $message .= "\n" . "Svara till (email): " . $email;
            
            utf8_decode($subject,$message);
            
            if(mail($to,$subject,$message,$headers)){
                echo '<script> document.getElementById("mailSuccess").style.display = "block"; </script> ';
            }
            else{
                
                echo '<script> document.getElementById("mailFail").style.display = "block"; </script> ';
            }
    
}

?>










