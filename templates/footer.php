<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<style>
    
    @import url('https://fonts.googleapis.com/css?family=Karla:700');
    
    footer {
    
        font-family: 'Karla';
        width: 100%;
        height: auto;
        background-color: lightblue;

    }
    
    footer p{
        
        text-align: center;
        padding: 50px;
        
    }
    
    .all-content{
        
        width: 100%;
        height: auto;
        margin: auto;
        display: flex;
        flex-direction: row;
        justify-content: center;
        flex-wrap: wrap;
        padding-top: 30px;
        
    }
    
    footer #info{
        
        width: 300px;
        display: flex;
        flex-direction: column;
        align-items: center;
        height: auto;
        text-align: center;
        padding-bottom: 50px;
        border-right: 1px solid;
        padding-right: 50px;
        
    }
    
    footer #info h3{
        
        margin-top: 50px;
        
    }
    
    footer #info h2 i {
        
        font-size: .8em;
        color: black;
        
    }

    footer nav{
        
        width: 375px;
        height: auto;
        
    }
    
    footer nav ul{
        
        display: flex;
        flex-direction: column;
        align-items: center;
        list-style: none;
        
    }
    
    footer nav ul li{
        
        padding: 10px;
        
    }
    
    footer nav ul li a{
        
        color: black;
        
    }
    
    footer nav ul li a:hover{
        
        text-decoration: none;
        
    }

    @media only screen and (max-width: 692px){
        
        footer #info{
            border-right: none;
            padding-right: 0;
            border-bottom: 1px solid;
            margin-bottom: 50px;
        }

    }

</style>

<footer>

    <div class="all-content">

        <div id="info">

           <h2><i>Tips för spel är för dig som precis börjat spela ett spel och villa ha snabba tips för att komma igång!</i></h2>
            
            <h3> Problem eller synpunkter med sidan? Kontakta admin <a href="kontaktIndex.php">här</a>. </h3>

        </div>

        <nav>

            <ul>
                <li><a href="hemIndex.php">Hem</a></li>
                <li><a href="speltipsIndex.php">Alla speltips</a></li>
                <li><a href="csgoIndex.php">CS:GO Speltips</a></li>
                <li><a href="wowIndex.php">WoW Speltips</a></li>
                <li><a href="lolIndex.php">LoL Speltips</a></li>
                <li><a href="publiceraIndex.php">Publicera speltips</a></li>
                <li><a href="kontaktIndex.php">Kontakt</a></li>
            </ul>

        </nav>

   
    </div>
    
    <p> <i> Copyright &copy; Tips För Spel </i> </p>
    
</footer>
