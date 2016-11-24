<?php include("config.php"); //includo file configurazione per recupero variabili 
$connessione = mysqli_connect("$host","$db_user","$db_psw","$db_name"); 
if(!$connessione) { die("Connection failed: " . mysql_error()); }  


