<?php
require_once("connexion.php");
class Juego {
    public static function verCartas() {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->query("SELECT * FROM cartas");
        $listaCartas = $stmt->fetchAll();
        return $listaCartas;
    }
}
?>