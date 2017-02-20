<?php

/*
 * definisce un oggetto settore, che rappresenta il massimo raggruppamento dei giri dell'azienda
 * 
 */

class Settore {

    public $nome;
    public $responsabile;
    public $id;
    public $commesse; //array di commesse appartenenti al centro di costo

    /**
     * costruttore per oggetto centro di costo
     * @param type $unNome nome del settore
     * @param type $unResponsabile nome responsabile 
     * @param type $delleCommesse array di commesse
     * @param type $unId id univoco del settore
     */

    public function __construct($unNome, $unResponsabile, $delleCommesse, $unId, $unIdSocieta) {
        $this->nome = $unNome;
        $this->responsabile = $unResponsabile;
        $this->id = $unId;
        $this->commesse = $delleCommesse;
    }

}
