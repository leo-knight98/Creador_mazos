<?php
require_once("connexion.php");
class Juego {
    public static function verCartas() {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->query("SELECT * FROM cartas");
        $listaCartas = $stmt->fetchAll();
        return $listaCartas;
    }

    public static function buscar_nombre($parametro, $valor) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("SELECT * FROM cartas WHERE $parametro LIKE :valor");
        $stmt->bindParam(':valor', $valor);
        $stmt->execute();
        $cartasBuscadas = $stmt->fetchAll();
        
        return $cartasBuscadas;
    }
}
?>