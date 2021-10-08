<?php
session_start();
require_once("modelos/usuarios.php");

class Controlador {
    public function __construct($accion) {
        $this->accion = $accion;
        $this->$accion();
    }

    public function login() {
        if ($_POST) {
            $nombre = $_POST['nombre'];
            $pass = $_POST['pass'];
            $usuario = Usuario::login($nombre, $pass);

            if(isset($usuario)) {
                $_SESSION['nombre'] = $nombre;
                $_SESSION['id'] = $usuario['id'];
                header("Location: ./?controlador=juego&accion=cartas");
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
}
?>