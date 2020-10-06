<?php
class Dipendente {
    protected $codiceDipendente;
    protected $nome;
    protected $cognome;

    public function __construct($_codice_dipendente, $_nome, $_cognome){

        if (empty($_codice_dipendente)) {
           throw new Exception('non è stato inserito il codice dipendente');
        }

        if (empty($_nome)) {
           throw new Exception('non è stato inserito il nome');
        }

        if (empty($_cognome)) {
            throw new Exception('non è stato inserito il cognome');
        }

        $this->codiceDipendente = $_codice_dipendente;
        $this->nome = $_nome;
        $this->cognome = $_cognome;
    }


    public function setNome($_nome) {
        if (is_numeric($_nome)) {
            throw new Exception('il nome non è valido');
        }
        return $this->nome = $_nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setCognome($_cognome) {
        if (is_numeric($_cognome)) {
            throw new Exception('il cognome non è valido');
        }
        return $this->cognome = $_cognome;
    }

    public function getCognome() {
        return $this->cognome;
    }

    public function __toString() {
        return "<br> Codice dipendente: ".$this->codiceDipendente."<br> Nome: ".$this->nome."<br> Cognome: ".$this->cognome;
    }

}