<?php

/* ciao Chiara, ti do alcuni spunti tramite commenti
 * in ogni caso con un editor di testo base non vedi gli errori e non hai suggerimenti, dunque 
 * è più facile sbagliare. se vuoi continuare consiglio vivamente di installare netbeans
 */

/**
 * definisce un oggetto percorso
 */
class Percorso {

    public $autista; //NON DIMENTICARE IL PUBLIC,PRIVATE E COMPAGNIA BELLA, ALTRIMENTI DA ERRORE
    public $id;
    public $id_commessa;
    public $fermate;

//COSTRUTTORE
    //(un commento fatto in maniera civile si fa così:)
    /**
     * cotruttore oggetto percorso con id univoco
     * 
     * @param type $unAutista stringa autista
     * @param type $unId int identificativo univoco 
     * @param type $unIdCommessa int identificativo commessa
     * @param type $delleFermate lista di fermate
     */
    public function __construct($unAutista, $unId, $unIdCommessa, $delleFermate) {
        //serve $this per accedere alle variabili d'istanza
        //bisognerebbe fare un controllo se i tipi di dati inseriti sono corretti, altrimenti in futuro non troveremo mai gli errori.
        //http://www.html.it/pag/18345/istanziare-una-classe-il-costruttore/ qui c'è scritto come fare
        $this->autista = $unAutista;
        $this->id = $unId;
        $this->id_commessa = $unIdCommessa;
        $this->fermate = $delleFermate; //questo sarà un array di fermate
    }

    //mi faresti un costruttore senza l'input id, che quindi lo inizializza a 0? (serve quando si crea un oggetto da mettere nel database

    
    
    //questo in realtà non serve, non si fa così il costruttore
    public function def_Percorso($a, $identificazione, $id_com, $f) {//anche su tutti i metodi devi mettere public o private
        $autista = $a;
        $id = $identificazione;
        $id_commessa = $id_com;
        $fermata = $f;

        //di solito stampare in questi metodi è sconsigliato tranne in casi particolari, perchè i metodi devono sempre essere il più possibile disaccoppiati dagli output
        echo "La fermata inserita e': " . $fermata;
        echo "L'autista, il suo codice identificativo e quello della commessa sono: " . $autista . ", " . $id . ", " . $id_commessa;
    }

}

?>
