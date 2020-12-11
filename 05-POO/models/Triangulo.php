<?php
require "Poligono.php";

class Triangulo extends Poligono
{
    public function calcularArea(){
        $area = $this->getAltura()*$this->getAnchura()/2;
        echo $area;
    }
}
