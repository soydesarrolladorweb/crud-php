<?php
    require_once("../model/conection.php");
    require_once("../model/validarSesion.php");

    $consultas = new validarSesion();
    $result = $consultas->cerrarSesion();
?>