<?php


class Palabra
{
    private static $palabra;

    public function __construct($palabra)
    {
        self::$palabra = $palabra; 
        
    }


    public function mostrarPalabra()
    {
        echo self::$palabra;
    }



}


?>