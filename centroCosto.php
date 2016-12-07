<?php

/*
 * definisce un oggetto centro di costo, che rappresenta il massimo raggruppamento dei giri dell'azienda
 * 
 */
class CentroCosto {
    public $nome;
    public $responsabile;
    public $id;
    public $commesse; //array di commesse appartenenti al centro di costo

/**
 * costruttore per oggetto centro di costo
 * @param type $unNome nome del settore
 * @param type $unResponsabile nome responsabile 
 * @param type $unId id univoco del centro di costo
 * @param type $delleCommesse array di commesse
 */
public function __construct($unNome,$unResponsabile,$unId,$delleCommesse){
    $this->nome=$unNome;
    $this->responsabile=$unResponsabile;
    $this->id=$unId;
    $this->commesse=$delleCommesse;
}

}