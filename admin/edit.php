<?php

require("../dbConnect.php");

if(!isset($_GET['id']) && !isset($_GET['titel']) && !isset($_GET['publ']) && !isset($_GET['spel']) && !isset($_GET['text'])){
    
    header("Location: adminView.php");

}

else{
    
    $id = $_GET['id'];
    $titel = $_GET['titel'];
    $publicerare = $_GET['publ'];
    $spel = $_GET['spel'];
    $text = $_GET['text'];
    $img = $_GET['img'];
    
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <a href="adminView.php"> Tillbaka </a>
   <h1>Redigera speltips</h1>
   
    <form action="" method="post">
      
       Id i databas: <?php echo $id; ?><br>
       
       <b>Ta bort bild? (y/n): </b><input type="text" name="imgRemove"><br>
       
       Titel: <input type="text" value="<?php echo $titel; ?>" name="titel"><br>
       
       Publicerare: <input type="text" value="<?php echo $publicerare ?>" name="publicerare"><br>
       
       Spel: <input name="spel" type="text" value="<?php echo $spel; ?>"> <br>
       
       Text: <input type="text" value="<?php echo $text; ?>" name="text"><br>
       
       <input type="submit" value="Uppdatera">
       
    </form>
    
</body>
</html>


<?php
    
    if(isset($_POST['imgRemove'])){

        $imgPost = $_POST['imgRemove'];

        if($imgPost == 'y'){

            $img = "";

        }
        
        else{
            
            $img = $_GET['img'];
            
        }
        
    }

    if(isset($_POST['titel'])){
        
        $titel = $_POST['titel'];
        
    }

    if(isset($_POST['publicerare'])){
        
        $publicerare = $_POST['publicerare'];
        
    }

    if(isset($_POST['spel'])){
        
        $spel = $_POST['spel'];
        
    }

    if(isset($_POST['text'])){
    
        $text = $_POST['text'];
    
    }

    $query = "UPDATE speltips_alla SET speltips_alla_img_name = '$img', speltips_alla_publicerare = '$publicerare', speltips_alla_spel = '$spel', speltips_alla_titel = '$titel', speltips_alla_text = '$text'  WHERE speltips_alla_id = $id";
    
    if(mysqli_query($dbc,$query)){
        
        echo "Speltipsen har uppdaterats!";
        
    }

    else{
        echo "Något gick fel...";
    }

?>




















