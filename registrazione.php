<?php

session_start(); // dive essere la prima cosa nella pagina, aprire la sessione
include("connessioneDB_php/connessione_db.php"); // includo il file di connessione al database
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
include("utils_php/functions.php");
$username= anti_injection($_POST["username_reg"]);
$password= sha1($_POST["password_reg"]);
$email= anti_injection($_POST["mail_reg"]);
$password_societa= sha1($_POST["password_societa"]);

$query_registrazione = $connect->query("INSERT INTO login (username,email,password) "
        . "VALUES ('" . $username . "','" . $email . "','"
        . $password . "')")
        or die("Query di registrazione non riuscita" . mysqli_error($connect)); // se la query fallisce mostrami questo errore
if (isset($query_registrazione)) {
    $_SESSION["logged"] = true;
    header("location:index.php");
}
    


 