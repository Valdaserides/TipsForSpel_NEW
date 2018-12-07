<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<style>
    
    footer {

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
        
    }
    
    footer #info{
        
        width: 375px;
        display: flex;
        flex-direction: column;
        align-items: center;
        height: auto;
        
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
        
        padding: 15px;
        
    }

    @media only screen and(max-width: 750px) {

       

    }

</style>

<script>

    

</script>

<footer>

    <div class="all-content">

        <div id="info">

           <h2><i>About</i></h2>
            <h4> Tips för spel är för dig som  </h4>

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
    
    <p> <i> Copyright &copy; Max Valdaserides Olofsson </i> </p>
    
</footer>
