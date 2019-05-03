<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        nav {

            height: 100vh;
            width: 250px;
            position: fixed;
            background-color: lightblue;
            margin-top: -20px;
            border-right: 1px solid;

        }

        nav ul {

            display: flex;
            flex-direction: column;
            list-style: none;

        }

        nav ul > li {
            padding: 15px;
        }

        nav ul > li a {

            color: black;
            text-decoration: none;
            opacity: .6;

        }
        
        nav ol{
            position: absolute;
            bottom: 0;
            bottom:5%;
            display: flex;
            flex-direction: row;
            list-style: none;
            justify-content: space-around;
            width: 100%;
        }
        
        nav ol li a{
            color: black;
            opacity: 1;
        }
        
        #test{
            
            display:flex;
            flex-direction:row;
            justify-content:space-around;
            margin-top:15px;
            margin-bottom: 15px;
            
        }
        

    </style>
</head>

<nav>

    <ul>
        <div id="test">
            
            <li><a href="logout.php">Logga ut </a></li>
            <li><a href="../">Tillbaka </a></li>
            
        </div>
        <hr style="border-color:grey;">
        <li class="border-left"><a href="waiting.php"><span class="glyphicon glyphicon-repeat"></span> Väntande <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
        <li class="border-left"><a href="current.php"><span class="glyphicon glyphicon-stats"></span> Nuvarande <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
        <li class="border-left"><a href="accounts.php"><span class="glyphicon glyphicon-wrench pull-left"></span> Hantera konton <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
    </ul>
    
    <ol>
        
    </ol>

</nav>















