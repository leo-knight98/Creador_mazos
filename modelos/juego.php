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

    public static function ver_mazos($usuario) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("SELECT * FROM mazos_usuario WHERE usuario_id = :usuario_id");
        $stmt->bindParam(':usuario_id', $usuario);
        $stmt->execute();
        $mazos = $stmt->fetchAll();
        return $mazos;
    }

    public static function crear_mazo($usuario, $nombre) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("INSERT INTO mazos_usuario(usuario_id, nombre) VALUES (:usuario_id, :nombre)");
        $stmt->bindParam(':usuario_id', $usuario);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->execute();
    }

    public static function borrar_mazo($id) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("DELETE FROM mazos_usuario WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public static function agregar_carta($mazo, $carta, $cantidad) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("INSERT INTO mazos_cartas (id_mazo, id_carta, cantidad) VALUES (:id_mazo, :id_carta, :cantidad)
                                    ON DUPLICATE KEY UPDATE cantidad = :cantidad");
        $stmt->bindParam(':id_mazo', $mazo);
        $stmt->bindParam(':id_carta', $carta);
        $stmt->bindParam(':cantidad', $cantidad);
        $stmt->execute();
    }

    public static function ver_cartas_mazo($id_mazo) {
        $connBD = BD::crearInstancia();
        $stmt = $connBD->prepare("SELECT * FROM mazos_cartas WHERE id_mazo = :id_mazo");
        $stmt->bindParam(':id_mazo', $id_mazo);
        $stmt->execute();

        $cartas_mazo = $stmt->fetchAll();
    }

    public static function cambia_imagenes($texto) {
        $texto = str_ireplace("{B}", "<img src=\"vistas/img/black_mana.png\" />", $texto);
        return $texto;
    }
}
?>