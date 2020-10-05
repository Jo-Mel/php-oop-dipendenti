<?php
class Dipendente {
    protected $codiceDipendente;
    protected $nome;
    protected $cognome;

    public function __construct($_codice_dipendente, $_nome, $_cognome){

        if (empty($_codice_dipendente)) {
            die('non è stato inserito il codice dipendente');
        }

        if (empty($_nome)) {
            die('non è stato inserito il nome');
        }

        if (empty($_cognome)) {
            die('non è stato inserito il cognome');
        }

        $this->codiceDipendente = $_codice_dipendente;
        $this->nome = $_nome;
        $this->cognome = $_cognome;
    }


    public function setNome($_nome) {
        if (is_numeric($_nome)) {
            die('il nome non è valido');
        }
        return $this->nome = $_nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setCognome($_nome) {
        if (is_numeric($_nome)) {
            die('il cognome non è valido');
        }
        return $this->nome = $_nome;
    }

    public function getCognome() {
        return $this->nome;
    }
}