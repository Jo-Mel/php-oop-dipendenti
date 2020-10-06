<!-- Crea e modella classi, a piacere, per gestire i dipendenti di un’azienda.
Aggiungere 1 trait  -->

<?php

require_once __DIR__ . '/classes/Dipendente.php';
require_once __DIR__ . '/classes/DatiDipendente.php';

try{
$dipendente1 = new Dipendente("Esempio123", "J", "M");
echo $dipendente1;
} catch (Exeption $e) {
    echo 'Eccezione: ' . $e->getMessage();
}

try {
$datiProfilo1 = new DatiDipendente('Es456', 'X', 'Y', 'MMQMNNO80M12Z12Y', 'via tot', 'impiegato', '30000');
$datiProfilo1->contract('Indeterminato');

echo $datiProfilo1;
} catch (Exeption $e) {
    echo 'Eccezione: ' . $e->getMessage();
}