<?php

require("../dbConnect.php");

session_start();

$user_check = $_SESSION['login_user'];

$query = "SELECT admin_username FROM admin WHERE admin_username = '$user_check'";
$ses_sql = mysqli_query($dbc,$query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['admin_username'];

?>