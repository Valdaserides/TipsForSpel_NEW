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
        
        width: 750px;
        height: 500px;
        margin: auto;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        
    }
    
    footer #info{
        
        width: 200px;
         
        
    }
    
    footer #info h2 i {
        
        font-size: .8em;
        color: black;
        
    }

    footer nav {

        width: 200px;

    }
    
    footer nav .nav-menu{
        
        display: block;
        width: 200px;
        
    }
    
    footer nav .nav-menu li{
        
        padding: 15px;
        
        
        
    }

    @media only screen and(max-width: 1000px) {

        footer nav .nav-menu {

            width: 100%;

        }

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

            <ul class="nav-menu">

                <li><a href="hemIndex.php">Hem</a></li>
                    <li><a href="speltipsIndex.php">Alla speltips</a>        

                        <li><a href="csgoIndex.php">CS:GO Speltips</a></li>
                        <li><a href="wowIndex.php">WoW Speltips</a></li>
                        <li><a href="lolIndex.php">LoL Speltips</a></li>                        

                <li><a href="publiceraIndex.php">Publicera speltips</a></li>
                <li><a href="kontaktIndex.php">Kontakt</a></li>

            </ul>

        </nav>

   
    </div>
    <p> <i> &copy;Copyright Max Valdaserides Olofsson </i> </p>
</footer>
