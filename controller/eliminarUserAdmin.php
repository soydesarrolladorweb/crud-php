<?php
    // traemos la conection y el archivo de consultas
    require_once('../model/conection.php');
    require_once('../model/consultasAdmin.php');

    // si viene algo por el metodo GET, guardamos en la variable $idElimnar lo que venga en ese metodo para aterrizarlo
    // Luego en el objecto de $consultas generamos una new instancia de consultas()
    // y guardamos en la variable $result las consultas y llamamos la función eliminarUser en el archivo de model/consultasAdmin.php
    if (isset($_GET['id_userEliminar'])) {
        $idEliminar=$_GET['id_userEliminar'];
        $consultas=new Consultas();
        $result=$consultas->eliminarUser($idEliminar);
    }else {
        echo '<script>alert("Error")</script>';
    }
?>