<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="UTF-8">
    
    <title>Hem</title>
    
    <link rel="stylesheet" href="css/hemIndexCss.css">
    <link rel="stylesheet" href="css/cssMain.css">
    
    <style>
        
        .main-content h1{
            
            font-size: 4em;
            color: white;
            text-align: center;
            background-color: rgba(50,50,50,1);
            padding: 35px;
            
        }
        
        #hem-text{
            
            height: auto;
            margin-top: 25px;
            padding: 15px;
            
        }
        
        #hem-text p{
            
            text-align: center;
            color: antiquewhite;
            font-family: 'Karla';
            font-size: 1.4em;
            
        }
        
        #latest-tips{
            
            width: 100%;
            height: auto;
            border: 1px solid;
            margin-top: 50px;
            padding-top: 15px;
            padding-bottom: 15px;
            
        }
        
        #latest-tips h2{
            
            color: white;
            font-family: 'Karla';
            text-align: center;
            font-size: 1.1em;
            padding: 5px;
            
        }
        
        #latest-tips-container{
            
            width: 100%;
            height: 150px;
            
            
        }
        
    </style>

</head>

<body>

    <?php include("templates/navigation.php"); ?>

    <main>
    
        <div class="main-content">
            
            <h1>Välkommen till Tips för spel!</h1>
            
            <div id="hem-text">
                <p> Här kan du lära dig att bli bättre på ditt favoritspel eller själv lägga ut tips som gör andra spelare bättre. </p>
            </div>
            
            <div id="latest-tips">
                
                <h2>Senaste tipsen från våra besökare:</h2>
                
                <div id="latest-tips-container">
                    
                    
                        
                        <?php
                        
                        require("dbConnect.php");
                        
                        $query = "SELCET * FROM speltips_alla LIMIT 3";
                        
                        $result = mysqli_query($dbc,$query);
                        
                        $arr = array();
                        $n = -1;
                        
                        if(mysqli_num_rows($result) <= 0){
                            echo "<p style='padding:50px; font-size:25px;color:white;text-align:center;'>Inga speltips hittades.</p>";
                        }
                        
                        else{
                            
                            while($row = mysqli_fetch_array($result)){
                                
                                $n++;
                                $arr[$n] = $row['speltips_alla_id'];
            
                        ?>
                        
                    </div>
                    <?php
                        }
                        }
                    ?>
                </div>
                
            </div>

    </main>

    <?php include("templates/footer.php"); ?>

</body>

</html>
