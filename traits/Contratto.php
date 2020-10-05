<?php

trait Contratto {
    private $contratto;

    public function contract($_contratto) {
        if (empty($_contratto)) {
                die('Nessun tipo di contratto inserito');
            }
            return $this->contratto = $_contratto;
        }  
}