<?php
/**
 *
 * User: matteo
 * Date: 05/02/18
 * Time: 16.04
 */

use matematica\{
        Calcolatrice
};
use PHPUnit\Framework\TestCase;

include_once __DIR__ . '/../Calcolatrice.php';

class CalcolatriceTest extends TestCase {

    public function testSomma() {
     $this->assertTrue(true);
    }

    public function testMeno() {
        $calc = new Calcolatrice();
        $this->assertEquals(5, $calc->meno(8,3));
    }

    public function testProdotto() {
        $calc = new Calcolatrice();
        $this->assertEquals(15, $calc->prodotto(3,5));
    }

    public function testDivisione() {
        $calc = new Calcolatrice();
        $this->assertEquals(5, $calc->divisione(15, 3));
        $this->assertEx
        $this->expectException($calc->divisione(15, 0));

    }

}
