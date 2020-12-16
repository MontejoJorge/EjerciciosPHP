<?php

abstract class User {
    protected $username, $nombre, $apellidos, $email, $password, $ultimoAcceso, $log;

    private function __construct($username, $nombre, $apellidos, $email, $password, $ultimoAcceso, $log)
    {
        $this->username = $username;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->password = $password;
        $this->ultimoAcceso = $ultimoAcceso;
        $this->log = $log;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of apellidos
     */ 
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of ultimoAcceso
     */ 
    public function getUltimoAcceso()
    {
        return $this->ultimoAcceso;
    }

    /**
     * Get the value of log
     */ 
    public function getLog()
    {
        return $this->log;
    }
}