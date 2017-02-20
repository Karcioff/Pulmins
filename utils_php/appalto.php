<?php

/*
 * classe che rappresenta una commessa, ossia un particolare appalto o insieme di servizi
 */
class Appalto {
    public $committente;
    public $note;
    public $percorsi;
    public $id;
    public $idSettore;
    
    /**
     * costruttore per oggetto commessa
     * @param type string $unCommittente committente
     * @param type string $delleNote eventuali note
     * @param type array $deiPercorsi array di percorsi
     * @param type int $unId id univoco della commessa
     * @param type int $unIdSettore id del settore di appartenenza
     */
    public function __construct($unCommittente,$delleNote,$deiPercorsi,$unId,$unIdSettore) {
        $this->committente=$unCommittente;
        $this->note=$delleNote;
        $this->id=$unId;
        $this->percorsi=$deiPercorsi;
        $this->idSettore=$unIdSettore;
    }
}

