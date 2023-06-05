<?php

namespace tools\app;
class LibCss
{
    public function loadLib(string $nazwa, string $typ, string $wersja): bool
    {
        // Sprawdzanie, czy skrypt/arkusz istnieje
        if ($this->czyPlikIstnieje($nazwa)) {
            $wynik = "Ładowanie biblioteki CSS: $nazwa ($typ), wersja $wersja";
        } else {
            $wynik = "Błąd: Plik $nazwa nie istnieje!";
        }

        // Zwracanie wyniku
        return $wynik;
    }

    private function czyPlikIstnieje(string $nazwa)
    {
        // Sprawdzanie, czy pliki istnieją
        return strpos($nazwa, 'skrypt.js') !== false || strpos($nazwa, 'arkusz.css') !== false;
    }
}
?>