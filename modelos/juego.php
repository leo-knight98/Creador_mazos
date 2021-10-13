<?php
require_once("connexion.php");
class Juego {
    public static function verCartas() {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->query("SELECT * FROM cartas");
        $listaCartas = $stmt->fetchAll();
        return $listaCartas;
    }

    public static function verMazos($usuario_id) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("SELECT id, nombre FROM mazos_usuario WHERE usuario_id = :usuario_id");
        $stmt->bindParam(':usuario_id', $usuario_id);
        $stmt->execute();
        $listaMazos = $stmt->fetchAll();
        return $listaMazos;
    }
}
?>