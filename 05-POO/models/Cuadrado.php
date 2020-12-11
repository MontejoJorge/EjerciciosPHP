<?php
require "Poligono.php";

class Cuadrado extends Poligono
{
    public function calcularArea(){
        $area = $this->getAltura()*$this->getAnchura();
        echo $area;
    }
}
