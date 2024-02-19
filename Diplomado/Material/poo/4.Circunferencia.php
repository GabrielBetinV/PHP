<?php

  class Circunferencia
  {

    public static $pi = 3.1415926535;


    public function valorStatic(){

        echo "Self: " .self::$pi;

    }


// No se puede utilizar el this
    public function valorStaticErrado(){

        echo "This; " .$this->pi;

    }



  }  


?>