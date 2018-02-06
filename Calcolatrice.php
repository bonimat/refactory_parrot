<?php
/**
 * Created by PhpStorm.
 * User: matteo
 * Date: 04/02/18
 * Time: 15.22
 */


namespace matematica;

class Calcolatrice {

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function somma(int $a, int $b) {
        return $a + $b;
    }

    public function meno($a, $b) {
        return $a-$b;
    }

    public function prodotto($a, $b) {
        return $a * $b;
    }

    public function divisione($a, $b) {
        if (!$b) {
            throw new \Exception('Division by zero.');
        }
        return $a/$b;
    }

}