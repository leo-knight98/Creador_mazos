<?php
session_start();
$controlador = "juego";
$accion = "cartas";

if(isset($_GET['controlador']) && isset($_GET['accion'])) {
    if(($_GET['controlador'] != '') && $_GET['accion']!='') {
        $controlador = $_GET['controlador'];
        $accion = $_GET['accion'];
    }
}

include_once("vistas/template.php");
include_once("router.php");
?>