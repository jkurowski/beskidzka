<?php

if (! function_exists('roomStatusBadge')) {
    function roomStatusBadge(int $number)
    {
        switch ($number) {
            case '1':
                return '<section class="box-label bg-primary text-white align-self-stretch"><p class="m-0 fw-medium text-uppercase">Dostępne</p></section>';
            case '2':
                return '<section class="box-label bg-warning text-white align-self-stretch"><p class="m-0 fw-medium text-uppercase">Rezerwacja</p></section>';
            case '3':
                return '<section class="box-label bg-danger text-white align-self-stretch"><p class="m-0 fw-medium text-uppercase">Sprzedane</p></section>';
            case '4':
                return '<section class="box-label bg-warning text-white align-self-stretch"><p class="m-0 fw-medium text-uppercase">Wynajęte</p></section>';
        }
    }
}
