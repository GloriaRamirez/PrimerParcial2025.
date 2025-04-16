<?php
class Persona {
    private $nombre;
    private $apellido;
    private $direccion;
    private $mail;
    private $telefono;

    public function __construct($nombre, $apellido, $direccion, $mail, $telefono) {
        $this-> nombre = $nombre;
        $this-> apellido = $apellido;
        $this-> direccion = $direccion;
        $this-> mail = $mail;
        $this-> telefono = $telefono;
    }

    public function getNombre () {
        return $this->nombre;
    }
    public function getApellido () {
        return $this->apellido;
    }
    public function getDireccion () {
        return $this->direccion;
    }
    public function getMail () {
        return $this->mail;
    }
    public function getTelefono () {
        return $this->telefono;
    }
    

    public function __toString()
    {
        return "Nombre: ".$this->getNombre().", Apellido: ".$this->getApellido().", Dirección: ".$this->getDireccion().", Mail: ".$this->getMail().", Teléfono: ".$this->getTelefono();
    }
}