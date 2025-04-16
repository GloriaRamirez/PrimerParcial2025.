<?php
class Vuelo {
    private $numero;
    private $importe;
    private $fecha;
    private $destino;
    private $horaArribo;
    private $horaPartida;
    private $asientosTotales;
    private $asientosDisponibles;
    private $comandante;
    
    public function __construct($numero,$importe, $fecha, $destino, $horaArribo, $horaPartida, $asientosTotales, $asientosDisponibles, $comandante) {
        $this-> numero = $numero; 
        $this-> importe = $importe;
        $this-> fecha = $fecha;
        $this-> destino = $destino;
        $this-> horaArribo = $horaArribo;
        $this-> horaPartida = $horaPartida;
        $this-> asientosTotales = $asientosTotales;
        $this-> asientosDisponibles= $asientosDisponibles;
        $this-> comandante= $comandante;              
    }

    public function getNumero(){
        return $this->numero;        
    }
    public function getImporte(){
        return $this->importe;        
    }
    public function getFecha(){
        return $this->fecha;        
    }
    public function getDestino(){
        return $this->destino;        
    }
    public function getHoraArribo(){
        return $this->horaArribo;        
    }
    public function getHoraPartida(){
        return $this->horaPartida;        
    }
    public function getAsientosTotales(){
        return $this->asientosTotales;        
    }
    public function getAsientosDisponibles(){
        return $this->asientosDisponibles;        
    }
    public function getComandante(){
        return $this->comandante;        
    }

    public function asignarAsientosDisponibles($cant_pasajeros) {
        $respuesta = false;
        $cant_disp = $this->getAsientosDisponibles();
        if($cant_pasajeros <= $cant_disp) {
            $respuesta = true;
            $cant_disp = $cant_disp - $cant_pasajeros;
        }
        return $respuesta;
    }
}