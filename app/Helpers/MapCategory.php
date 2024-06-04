<?php

if (! function_exists('mapCategory')) {
    function mapCategory(int $number)
    {
        switch ($number) {
            case '1':
                return "Inwestycja";
            case '2':
                return "Szkoła Podstawowa";
            case '3':
                return "Przedszkole";
            case '4':
                return "Supermarket";
            case '5':
                return "Przychodnia zdrowia";
            case '6':
                return "Restauracja";
            case '7':
                return "Siłownia";
            case '8':
                return "Apteka";
            case '9':
                return "Centrum handlowe";
            case '10':
                return "Wjazd na autostradę";
            case '11':
                return "Stacja benzynowa";
            case '12':
                return "Salon kosmetyczny";
        }
    }
}