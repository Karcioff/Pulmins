<?php

function getSettore($idSettore) {

    include("../utils_php/settore.php");
    include("../utils_php/appalto.php");
    include("../utils_php/fermata.php");
    include("../utils_php/giro.php");
    include("../connessioneDB_php/connessione_db.php");

//RIEMPIO ARRAY settori
    $querySettori = "SELECT * FROM settore WHERE idSettore = $idSettore";
    $result = $connect->query($querySettori) or die("caricamento settori non riuscito " . mysqli_error($connect));

    $row = mysqli_fetch_array($result);
    $settore = new Settore($row['nomeSettore'], $row['responsabile'], NULL, $row['idSettore']);

//RIEMPIO ARRAY appalti
    $result = $connect->query("SELECT * FROM appalto WHERE idSettore= $idSettore") or die("caricamento appalti non riuscito " . mysqli_error($connect));
    while ($row = mysqli_fetch_array($result)) {
        $appalti[] = new Appalto($row['nomeAppalto'], $row['note'], NULL, $row['idAppalto'], $row['idSettore']);
    }
    $settore->appalti = $appalti;
    //$commesse = array();
//RIEMPIO ARRAY PERCORSI
    foreach ($settore->appalti as $appalto) {
        $result = $connect->query("SELECT * FROM giro WHERE idAppalto= $appalto->idAppalto") or die("caricamento percorsi non riuscito " . mysqli_error($connect));

        while ($row = mysqli_fetch_array($result)) {
            $giri[] = new Giro($row['nomeGiro'], $row['autista'], $row['mezzo'], NULL, $row['idGiro'], $row['idAppalto']);
        }
        $appalto->giri = $giri;
        $giri = array();
        //RIEMPIO POSIZIONI
        foreach ($appalto->giri as $giro) {
            $result = $connect->query("SELECT * FROM fermata WHERE idGiro= $giro->idGiro") or die("caricamento fermate non riuscito " . mysqli_error($connect));

            while ($row = mysqli_fetch_array($result)) {
                $fermate[] = new Fermata($row['nomeFermata'], $row['lat'], $row['lng'], $row['indirizzo'], $row['utente'], $row['orario'], $row['note'], $row['idFermata'], $row['idGiro']);
            }
            $giro->fermate = $fermate;
            $fermate = array();
        }
    }
    mysqli_close($connect);
//echo json_encode($centriCosto);
    return $settore;
}
