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
    public $orario;
    public $note;
    public $id;
    public $idPercorso;
    
    /**
     * costruttore per fermata
     * @param string $unNome etichetta per riconoscere la fermata
     * @param float $unaLat latitudine
     * @param float $unaLng longitudine
     * @param string $unIndirizzo indirizzo approssimativo
     * @param string $unUtente utenti
     * @param time $unOrario orario
     * @param string $delleNote eventuali note
     * @param int $unId id univoco
     * @param int $unIdPercorso id del percorso di appartenenza
     */
    public function __construct($unNome,$unaLat,$unaLng,$unIndirizzo,$unUtente,$unOrario,$delleNote,$unId,$unIdPercorso) {
        $this->nome=$unNome;
        $this->lat=$unaLat;
        $this->lng=$unaLng;
        $this->indirizzo=$unIndirizzo;
        $this->utente=$unUtente;
        $this->orario=$unOrario;
        $this->note=$delleNote;
        $this->id=$unId;
        $this->idPercorso=$unIdPercorso;                
    }
    
}

