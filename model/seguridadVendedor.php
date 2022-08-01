<?php

session_start();
if(!isset($_SESSION['autenticado'])){
    echo "<script>alert('DEBES ESTAR LOGUEADO PARA ACCEDER A ESTA VISTA')</script>";
    echo '<script>location.href="../../index.php"</script>';
}

?>