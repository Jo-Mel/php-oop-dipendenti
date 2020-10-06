<?php

require_once __DIR__ . '/Dipendente.php';
require_once __DIR__ . '/../traits/Contratto.php';

class DatiDipendente extends Dipendente {

    private $cod_fisc;
    private $indirizzo;
    private $ruolo;
    private $ral;

    use Contratto;

    public function __construct($_codice_dipendente, $_nome, $_cognome, $_cod_fisc, $_indirizzo, $_ruolo, $_ral){

        if (empty($_codice_dipendente)) {
            throw new Exception('non è stato inserito il codice dipendente');
        }

        if (empty($_nome)) {
            throw new Exception('non è stato inserito il nome');
        }

        if (empty($_cognome)) {
            throw new Exception('non è stato inserito il cognome');
        }

        if (strlen($_cod_fisc) <> 16) {
                throw new Exception('Il CF deve contenere 16 caratteri');
        }

        parent::__construct($_codice_dipendente, $_nome,$_cognome);

        $this->cod_fisc = $_cod_fisc;
        $this->indirizzo = $_indirizzo;
        $this->ruolo = $_ruolo;
        $this->ral = $_ral;
    }

    public function setIndirizzo($_indirizzo) { //da aggiungere controllo
        $this->indirizzo = $_indirizzo;
    }

    public function getIndirizzo() {
            return $this->indirizzo;
        } 

    public function setRuolo($_ruolo) {

            if (is_numeric($_ruolo)) {
                throw new Exception('Il ruolo deve contenere lettere');
            }

            return $this->ruolo = $_ruolo;
        } 

    public function getRuolo() {
            return $this->ruolo;
        } 

    public function setRal($_ral) {

        if (is_string($_ral)) {
            throw new Exception('ral non deve contenere lettere');
        }

        return $this->ral = $_ral;
    } 

    public function getRal() {
            return $this->ral;
        } 

    public function __toString() {

            return "<br> Codice dipendente: ".$this->codiceDipendente."<br> Nome: ".$this->nome."<br> Cognome: ".$this->cognome."<br> Codice Fiscale: ".$this->cod_fisc."<br> Indirizzo: ".$this->indirizzo."<br> Ruolo: ".$this->ruolo."<br> RAL: ".$this->ral. " euro"."<br>";

        }

}