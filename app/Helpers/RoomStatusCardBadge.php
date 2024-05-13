<?php

if (! function_exists('roomStatusCardBadge')) {
    function roomStatusCardBadge(int $number)
    {
        switch ($number) {
            case '1':
                return '<p class="small text-primary text-uppercase ">Dostępne</p>';
            case '2':
                return '<p class="small text-warning text-uppercase ">Rezerwacja</p>';
            case '3':
                return '<p class="small text-danger text-uppercase ">Sprzedane</p>';
            case '4':
                return '<p class="small text-warning text-uppercase ">Wynajęte</p>';
        }
    }
}