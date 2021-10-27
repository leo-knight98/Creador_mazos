<?php
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
                $carta['coste'] = str_replace("{B}", "<img src=\"vistas/img/black_mana.png\" />", $carta['coste']);
            }

        } else {
            $listaCartas = Juego::verCartas();
            foreach($listaCartas as $carta) {
                $carta['coste'] = str_replace("{B}", '<img src="vistas/img/black_mana.png" />', $carta['coste']);
            }
            
        }
        include_once("vistas/juego/cartas.php");    
    }

    public function buscador() {
        if($_SERVER['REQUEST_METHOD'] === "POST") {
            $parametro = $_POST['parametro'];
            $valor = "%".$_POST['valor']."%";
            $listaCartas = Juego::buscar_parametro($parametro, $valor);
        }
        include_once("vistas/juego/buscador.php");
    }
    
    public function lista_sets() {
        $listaSets = Juego::ver_sets();
        include_once("vistas/juego/sets.php");
    }


    public function cartas_set() {
        $id_set = $_GET['id'];
        $listaCartas = Juego::carta_set($id_set);
        include_once("vistas/juego/cartas_set.php");
    }
    
}

?>