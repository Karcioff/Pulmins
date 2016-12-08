<?php

/*
 * definisce un oggetto centro di costo, che rappresenta il massimo raggruppamento dei giri dell'azienda
 * 
 */

class CentroCosto {

    public $nome;
    public $responsabile;
    public $id;
    public $idSocieta;
    public $commesse; //array di commesse appartenenti al centro di costo

    /**
     * costruttore per oggetto centro di costo
     * @param type $unNome nome del settore
     * @param type $unResponsabile nome responsabile 
     * @param type $delleCommesse array di commesse
     * @param type $unId id univoco del centro di costo
     * @param string $unIdSocieta id della società
     */

    public function __construct($unNome, $unResponsabile, $delleCommesse, $unId, $unIdSocieta) {
        $this->nome = $unNome;
        $this->responsabile = $unResponsabile;
        $this->id = $unId;
        $this->idSocieta = $unIdSocieta;
        $this->commesse = $delleCommesse;
    }

}
