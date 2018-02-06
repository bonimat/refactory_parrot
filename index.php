<?php
/**
 * @param int $a
 * @param int $b
 */
use matematica\Calcolatrice;
include_once __DIR__ . '/Calcolatrice.php';

function somma(int $a, int $b){

    return $a + $b;
}

echo "prova <br/>";
$a = 3;
$b = 5;
echo 'Somma : $a + $b = somma($a , $b)';
echo "Somman : $a + $b = " . somma($a, $b);
$mat = new Calcolatrice();
echo "Somman : $a + $b = " . $mat->somma($a, $b);


