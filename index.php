<!-- Crea e modella classi, a piacere, per gestire i dipendenti di un’azienda.
Aggiungere 1 trait  -->

<?php

require_once __DIR__ . '/classes/Dipendente.php';
require_once __DIR__ . '/classes/DatiDipendente.php';

$dipendente1 = new Dipendente("Esempio123", "J", "M");
var_dump($dipendente1);

$datiProfilo1 = new DatiDipendente('Es456', 'X', 'Y', 'MMQMNNO80M12Z12Y', 'via tot', 'impiegato', '30000');

$datiProfilo1->contract('Indeterminato');

var_dump($datiProfilo1);