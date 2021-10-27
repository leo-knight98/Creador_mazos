<?php
require_once("connexion.php");
class Juego {
    public static function verCartas() {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->query("SELECT * FROM cartas");
        $listaCartas = $stmt->fetchAll();
        return $listaCartas;
    }

    public static function verCartasOrdenadas($orden) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->query("SELECT * FROM cartas ORDER BY $orden");
        $listaCartas = $stmt->fetchAll();
        return $listaCartas;
    }

    public static function buscar_parametro($parametro, $valor) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("SELECT * FROM cartas WHERE $parametro LIKE :valor");
        $stmt->bindParam(':valor', $valor);
        $stmt->execute();
        $cartasBuscadas = $stmt->fetchAll();
        
        return $cartasBuscadas;
    }

    public static function buscar_nombre($nombre) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("SELECT * FROM cartas WHERE nombre LIKE :nombre");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->execute();
        $cartas = $stmt->fetchAll();
        return $cartas;
    }

    public static function ver_sets() {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->query("SELECT * FROM mtg_sets ORDER BY fecha_lanzamiento");
        $listaSets = $stmt->fetchAll();
        return $listaSets;
    }

    public static function carta_set($id_set) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("SELECT * FROM cartas WHERE id = (SELECT id_carta FROM sets_cartas WHERE id_set = :id_set)");
        $stmt->bindParam(':id_set', $id_set);
        $stmt->execute();
        $lista_cartas = $stmt->fetchAll();
        var_dump($lista_cartas);
        return $lista_cartas;
    }

}
?>