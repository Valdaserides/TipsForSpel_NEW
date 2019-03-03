<?php

require("../dbConnect.php");
session_start();

if(isset($_POST['submit'])){
    
    if(empty($_POST['username']) || empty($_POST['username'])){
        
        echo "Användarnamn eller lösenord är fel";
        
    }
    
    $username = $_POST['username'];
	$password = $_POST['password'];
	
	
	
	$query = "SELECT admin_username,admin_password FROM admin WHERE admin_username=? AND admin_password=? LIMIT 1";
	
	$stmt = $dbc->prepare($query);
	$stmt->bind_param("ss",$username,$password);
	$stmt->execute();
	$stmt->bind_result($username,$password);
	$stmt->store_result();
	
	if($stmt->fetch()){
	    
	    $_SESSION['login_user'] = $username;
	    header("Location: adminView.php");
	    
	}
	else{
	    
	    echo "Användarnamn eller lösenord är fel";
	    
	}
	mysqli_close($dbc);
}

?>