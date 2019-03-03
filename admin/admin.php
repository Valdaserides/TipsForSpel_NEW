<?php

include("login.php");

if(isset($_SESSION['login_user'])){
    
    header("Location: adminView.php");
    
}

?>

<html>
    
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            
            *{
                padding:0;
                margin:0;
            }
            
            main{
                
                background-color:lightgreen;
                width: 100%;
                height:100vh;
                display:flex;
                justify-content:center;
                align-items:center;
                
                
            }

            #login form{
                
                height: 400px;
                width:350px;
                background-color: white;
                display:flex;
                flex-direction:column;
                align-items:center;
                
            }
            
            #login form input[type=text], input[type=password]{
                
                width: 75%;
                height:35px;
                
            }
            
            #login form input[type=submit]{
                
                border:none;
                background-color:lightblue;
                padding:15px;
                padding-left:25px;
                padding-right:25px;
                cursor:pointer;
                
            }
            
            #login form input[type=submit]:hover{
                
                opacity:.5;
                
            }
            
        </style>
        
    </head>
    
    <body>
        
        <main>
            
            <div id="login">
                
                <form method="post" action="">
                
                    Användarnamn:<input type="text" name="username">
                    Lösenord:<input type="password" name="password">
                    <input type="submit" name="submit">
                   
                </form>
                    
            </div>
            
        </main>
        
    </body>
    
</html>

<?php

?>
