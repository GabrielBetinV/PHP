<?php

// Clases

class Gato
{
    // propidades o atributos

    private $raza;
    private $nombre;
    private $edad;
    private $encargada;

    // Metodo constructor Constructor

    public function __construct()
    {
        $raza = 'Gato';
        $nombre = 'Misifus';
        $edad = '8 Años';
        $encargada = "Stefy";
    }


    // Funciones
    public function tomarLeche()
    {
        echo 'El Gato esta tomando Leche <br>';
    }


    public function pasear()
    {
        echo 'Ir al parque <br>';
    }




}



?>