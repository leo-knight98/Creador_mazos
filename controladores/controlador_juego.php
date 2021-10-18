<?php
session_start();
require_once("modelos/juego.php");
class Controlador {
    public function __construct($accion) {
        $this->accion = $accion;
        $this->$accion();
    }

    public function cartas() {
        if($_SERVER['REQUEST_METHOD'] === "POST") {
            $orden = $_POST['orden'];
            $listaCartas = Juego::verCartasOrdenadas($orden);
            foreach($listaCartas as $carta) {
                $carta['texto'] = Juego::cambia_imagenes($carta['texto']);
            }

        } else {
            $listaCartas = Juego::verCartas();
            foreach($listaCartas as $carta) {
                $carta['texto'] = Juego::cambia_imagenes($carta['texto']);
            }
            
        }
        include_once("vistas/juego/cartas.php");    
    }

    public function buscador() {
        if($_SERVER['REQUEST_METHOD'] === "POST") {

            
            $parametro = $_POST['parametro'];
            $valor = "%".$_POST['valor']."%";
            $cartas = Juego::buscar_parametro($parametro, $valor);
            //var_dump($cartas);
        }
        include_once("vistas/juego/buscador.php");
    }

    public function crear_mazo() {
        if($_SERVER['REQUEST_METHOD'] === "POST") {
            $nombre = $_POST['nombre'];
            $usuario = $_SESSION['id'];

            Juego::crear_mazo($usuario, $nombre);
            header("Location:./?controlador=juego&accion=mis_mazos");
        }
        include_once("vistas/juego/crear_mazo.php");
    }

    public function agregar_cartas() { 
        if($_SERVER['REQUEST_METHOD'] === "POST") {
            $nombre = "%".$_POST['carta']."%";
            $cartas = Juego::buscar_nombre($nombre);
        }
        $id_mazo = $_GET['id'];
        $cartas_mazo = Juego::ver_cartas_mazo($id_mazo);
        print_r($cartas_mazo);
        include_once("vistas/juego/agregar_cartas.php");
    }

    public function mis_mazos() {
        $usuario = $_SESSION['id'];
        $mazos = Juego::ver_mazos($usuario);
        include_once("vistas/juego/mis_mazos.php");
    }

    public function borrar_mazo() {
        $id = $_GET['id'];
        Juego::borrar_mazo($id);
        header("Location:./?controlador=juego&accion=mis_mazos");
    }

    public function agregar_carta() {
        if($_SERVER['REQUEST_METHOD'] === "POST") {
            $id_mazo = $_POST['mazo'];
            $carta = $_POST['carta'];
            $cantidad = $_POST['cantidad'];
    
            Juego::agregar_carta($id_mazo, $carta, $cantidad);
            header("Location./?controlador=juego&accion=agregar_cartas&id=$id_mazo");
        }
        
        
    }
    
}

?>