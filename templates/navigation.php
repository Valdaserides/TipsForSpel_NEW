<html lang="en">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/navigationCss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:700');
        @import url('https://fonts.googleapis.com/css?family=Dancing+Script');

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

        * {

            margin: 0;
            padding: 0;

        }

        header {

            display: flex;
            justify-content: flex-end;
            background-color: lightblue;

        }

        header nav {

            top: 0;
            padding: 30px;

        }

        header h3 {

            font-family: 'Dancing Script', cursive;
            font-size: 4em;
            position: absolute;
            left: 30px;
            top: 20px;
            color: lightgreen;
            text-shadow: -3px 0 black, 0 3px black, 3px 0 black, 0 -3px black;

        }

        header nav .nav-menu {

            width: 600px;
            align-items: center;

        }

        header nav .nav-menu li a,
        header nav #dropdown li a {

            font-size: 17px;
            color: #000;
            text-transform: uppercase;
            font-family: 'Karla', sans-serif;
            transition: .2s ease;

        }

        header nav .nav-menu li a:hover,
        header nav #dropdown li a:hover {

            opacity: .1;

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
            padding: 15px;

        }

        header nav #dropdown:hover #dropdown-content {
            display: block;
        }

        .header-text {

            padding: 35px;
            font-size: 3em;
            text-align: center;
            background-color: lightgreen;
            font-family: 'Karla', sans-serif;
            color: white;
            text-decoration: none;

        }

        /* Responsive Design */

        @media only screen and (max-width: 1350px) {

            header h3 {

                font-size: 2.5em;
                top: 35px;

            }

            header nav {}

        }

        @media only screen and (max-width: 900px) {

            header nav {

                width: 100%;
                padding: 0;

            }


            header h3 {

                z-index: 0;
                top: 0;
                left: 0;
                left: 60%;
                top: 7px;

            }

            #respo-btn {

                display: inline-block;
                margin-left: 5px;

            }

            header nav .nav-menu {

                display: none;
                height: auto;
                width: 100%;
                padding: 0;

            }

            .nav-menu li,
            #dropbtn {

                text-align: center;
                padding: 10px;

            }

            #dropdown-content {

                z-index: 0;
                position: relative;
                box-shadow: none;
                margin: 0;
                padding: 0;
                border: none;

            }

            #dropdown-content li {

                padding: 0;

            }

            #dropdown-content li a {
                padding: 0;
                padding: 5px;
                font-size: 10px;
            }

            #dropdown:hover #dropdown-content {
                display: none;
            }

            .header-text {

                font-size: 2.8em;
                padding: 20px;

            }

        }

        @media only screen and (max-width: 500px) {

            header h3 {

                left: 0;
                left: 50%;

            }

        }

        @media only screen and (max-width: 400px) {

            .header-text {

                font-size: 2em;
                padding: 10px;

            }

        }

    </style>

</head>

<body>

    <header>

        <h3>Tips för spel</h3>

        <nav>

            <div id="respo-btn" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <ul class="nav-menu">

                <li><a href="hemIndex.php">hem</a></li>
                <div id="dropdown">
                    <li><a id="dropbtn" href="speltipsIndex.php">Speltips</a><span id="dropbtnrespo">&#8711;</span></li>
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

    <script>
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

    </script>
