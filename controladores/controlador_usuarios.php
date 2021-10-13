<?php
session_start();
require_once("modelos/usuarios.php");

class Controlador {
    public function __construct($accion) {
        $this->accion = $accion;
        $this->$accion();
    }

    public function login() {
        var_dump("fora 1r if ".$_POST);
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            print_r($_POST);
            var_dump("dins 1r IF".$_POST);
            $nombre = $_POST['nombre'];
            $pass = $_POST['pass'];
            $usuario = Usuario::login($nombre, $pass);
            //veureUser($usuario['nombre']);
            var_dump($usuario);

            if(($usuario['nombre'] == $nombre) && ($usuario['pass'] == $pass)) {
                $_SESSION['nombre'] = $_POST['nombre'];
                $_SESSION['id'] = $usuario['id'];
                echo "Correcto";
                header("Location: ./?controlador=usuario&accion=loggeado");
            } else {
                echo "Usuario o contraseña incorrectos";
            }
            
        }
        
        require_once("vistas/usuarios/login.php");
    }

    public function logout() {
        session_destroy();
        header("Location:./?controlador=juego&accion=cartas");
    }

    public function loggeado() {   
        require_once("vistas/usuarios/loggeado.php");
    }

    public function veureUser($hola){
        var_dump("usuari: ".$hola);

    }
}
?>