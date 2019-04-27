<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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

        nav ul li {
            padding: 15px;
        }

        nav ul li a {

            color: black;
            text-decoration: none;
            opacity: .6;

        }
        
        nav ol{
            position: absolute;
            bottom: 0;
            display: flex;
            flex-direction: row;
            list-style: none;
            justify-content: space-around;
            width: 100%;
        }
        
        nav ol li{
            
        }
        
        nav ol li a{
            color: black;
            opacity: 1;
        }
        

    </style>
</head>

<nav>

    <ul>
        <li class="border-left"><a href="waiting.php"><span class="glyphicon glyphicon-repeat"></span> Väntande <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
        <li class="border-left"><a href="current.php"><span class="glyphicon glyphicon-stats"></span> Nuvarande <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
        <li class="border-left"><a href="accounts.php"><span class="glyphicon glyphicon-wrench pull-left"></span> Hantera konton <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
    </ul>
    
    <ol>
        <li><a href="logout.php">Logga ut </a></li>
        <li><a href="../hem/">Tillbaka </a></li>
    </ol>

</nav>















