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
            height: 200px;
            background-color: rgba(0, 0, 0, .2);
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid;
            
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
            
            margin-top: 170px;
            margin-left: 970px;
            transform: translate(-50%,-50%);

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
            font-size: 20px;
            
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

<body>

    <?php include("templates/navigation.php"); ?>

    <main>

        <div class="main-content">

            <div class="text">

                <div class="middle">

                    <form action="index.html" class="search-box" method="post">

                        <input type="text" class="input" name="">
                        <button type="button" class="btn" name="button"></button>

                    </form>

                </div>

            </div>

            <div class="all-tips">

                <div class="tips">

                    <img src="imgs/csgologo.png" alt="">
                    <h2><a href="google.se">CSGO: Hur man får bättre FPS!</a></h2>
                    <p>Publicerare: Max</p>

                </div><div class="tips">

                    <img src="imgs/csgologo.png" alt="">
                    <h2><a href="google.se">CSGO: Hur man får bättre FPS!</a></h2>
                    <p>Publicerare: Max</p>

                </div><div class="tips">

                    <img src="imgs/csgologo.png" alt="">
                    <h2><a href="google.se">CSGO: Hur man får bättre FPS!</a></h2>
                    <p>Publicerare: Max</p>

                </div><div class="tips">

                    <img src="imgs/csgologo.png" alt="">
                    <h2><a href="google.se">CSGO: Hur man får bättre FPS!</a></h2>
                    <p>Publicerare: Max</p>

                </div><div class="tips">

                    <img src="imgs/csgologo.png" alt="">
                    <h2><a href="google.se">CSGO: Hur man får bättre FPS!</a></h2>
                    <p>Publicerare: Max</p>

                </div><div class="tips">

                    <img src="imgs/csgologo.png" alt="">
                    <h2><a href="google.se">CSGO: Hur man får bättre FPS!</a></h2>
                    <p>Publicerare: Max</p>

                </div>

            </div>

        </div>

    </main>

    <?php include('templates/footer.php'); ?>

</body>

</html>
