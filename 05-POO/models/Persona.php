<?php
namespace models;

class Persona
{
    public static $personasEnElMundo = 0;

    public function __construct()
    {
        self::$personasEnElMundo++;
    }

    /**
     * Get the value of personasEnElMundo
     */ 
    public function getPersonasEnElMundo()
    {
        return self::$personasEnElMundo;
    }
}
