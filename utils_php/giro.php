<?php

/**
 * definisce un oggetto percorso
 */
class Giro {

    public $nomeGiro;
    public $autista;
    public $mezzo;
    public $idGiro;
    public $idAppalto;
    public $fermate;

//COSTRUTTORE
    /**
     * costruttore percorso
     * @param type string  $unNome nome del percorso
     * @param type string  $unAutista nome dell'autista
     * @param type string $unMezzo mezzo
     * @param type array $delleFermate fermate nel percorso
     * @param type int $unIdGiro id univoco percorso
     * @param type int $unIdAppalto id della commessa di appartenenza
     */
    public function __construct($unNome, $unAutista, $unMezzo, $delleFermate, $unId, $unIdAppalto) {
        $this->nomeGiro = $unNome;
        $this->autista = $unAutista;
        $this->mezzo = $unMezzo;
        $this->idGiro = $unId;
        $this->idAppalto = $unIdAppalto;
        $this->fermate = $delleFermate; //questo sarà un array di fermate
    }

}
