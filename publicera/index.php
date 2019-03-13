<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Publicera speltips</title>
    <link rel="stylesheet" href="../css/publiceraIndexCss.css">
    <link rel="stylesheet" href="../css/cssMain.css"> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
        
        @import url('https://fonts.googleapis.com/css?family=Karla:700');

        .main-content { 

            margin: auto;
            width: 1000px;
            height: auto;
            padding-bottom: 45px;

        }

        form {

            font-family: 'Karla';
            background-color: grey;
            width: 750px;
            height: auto;
            margin: auto;
            border-radius: 8px;

        }

        .main-content > h2 {

            font-family: 'Karla';
            font-size: 2.2em;
            padding: 25px;
            color: white;
            text-align: center;

        }
        
        #content{
            
            width: 400px;
            height: auto;
            margin: auto;
            padding: 20px;
            text-align: center;
            
        }
        
        .boxes{
            
            border-radius: 5px;
            font-size: 1em;
            float: right;
            margin-right: 20px;
            
        }
        
        .pBoxes{
            
            float: left;
            margin-left: 20px;
            
        }
        
        .submit{
            
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            padding: 7px 20px;
            border: none;
            transition: .2s ease-in-out;
            
        }
        
        .submit:hover{
            
            border-radius: 20px;
            
        }
        
        .spel-selector{
            
            list-style: none;
            display: flex;
            flex-direction: row;
            
        }
        
        .spel-selector-li{
            
            display: flex;
            flex-direction: column;
            margin: 25px;
            margin-left: 27%;
            
        }
        
        .spel-selector-li img{
            
            width: 50px;
            height: 50px;
            
        }
        
        .spel-selector-li input{
            
            margin-left: 18px;
            
        }
        
        .tips-holder{
            
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 25px;
            margin-bottom: 15px;
            
        }
        
        .bild-selector{
            
            display: inline-block;
            
        }
        
        #success{
            
            display: none;
            width: 100%;
            height: auto;
            background-color: green;
            padding-top: 25px;
            padding-bottom: 25px;
            
        }
        
        #fail{
            
            display: none;
            width: 100%;
            height: 60px;
            background-color: red;
            margin-bottom: 20px;
            
        }
        
        #success h3, #fail h3{
            
            text-align: center;
            font-size: 1.4em;
            
        }
        
        @media only screen and (max-width: 1000px){
            
            main{
                
                width: 100%;
                
            }
            
            .main-content{
                
                width: 100%;
                
            }
            
        }
        
        @media only screen and (max-width: 750px){

            form{
                
                width: 100%;
                border-radius: 0px;
                
            }
            
        }
        
        @media only screen and (max-width: 500px){

            
            #content{
                
                width: 100%;
                
            }
            
            .boxes{
                
                margin: 0;
                margin-right: 45px;
                
            }
            
            .tips-holder{
                margin: 0;
                margin-top: 15px;
                margin-right: 25px;
            }
            
            .tips-text{
                
                width: 75%;
                
            }
            
        }

    </style>

</head>

<body>

    <?php include("../templates/navigation.php"); ?>

    <main>

        <div class="main-content">

            <h2>Publicera ditt speltips här!</h2>

            <form method="POST" enctype="multipart/form-data">

                <div id="success">

                    <h3>Ditt tips kommer nu granskas av en av våra administratörer och ligga uppe inom kort! Tack!</h3>

                </div>

                <div id="fail">

                    <h3>Något gick fel... Vänlingen kontakta admin <a href="kontaktIndex.php">här</a>.</h3>

                </div>

                <div id="content">

                    <p class="pBoxes">Ditt namn*:</p><input type="text" name="publicerare" class="boxes" required><br>

                    <ul class="spel-selector">
                        <li class="spel-selector-li">WoW <input type="radio" name="kategori" value="1" required></li>
                        <li class="spel-selector-li">LoL <input type="radio" name="kategori" value="2" required></li>
                        <li class="spel-selector-li">CSGO <input type="radio" name="kategori" value="3" required></li>
                    </ul>

                    <p class="pBoxes"> Titel*: </p><input type="text" name="titel" class="boxes" required><br>

                    <div class="tips-holder">
                        <p class="pTips">Tips*:</p><textarea name="text" class="tips-text" cols="70" rows="20" required></textarea><br>
                    </div>

                    <input type="file" name="uploaded_file" id="file-upload">

                    <input type="submit" value="Publicera" class="submit" name="submit">

                </div>

            </form>

        </div>

    </main>

    <?php include("../templates/footer.php"); ?>

    <script>
        
        if ($(window).width() <= 701) {
            $('#file-upload').hide();
        } else if ($(window).window > 701) {
            $('#file-upload').show();
        }

    </script>

</body>

</html>

<?php

    require("../dbConnect.php");

    if(isset($_POST['publicerare']) && isset($_POST['kategori']) && isset($_POST['titel']) && isset($_POST['text']) && isset($_POST['submit'])){ // Checking so all the form inputs has been set.
        
        $publicerare = $_POST['publicerare']; // Taking all the data of the input-tags and putting it into a variabel.
        $kategori = $_POST['kategori'];
        $titel = $_POST['titel'];
        $tips = $_POST['text'];
        
        if(is_null($_POST['publicerare']) && is_null($_POST['kategori']) && is_null($_POST['titel']) && is_null($_POST['text'])){ // Checking if the data is all input-elements is null
            echo "<script> document.getElementById('fail').style.display = 'block'; </script>";
        }
        else{
            
            $kategoriVariabel = ""; // Setting the category-variabel to nothing.
            $img = "../img/ingenbild.png"; // Setting the default picture name

            if(isset($img)){ // If the user has uploaded a picture

                $img = basename($_FILES['uploaded_file']['name']); // Decalring some variables
                $img_temp_name = $_FILES['uploaded_file']['tmp_name'];

                if(!empty($img)){ // If the name of the $img is not null

                    $path = "../imgs/"; // Declaring a varibel

                    if(move_uploaded_file($img_temp_name,$path.$img)){ // Checking if the picture could be uploaded

                        $img = $_FILES['uploaded_file']['name']; // Then the picture name is saved to the variabel.

                    }

                    else{

                        $img = "ingenbild.png"; // If not, the picture becomes the default name

                    }

                }

            }

            else{

                $img = "ingenbild.png"; // The  $img becomes the default picture

            }

            if($kategori == 1){ // If the kategory radio-button is 1

                $kategoriVariabel = "speltips_wow"; // the category variabel is set to the speltips_wow table in the database.
                
                $spel = "WoW";

            }

            else if($kategori == 2){

                $kategoriVariabel = "speltips_lol";
                
                $spel = "LoL";

            }

            else if($kategori == 3){

                $kategoriVariabel = "speltips_csgo";
                
                $spel = "CSGO";

            }

            $query = "INSERT INTO speltips_alla (speltips_alla_img_name,speltips_alla_publicerare,speltips_alla_spel,speltips_alla_titel,speltips_alla_text,speltips_alla_confirmed) VALUES ('$img','$publicerare','$spel','$titel','$tips',0);";

            if(mysqli_query($dbc,$query)){
                
                mysqli_query($dbc,"SET NAMES UTF-8");
                echo "<script> document.getElementById('success').style.display = 'block'; </script>";

            }

            else{
                
                echo "<script> document.getElementById('fail').style.display = 'block'; </script>";

            }
            
        }
        
    }

?>
