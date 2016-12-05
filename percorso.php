<?php

/* ciao Chiara, ti do alcuni spunti tramite commenti
 * in ogni caso con un editor di testo base non vedi gli errori e non hai suggerimenti, dunque 
 * è più facile sbagliare. se vuoi continuare consiglio vivamente di installare netbeans
 */

/**
 * definisce un oggetto percorso
 */
class Percorso {

    public  $nome;
    public $autista; 
    public $id;
    public $id_commessa;
    public $fermate;

//COSTRUTTORE
     /**
     * cotruttore oggetto percorso con id univoco
     * 
     * @param type $unNome stringa nome
     * @param type $unAutista stringa autista
     * @param type $unId int identificativo univoco 
     * @param type $unIdCommessa int identificativo commessa
     * @param type $delleFermate lista di fermate
     */
    public function __construct($unNome,$unAutista, $unId, $unIdCommessa, $delleFermate) {
        //serve $this per accedere alle variabili d'istanza
        //bisognerebbe fare un controllo se i tipi di dati inseriti sono corretti, altrimenti in futuro non troveremo mai gli errori.
        //http://www.html.it/pag/18345/istanziare-una-classe-il-costruttore/ qui c'è scritto come fare
        $this->nome =$unNome;
        $this->autista = $unAutista;
        $this->id = $unId;
        $this->id_commessa = $unIdCommessa;
        $this->fermate = $delleFermate; //questo sarà un array di fermate
    }
    
    public function echoAsList(){
        $result= "<option value=$this->id>$this->nome</option> \n";
        return $result;
    }

}
