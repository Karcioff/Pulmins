<?php
session_start(); // dive essere la prima cosa nella pagina, aprire la sessione
include("connessione_db.php"); // includo il file di connessione al database
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
header('location:index.php?action=registration&errore= '.$_POST["username_reg"]);
if($_POST["username_reg"] != "" && $_POST["password_reg"]!= ""){  // se i parametri iscritto non sono vuoti non sono vuote
$query_registrazione = $connect->query("INSERT INTO login (username,password) VALUES ('".$_POST["username_reg"]."','".sha1($_POST["password_reg"])."')") or die ("Query di registrazione non riuscita".mysql_error()); // se la query fallisce mostrami questo errore
}else{
header('location:index.php?action=registration&errore=Non hai compilato tutti i campi obbligatori, STRONZO.'); // se le prime condizioni non vanno bene entra in questo ramo else
}
if(isset($query_registrazione)){ 
$_SESSION["logged"]=true;
/*$to = $_POST["email_reg"];
$subject = "Ti sei iscritto!";
$txt = "http://comment-cdn.9gag.com/image?ref=9gag.com#http://img-comment-fun.9cache.com/media/471ea881145186234499406963_700wa_0.gif!";
$headers = "From: sbeury@sbeury.com";
mail($to,$subject,$txt,$headers);*/
header("location:index.php");
}else{
echo "non ti sei registrato con successo"; // altrimenti esce scritta a video questa stringa
}
?>