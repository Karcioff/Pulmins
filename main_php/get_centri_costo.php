<?php

session_start();
include("../utils_php/centroCosto.php");
include("../utils_php/commessa.php");
include("../utils_php/fermata.php");
include("../utils_php/percorso.php");
include("../connessioneDB_php/connessione_db.php");

////calcolare id società
$societaId = 1; //intval($_GET['id']);
//RIEMPIO ARRAY CENTRI COSTO
$queryCentriCosto = "SELECT * FROM centrocosto WHERE idSocieta= $societaId";
$result = $connect->query($queryCentriCosto) or die("caricamento centro di costo non riuscito " . mysqli_error($connect));

while ($row = mysqli_fetch_array($result)) {
    $centriCosto[] = new CentroCosto($row['nome'], $row['responsabile'], NULL, $row['id'], $row['idSocieta']);
}

//RIEMPIO ARRAY COMMESSE
foreach ($centriCosto as $centro) {
    $result = $connect->query("SELECT * FROM commessa WHERE idCentroCosto= $centro->id") or die("caricamento commesse non riuscito " . mysqli_error($connect));

    while ($row = mysqli_fetch_array($result)) {
        $commesse[] = new Commessa($row['committente'], $row['note'], NULL, $row['id'], $row['idCentroCosto']);
    }
    $centro->commesse = $commesse;
    $commesse = array();
//RIEMPIO ARRAY PERCORSI
    foreach ($centro->commesse as $commessa) {
        $result = $connect->query("SELECT * FROM percorso WHERE idCommessa= $commessa->id") or die("caricamento percorsi non riuscito " . mysqli_error($connect));

        while ($row = mysqli_fetch_array($result)) {
            $percorsi[] = new Percorso($row['nome'], $row['autista'], $row['mezzo'], NULL, $row['id'], $row['idCommessa']);
        }
        $commessa->percorsi = $percorsi;
        $percorsi = array();
        //RIEMPIO POSIZIONI
        foreach ($commessa->percorsi as $percorso) {
            $result = $connect->query("SELECT * FROM fermata WHERE idPercorso= $percorso->id") or die("caricamento fermate non riuscito " . mysqli_error($connect));

            while ($row = mysqli_fetch_array($result)) {
                $fermate[] = new Fermata($row['etichetta'], $row['lat'], $row['lng'], $row['indirizzo'], $row['utente'], $row['orario'], $row['note'], $row['id'], $row['idPercorso']);
            }
            $percorso->fermate = $fermate;
            $fermate = array();
        }
    }
}

echo json_encode($centriCosto);
mysqli_close($connect);

