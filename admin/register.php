<?php

include('session.php');
require('../dbConnect.php');

if(!isset($_SESSION['login_user'])){
    header("Location: /admin");
}

?>

<html>
    
    <head>
        
        
        
    </head>
    <body>
        <a href="/admin"> Tillbaka </a>
        <form method="POST">
            
            Användarnamn:<input type="text" name="username"><br>
            Lösenord: <input type="password" name="password"><br>
            <input type="submit" value="Registrera">
            
        </form>
        
    </body>
    
</html>

<?php

if(isset($_POST['username']) && isset($_POST['password'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "INSERT INTO admin (admin_username, admin_password) VALUES ('$username','$password')";
    $checkUser = "SELECT admin_username FROM admin WHERE admin_username = '$username'";
    
    

        if(mysqli_num_rows($dbc,$checkUser) > 0){
            
            echo "Användarnamnet finns redan";
            return;
            
        }
        
        else{
            
           if(mysqli_query($dbc,$query)){
               echo "Användare skapad! <br>";
               echo "<a href='logout.php'>Testa logga in</a>";
          }
            
          else{
              echo "Något gick fel...";
              
          }
            
    }
    
    
    
}

?>


























