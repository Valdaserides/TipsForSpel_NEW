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
                
                -webkit-box-shadow: 9px 11px 45px -4px rgba(0,0,0,0.87);
                -moz-box-shadow: 9px 11px 45px -4px rgba(0,0,0,0.87);
                box-shadow: 9px 11px 45px -4px rgba(0,0,0,0.87);
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
                margin-bottom: 20px;
                
            }
            
            #login form input[type=submit]{
                
                border:none;
                background-color:lightblue;
                padding:15px;
                padding-left:25px;
                padding-right:25px;
                cursor:pointer;
                margin-top: 25px;
                
            }
            
            #login form input[type=submit]:hover{
                
                opacity:.5;
                
            }
            
            #login form a{
                
                font-size: 1em;
                margin-top: 100px;
                
            }
            
            #loginFail{
                
                width: 100%;
                padding-bottom: 15px;
                padding-top: 15px;
                background-color: red;
                text-align:center;
                font-size: 1.2em;
                margin-bottom: 15px;
                display:none;
                
            }
            
        </style>
        
    </head>
    
    <body>
        
        <main>
            
            <div id="login">
                
                <form method="post" action="">
                    
                    <div id="loginFail"> Fel användarnamn eller lösenord. </div>
                    
                    Användarnamn:<input type="text" name="username">
                    Lösenord:<input type="password" name="password">
                    <input type="submit" name="submit" value="Logga in">
                    <a href="../"> Tillbaka </a>
                   
                </form>
                    
            </div>
            
        </main>
        
    </body>
    
</html>

<?php

?>
