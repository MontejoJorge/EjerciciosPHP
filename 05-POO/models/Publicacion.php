<?php

namespace Ejercicio2\Models;

class Publicacion {
    private $autores,$año,$editorial,$titulo,$texto;

    public function __construct(){}

    /**
     * Get the value of texto
     */ 
    public function getTexto()
    {
        return $this->texto;
    }
    
    /**
     * Set the value of texto
     *
     * @return  self
     */ 
    public function setTexto($texto)
    {
        $this->texto = $texto;
    }

    public function escribir($texto2){
        $texto = $this->getTexto() . $texto2;
        $this->setTexto($texto);
    }
}