<?php

/*
 * classe che rappresenta una fermata di un giro
 */
class Fermata{
    public $nome;
    public $lat;
    public $lng;
    public $indirizzo;
    public $utente;
    public $note;
    public $id;
    public $idPercorso;
    
    /**
     * costruttore per fermata
     * @param type string $unNome etichetta per riconoscere la fermata
     * @param type float $unaLat latitudine
     * @param type float $unaLng longitudine
     * @param type string $unIndirizzo indirizzo approssimativo
     * @param type string $unUtente utenti
     * @param type string $delleNote eventuali note
     * @param type int $unId id univoco
     * @param type int $unIdPercorso id del percorso di appartenenza
     */
    public function __construct($unNome,$unaLat,$unaLng,$unIndirizzo,$unUtente,$delleNote,$unId,$unIdPercorso) {
        $this->nome=$unNome;
        $this->lat=$unaLat;
        $this->lng=$unaLng;
        $this->indirizzo=$unIndirizzo;
        $this->utente=$unUtente;
        $this->note=$delleNote;
        $this->id=$unId;
        $this->idPercorso=$unIdPercorso;                
    }
    
}

