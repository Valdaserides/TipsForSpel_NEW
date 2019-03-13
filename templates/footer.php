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
        text-align:center;

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
    
    footer a img{
        height:20px;
        width:20px;
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
                <li><a href="../">Hem</a></li>
                <li><a href="../speltips">Alla speltips</a></li>
                <li><a href="../csgo">CS:GO Speltips</a></li>
                <li><a href="../wow">WoW Speltips</a></li>
                <li><a href="../lol">LoL Speltips</a></li>
                <li><a href="../publicera">Publicera speltips</a></li>
                <li><a href="../kontakt">Kontakt</a></li>
            </ul>

        </nav>

   
    </div>
    
    <p> <i> Copyright &copy; Tips För Spel </i> </p>
    <div>Ikoner gjorda av <a href="https://www.freepik.com/" title="Freepik">Freepik</a> och hämtade <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> licensierad av <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    <a href="../admin/"> <img src="http://simpleicon.com/wp-content/uploads/user1.png"> </a> 
    
    
</footer>
