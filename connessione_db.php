<?php

include("config.php"); //includo file configurazione per recupero variabili 
$connect = mysqli_connect("$host", "$db_user_roberto", "$db_psw_roberto", "$db_name");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}  
//culone

