<?php
session_start();
include("connessioneDB_php/connessione_db.php"); 
$_SESSION["username"]=$_POST["username"];
$_SESSION["password"]=$_POST["password"];
$query = $connect->query("SELECT * FROM login WHERE username='".$_SESSION["username"]."' AND password ='".sha1($_SESSION["password"])."'");
if ($query->num_rows > 0) {
	$_SESSION["logged"] =true;
	$data = $query->fetch_assoc();
	$_SESSION["utente"]=$data["IdUtente"];
    header("Location:main_php/main.php");
} else {
    header("Location: http://www.google.com");
}