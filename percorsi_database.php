<?php

session_start();
include './percorso.php';
$q = intval($_GET['id']);
include './connessione_db.php';
$query = "SELECT * FROM percorso WHERE id_utente= $q";
$result = $connect->query($query) or die("caricamento percorsi non riuscito " . mysqli_error($connect));

//riempie l'oggetto percorsi secondo i miei calcoli
while ($row = mysqli_fetch_array($result)) {
    $percorsi[] = new Percorso($row['nome'], $row['autista'], $row['id'], $row['id_commessa'], 0);
}
//stringa html lista
foreach ($percorsi as $perc){
    $result_string=$result_string.$perc->echoAsList();
}
echo $result_string;

mysqli_close($connect);

