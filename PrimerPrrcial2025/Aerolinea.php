<?php
class Aerolinea {
    private $identificacion;
    private $nombre;
    private $vuelosProgramados; 

    public function __construct($identificacion, $nombre, $vuelosProgramados) {
        $this-> identificacion = $identificacion;
        $this-> nombre = $nombre;
        $this-> vuelosProgramados= $vuelosProgramados;        
    }
    
}