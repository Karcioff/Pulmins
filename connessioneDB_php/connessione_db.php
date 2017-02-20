<?php

//generali
$sito_internet = "Pulmins";
 
$data =(date("d-m-y"));
 
$vers = "2.0";
 
//URL PER HTACCESS
 
$base_url = "http://localhost/Pulmins";
 
//connessione DB
 
$host = "localhost";
$db_user = "pulmins";
$db_psw = "";
$db_name = "my_pulmins";

$connect = mysqli_connect($host, $db_user, $db_psw, "$db_name");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}  


