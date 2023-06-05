<?php

use PHPUnit\Framework\TestCase;

class LibCssTest extends TestCase
{
    public function testLoadExistingScript()
    {
        $libCss = new LibCss();

        // Testowanie ładowania istniejącego skryptu
        $nazwa = 'skrypt.js';
        $typ = 'CSS';
        $wersja = '1.0';
        $expected = 'Ładowanie biblioteki CSS: skrypt.js (CSS), wersja 1.0';
        $this->assertEquals($expected, $libCss->loadLib($nazwa, $typ, $wersja));
    }

    public function testLoadNonExistingScript()
    {
        $libCss = new LibCss();

        // Testowanie ładowania nieistniejącego skryptu
        $nazwa = 'nieistnieje-skrypt.js';
        $typ = 'CSS';
        $wersja = '1.0';
        $expected = 'Błąd: Plik nieistnieje-skrypt.js nie istnieje!';
        $this->assertEquals($expected, $libCss->loadLib($nazwa, $typ, $wersja));
    }

    public function testLoadExistingStylesheet()
    {
        $libCss = new LibCss();

        // Testowanie ładowania istniejącego arkusza styli
        $nazwa = 'arkusz.css';
        $typ = 'CSS';
        $wersja = '1.0';
        $expected = 'Ładowanie biblioteki CSS: arkusz.css (CSS), wersja 1.0';
        $this->assertEquals($expected, $libCss->loadLib($nazwa, $typ, $wersja));
    }

    public function testLoadNonExistingStylesheet()
    {
        $libCss = new LibCss();

        // Testowanie ładowania nieistniejącego arkusza styli
        $nazwa = 'nieistnieje-arkusz.css';
        $typ = 'CSS';
        $wersja = '1.0';
        $expected = 'Błąd: Plik nieistnieje-arkusz.css nie istnieje!';
        $this->assertEquals($expected, $libCss->loadLib($nazwa, $typ, $wersja));
    }
}
?>