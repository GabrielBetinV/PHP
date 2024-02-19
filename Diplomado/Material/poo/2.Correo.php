<?php

// Clases

class Correo
{
    // propidades o atributos

    private $de;
    private $asunto;
    private $mensaje;
    private $para;

    // Setter
    public function setDe($de)
    {
        $this->de = $de;
    }

     //Getter
     public function getDe()
     {
         return $this->de;
     }

    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;
    }

     //Getter
     public function getAsunto()
     {
         return $this->asunto;
     }

    public function setMensaje($mensaje)
    {
        $this->mensaje= $mensaje;
    }

     //Getter
     public function getMensaje()
     {
         return $this->mensaje;
     }

    public function setPara($para)
    {
        $this->para = $para;
    }

     //Getter
     public function getPara()
     {
         return $this->para;
     }

   
}
