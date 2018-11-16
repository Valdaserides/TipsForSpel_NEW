<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Speltips</title>
    <link rel="stylesheet" href="css/speltipsIndexCss.css">
    <link rel="stylesheet" href="css/cssMain.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
            flex-direction: row-reverse;
            flex-wrap: wrap;
            justify-content: space-around;
            
        }

        .tips {

            width: 300px;
            height: 300px;
            background-color: rgba(100, 100, 100, .8);
            border: 1px solid;
            margin-top: 15px;
            margin-bottom: 15px;

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
        
        .middle{
            
            transform: translate(-50%,-50%);
            margin-top: 100px;
            margin-left: 105%;

        }
        
        .input{
            
            width: 25px;
            height: 25px;
            background: none;
            border-radius: 50%;
            border: 2px solid #fff;
            box-sizing: border-box;
            outline: none;
            transition: width .4s ease-in-out,
                border-radius .8s ease-in-out,
                padding 0.2s;
            transition-delay: .1s;
            color: white;
            font-size: 16px;
            
        }
        
        .btn{
            
            position: absolute;
            width: 30px;
            height: 30px;
            top: 0;
            right: 0;
            box-sizing: border-box;
            background: none;
            border: none;
            outline: none;
            cursor: pointer;
            
        }
        
        .btn::before{
            
            content: "";
            width: 2px;
            height: 15px;
            background: white;
            position: absolute;
            transform: rotate(-45deg);
            bottom: -4px;
            right: -4px;
            
        }
        
        .inclicked{
            
            margin-top: 15px;
            height: 30px;
            width: 360px;
            border-radius: 0;
            padding: 0 15px;
            
        }
        
        .close::before, .close::after{
            
            content: "";
            width: 3px;
            height: 22px;
            background: white;
            position: absolute;
            top: 18.5px;
            bottom: 20px;
            right: 28px;
            
        }
        
        .close::before{
            
            transform: rotate(-45deg);
            
        }
        
        .close::after{
            
            transform: rotate(45deg);
            
        }
        
        @media only screen and (max-width: 900px) {
            
            .main-content{
                
                width: 100%;
                
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

                    <form action="speltipsIndex.php" class="search-box" method="get">

                        <input type="text" class="input" name="search">
                        <button type="button" class="btn" name="button"></button>

                    </form>

                </div>

            </div>

            <div class="all-tips">

                <?php
            
                $query = "";
                
                if(!isset($_GET['search'])){
                    $query = "SELECT * FROM speltips_alla";
                }
                else{
                    
                    $search = $_GET['search'];

                    $query = "SELECT * FROM speltips_alla WHERE speltips_alla_publicerare LIKE '%$search%' OR speltips_alla_titel LIKE '%$search%'";
                       
                }
                
                $result = mysqli_query($dbc,$query);
                
                if(!mysqli_fetch_array($result)){
                    echo "<p style='padding:50px; font-size:25px;color:white;'>Inga speltips hittades.</p>";
                }
                else{
                
                $n = 0;
                while($row = mysqli_fetch_array($result)){
                $n++;
            ?>

                <div class="tips">

                    <img src="imgs/<?php echo $row['speltips_alla_img_name'];?>">
                    <h2><a href="https://www.google.se" target="_blank" style="color:blue;">
                            <?php echo $row['speltips_alla_titel']; ?></a></h2>
                    <p>Publicerare:
                        <?php echo $row['speltips_alla_publicerare']; ?>
                    </p>
                    <p>Spel: <a href="<?php echo $row['speltips_alla_spel']; ?>Index.php">
                    <?php echo $row['speltips_alla_spel']; ?></a></p>
                </div>
                <?php
                }
                }
                ?>
            </div>

        </div>

    </main>

    <?php include('templates/footer.php'); ?>

    <?php

        require("dbConnect.php");

    ?>

</body>

</html>
