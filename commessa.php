<?php

/*
 * classe che rappresenta una commessa, ossia un particolare appalto o insieme di servizi
 */
class Commessa {
    public $committente;
    public $note;
    public $percorsi;
    public $id;
    public $idCentroCosto;
    
    /**
     * costruttore per oggetto commessa
     * @param type string $unCommittente committente
     * @param type string $delleNote eventuali note
     * @param type array $deiPercorsi array di percorsi
     * @param type int $unId id univoco della commessa
     * @param type int $unIdCentroCosto id del centro di costo di appartenenza
     */
    public function __construct($unCommittente,$delleNote,$deiPercorsi,$unId,$unIdCentroCosto) {
        $this->committente=$unCommittente;
        $this->note=$delleNote;
        $this->id=$unId;
        $this->percorsi=$deiPercorsi;
        $this->idCentroCosto=$unIdCentroCosto;
    }
}

