<?php
require_once("connexion.php");
class Usuario {
    public static function login($nombre, $pass) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("SELECT id, nombre, pass FROM usuarios WHERE nombre = :nombre AND pass = :pass");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':pass', $pass);
        $stmt->execute();
        $usuario = $stmt->fetch();
        
        return $usuario;
    }
}
?>