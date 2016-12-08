<?php

/**
 * definisce un oggetto percorso
 */
class Percorso {

    public $nome;
    public $autista;
    public $mezzo;
    public $id;
    public $id_commessa;
    public $fermate;

//COSTRUTTORE
    /**
     * costruttore percorso
     * @param type string  $unNome nome del percorso
     * @param type string  $unAutista nome dell'autista
     * @param type string $unMezzo mezzo
     * @param type array $delleFermate fermate nel percorso
     * @param type int $unId id univoco percorso
     * @param type int $unIdCommessa id della commessa di appartenenza
     */
    public function __construct($unNome, $unAutista, $unMezzo, $delleFermate, $unId, $unIdCommessa) {
        $this->nome = $unNome;
        $this->autista = $unAutista;
        $this->mezzo = $unMezzo;
        $this->id = $unId;
        $this->id_commessa = $unIdCommessa;
        $this->fermate = $delleFermate; //questo sarà un array di fermate
    }

}
