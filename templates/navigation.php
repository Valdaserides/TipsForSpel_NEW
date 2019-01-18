<html lang="en">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/navigationCss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:700');
        @import url('https://fonts.googleapis.com/css?family=Dancing+Script');

        html{
            scroll-behavior: smooth;
        }
        
        * {

            margin: 0;
            padding: 0;

        }
        
        #xd {

            width: 100%;
            height: 120px;
            background-color: black;

        }

        .top-header {

            height: 60px;
            transition: .5s ease-in-out;
            box-shadow: 0 8px 10px -6px #000;

        }

        .top-header-h3 {

            font-size: 11px;
            letter-spacing: 2px;

        }

        .bar1,
        .bar2,
        .bar3 {

            width: 35px;
            height: 5px;
            background-color: #000;
            margin: 6px 0;
            transition: 0.4s;

        }

        .change .bar1 {
            -webkit-transform: rotate(-45deg) translate(-9px, 6px);
            transform: rotate(-45deg) translate(-9px, 6px);
        }

        .change .bar2 {
            opacity: 0;
        }

        .change .bar3 {
            -webkit-transform: rotate(45deg) translate(-8px, -8px);
            transform: rotate(45deg) translate(-8px, -8px);
        }

        header {

            position: fixed;
            background-color: lightblue;
            width: 100%;
            z-index: 10;
            height: 120px;

        }

        header nav {

            width: 1000px;
            height: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            
        }

        header nav h3 a {

            font-family: 'Dancing Script', cursive;
            font-size: 3em;
            color: lightgreen;
            text-shadow: -3px 0 black, 0 3px black, 3px 0 black, 0 -3px black;
            text-decoration: none;
            transition: .15s ease-in-out;

        }

        header nav h3 a:hover {

            color: lightcoral;

        }

        header nav .nav-menu {
            
            justify-content: space-between;
            width: 500px;
            align-items: center;
            
            margin-right: 0px;

        }
        
        header nav .nav-menu li{
            
            padding: 0;
            margin: 0;
            
        }

        header nav .nav-menu li a,
        header nav #dropdown li a {

            font-size: 17px;
            color: #000;
            text-transform: uppercase;
            font-family: 'Karla', sans-serif;
            transition: .1s ease-in-out;

        }

        header nav .nav-menu li a:hover,
        header nav #dropdown li a:hover {

            color: lightcoral;

        }


        /* Menu för mindre enheter */

        #respo-btn {

            display: none;
            cursor: pointer;
            padding: 15px;

        }

        #dropbtnrespo {

            cursor: pointer;

        }

        /* Dropdown menu */

        header nav #dropbtn {

            cursor: pointer;
            font-size: 24px;
            border: none;
            font-family: 'Karla', sans-serif;

        }


        #dropdown-content {

            position: absolute;
            min-width: 160px;
            background-color: lightblue;
            list-style: none;
            display: none;

        }

        #dropdown-content li a {

            display: block;
            text-decoration: none;
            font-size: 22px;
            padding: 10px;

        }

        header nav #dropdown:hover #dropdown-content {
            display: block;
        }

        /* Responsive Design */
        
        @media only screen and (max-width: 1000px) {
            
            header nav h3 a{
                
                margin-left: 10px;
                
            }
            
            header nav .nav-menu{
                
                margin-right: 15px;
                
            }
            
        }

        @media only screen and (max-width: 850px) {

            #xd {

                height: 60px;

            }
            
            header{
                
                height: auto;
                
            }

            header nav {

                display: block;
                padding: 0;
                margin: 0;

            }
            
            header nav h3 a{
                
                position: absolute;
                left: 50%;
                
            }

            #respo-btn {

                display: inline-block;
                margin-left: 5px;

            }

            header nav .nav-menu {

                display: none;
                height: auto;
                width: 100%;

            }

            header nav .nav-menu li {

                padding: 35px;

            }

            header nav .nav-menu li a,
            header nav #dropdown li a {
                
                font-size: 22px;
                
            }

            .nav-menu li,
            #dropbtn {

                text-align: center;
                padding: 10px;

            }

            #dropdown-content {
                
                position: relative;
                margin: 0;
                padding: 0;

            }

            #dropdown-content li {

                padding: 0;

            }

            #dropdown-content li a {
                padding: 0;
                padding: 5px;
                font-size: 18px;
            }

            #dropdown:hover #dropdown-content {
                display: none;
            }

            .header-text {

                font-size: 2.8em;
                padding: 20px;

            }

        }
        
        @media only screen and (max-width: 540px) {
            
            header nav h3 a{
                left: 0;
                left: 33%;
            }
            
        }
        
        @media only screen and (max-width: 380px) {
            
            header nav h3 a{
                
                top: 8px;
                font-size: 2.3em;
                
            }
            
        }
        
        .scroll-up{
            
            background-color: white;
            height: 45px;
            width: 45px;
            border-radius: 50%;
            border: 2px solid white;
            position: fixed;
            top: 0;
            left: 10%;
            top: 90%;
            z-index: 10000;
            cursor: pointer;
            display: none;
            
        }
        
        .scroll-up img{
            
            height: 80%;
            width: 100%;
            margin-top: 2px;
            
        }
        
        .scroll-up:hover{
            
            padding: 5px;
            
        }

    </style>

</head>

<body>
    <div class="scroll-up"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgMjg0LjkyOSAyODQuOTI5IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAyODQuOTI5IDI4NC45Mjk7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNMjgyLjA4MiwxOTUuMjg1TDE0OS4wMjgsNjIuMjRjLTEuOTAxLTEuOTAzLTQuMDg4LTIuODU2LTYuNTYyLTIuODU2cy00LjY2NSwwLjk1My02LjU2NywyLjg1NkwyLjg1NiwxOTUuMjg1ICAgQzAuOTUsMTk3LjE5MSwwLDE5OS4zNzgsMCwyMDEuODUzYzAsMi40NzQsMC45NTMsNC42NjQsMi44NTYsNi41NjZsMTQuMjcyLDE0LjI3MWMxLjkwMywxLjkwMyw0LjA5MywyLjg1NCw2LjU2NywyLjg1NCAgIGMyLjQ3NCwwLDQuNjY0LTAuOTUxLDYuNTY3LTIuODU0bDExMi4yMDQtMTEyLjIwMmwxMTIuMjA4LDExMi4yMDljMS45MDIsMS45MDMsNC4wOTMsMi44NDgsNi41NjMsMi44NDggICBjMi40NzgsMCw0LjY2OC0wLjk1MSw2LjU3LTIuODQ4bDE0LjI3NC0xNC4yNzdjMS45MDItMS45MDIsMi44NDctNC4wOTMsMi44NDctNi41NjYgICBDMjg0LjkyOSwxOTkuMzc4LDI4My45ODQsMTk3LjE4OCwyODIuMDgyLDE5NS4yODV6IiBmaWxsPSIjMDAwMDAwIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></div>
    <header>

        <nav>
            
            <h3><a href="hemIndex.php">Tips för spel</a></h3>

            <div id="respo-btn" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <ul class="nav-menu">

                <li><a href="hemIndex.php">hem</a></li>
                <div id="dropdown">
                    <li><a id="dropbtn" href="speltipsIndex.php">Speltips</a></li>
                    <ul id="dropdown-content">

                        <li><a href="csgoIndex.php">CS:GO Speltips</a></li>
                        <li><a href="wowIndex.php">WoW Speltips</a></li>
                        <li><a href="lolIndex.php">LoL Speltips</a></li>

                    </ul>
                </div>

                <li><a href="publiceraIndex.php">Publicera speltips</a></li>
                <li><a href="kontaktIndex.php" class="kontakt">Kontakt</a></li>

            </ul>

        </nav>

    </header>

    <div id="xd"></div>

    <script>
        
        $(document).ready(function(){
            
            $(".scroll-up").click(function(){
                $("html, body").animate({ scrollTop: 1 }, 100);
            });
            
            $(document).on("scroll",function(){
                
                var x = $(this).scrollTop();
                if(x > 300){
                   $(".scroll-up").fadeIn();
                }
                else{
                    $(".scroll-up").fadeOut();
                }
                
            });
            
        });
        
        function myFunction(x) {

            x.classList.toggle("change");

        }

        if ($(window).width() < 901) {
            $(document).ready(function() {

                $("#resp").click(function() {

                    $('.nav-menu').fadeToggle();

                });

                $('#dropbtnrespo').click(function() {

                    $('#dropdown-content').fadeToggle();

                });

            });

        }

        $("#respo-btn").click(function() {

            $(".nav-menu").fadeToggle();

        });

        if ($(window).width() > 899) {

            $(window).on("scroll", function() {

                if ($(window).scrollTop()) {

                    $("header").addClass("top-header");
                    $("header h3").addClass("top-header-h3");
                    $("#xd").css("height","60px");
                      
                } else {

                    $("header").removeClass("top-header");
                    $("header h3").removeClass("top-header-h3");
                    $("#xd").css("height","");

                }

            });

        }

    </script>
