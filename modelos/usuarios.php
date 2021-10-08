<?php
class Usuario {
    public static function login($nombre) {
        echo "eee";
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("SELECT id, nombre, pass FROM usuarios WHERE nombre = :nombre");
        $stmt->bindParam(':nombre', $nombre);
        var_dump($stmt);
        $stmt->execute();
        $usuario = $stmt->fetch();
        
        return $usuario;
    }
}
?>