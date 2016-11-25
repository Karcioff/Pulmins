<?php include("config.php"); //includo file configurazione per recupero variabili 
$connect = mysqli_connect("$host","$db_user_roberto","$db_psw_roberto","$db_name"); 
if(!$connect) { die("Connection failed: " . mysql_error()); }  


