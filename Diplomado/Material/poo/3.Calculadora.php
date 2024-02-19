<?php

class Calculadora
{
    // Atributos

    private $numero1;
    private $numero2;


    // Metodo Constructor
    public function __construct($numero1, $numero2)
    {
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
        
    }


    // Metodos

    public function suma()
    {
        $suma = $this->numero1 + $this->numero2;
        echo "La suma es: "   .$suma . "<br>";
    }


}

?>