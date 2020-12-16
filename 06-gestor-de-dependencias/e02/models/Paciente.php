<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Paciente {
    private $nombre;

    private $apellido;

    private $edad;

    private $log;

    public function __construct($nombre, $apellido, $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;

        $this->log = new Logger('name');
        $this->log->pushHandler(new StreamHandler('app.log', Logger::DEBUG));
    }

    public function enfermar(){
        $this->log->debug("Estoy enfermando..." . $this->nombre);
    }
    public function curar(){
        $this->log->debug("Estoy curado!");
    }




}