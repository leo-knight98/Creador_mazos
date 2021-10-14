<?php
session_start();
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

    public function buscador() {
        if($_SERVER['REQUEST_METHOD'] === "POST") {

            
            $parametro = $_POST['parametro'];
            $valor = "%".$_POST['valor']."%";
            $cartas = Juego::buscar_nombre($parametro, $valor);
            //var_dump($cartas);
        }

        include_once("vistas/juego/buscador.php");
        
    }

    
}

?>