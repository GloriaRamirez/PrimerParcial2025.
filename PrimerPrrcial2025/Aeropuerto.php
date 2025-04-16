<?php
class Aeropuerto {
    private $denominacion;
    private $direccion;
    private $aerolineas;

    public function __construct($denominacion, $direccion, $aerolineas) {
        $this-> denominacion = $denominacion;
        $this-> direccion = $direccion;
        $this-> aerolineas= $aerolineas;        
    }

    public function getDenominacion() {
        return $this-> denominacion;
    }
    public function getDireccion() {
        return $this-> direccion;
    }
    public function getAerolineas() {
        return $this-> aerolineas;
    }

    public function setAerolineas($nuevaAerolinea) {
        $this->aerolineas = $nuevaAerolinea;

    }

    // public function retornarVuelosAerolinea($laAerolinea) {
    //     foreach($aerolineas as $aerolinea) {
    //         if ($aerolinea == $laAerolinea) {
    //             return $aerolinea ->
    //         }
    //     }
    // }

    public function __toString() {
        return "Denominación: ".$this->getDenominacion()."\n";
        "Dirección: ".$this->getDireccion()."\n";
        "Aerolineas: ".$this->getAerolineas();       
    }

}