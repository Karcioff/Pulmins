<?php
session_start();
include("connessione_db.php"); 
$_SESSION["username"]=$_POST["username"];
$_SESSION["password"]=$_POST["password"];
$query = $connect->query("SELECT * FROM login WHERE username='".$_SESSION["username"]."' AND password ='".sha1($_SESSION["password"])."'");
if ($query->num_rows > 0) {
	$_SESSION["logged"] =true;
	$data = $query->fetch_assoc();
	$_SESSION["utente"]=$data["IdUtente"];
    header("Location:main.php");
} else {
    header("Location: http://imgur.com/JfX8Rig.jpg");
}