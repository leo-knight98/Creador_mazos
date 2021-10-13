<?php
require_once("modelos/juego.php");
class Controlador {
    public function __construct($accion) {
        $this->accion = $accion;
        $this->$accion();
    }

    public function cartas() {
        $listaCartas = Juego::verCartas();
        include_once("vistas/juego/cartas.php");
    }

    public function mazos() {
        include_once("vistas/juego/mazos.php");
    }
}

?>