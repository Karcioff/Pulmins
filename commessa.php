<?php

/*
 * classe che rappresenta una commessa, ossia un particolare appalto o insieme di servizi
 */
class Commessa {
    public $committente;
    public $note;
    public $id;
    public $percorsi;
    
    /**
     * costruttore per oggetto commessa
     * @param type $unCommittente committente
     * @param type $delleNote eventuali note
     * @param type $unId id univoco della commessa
     * @param type $deiPercorsi array di percorsi
     */
    public function __construct($unCommittente,$delleNote,$unId,$deiPercorsi) {
        $this->committente=$unCommittente;
        $this->note=$delleNote;
        $this->id=$unId;
        $this->percorsi=$deiPercorsi;
    }
}

