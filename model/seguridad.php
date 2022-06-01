<?php

    session_start();
    if (!isset($_SESSION['autenticado'])) {
        echo "<script>alert('DEBES ESTAR LOGUEADO PARA ACCEDER A ESTA VISTA')</script>";
        echo '<script>location.href="../index.php"</script>';
    }
    if ($_SESSION['cargo']!='Administrador') {
        echo "<script>alert('NO TIENES LOS PERMISOS PARA ACCEDER A ESTA VISTA')</script>";
        echo '<script>location.href="../index.php"</script>';
    }