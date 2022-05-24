<?php

    require_once("../model/conection.php");
    require_once("../model/validarSesion.php");

    $email = $_POST['email'];
    $pass = md5($_POST['pass']);

    $consultas = new validarSesion();
    $result = $consultas->iniciarSesion($email, $pass);

?>