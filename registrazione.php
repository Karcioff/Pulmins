<?php

session_start(); // dive essere la prima cosa nella pagina, aprire la sessione
include("connessione_db.php"); // includo il file di connessione al database
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
include("verifica_registrazione.php");

$query_registrazione = $connect->query("INSERT INTO login (username,email,societa,password) "
        . "VALUES ('" . $username . "','" . $email . "','"
        . $societa . "','" . $password . "')")
        or die("Query di registrazione non riuscita" . mysqli_error($connect)); // se la query fallisce mostrami questo errore
if (isset($query_registrazione)) {
    $_SESSION["logged"] = true;
    header("location:index.php");
}
    


 