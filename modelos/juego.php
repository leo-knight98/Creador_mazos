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
        $stmt = $connBD->prepare("SELECT * FROM mazos WHERE usuario_id = ?");
        $stmt->execute($usuario_id);
        $listaMazos = $stmt->fetchAll();
        return $listaMazos;
    }
}
?>