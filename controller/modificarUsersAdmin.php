<?php
    require_once('../model/conection.php');
    require_once('../model/consultasAdmin.php');

    $consultas = new Conection();

    $iduser=$_POST['iduser'];
    $name=$_POST['name'];
    $last_name=$_POST['last_name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $cargo=$_POST['cargo'];
    $estado=$_POST['estado'];

    if (strlen($iduser)>0 && strlen($name)>0 && strlen($last_name)>0 && strlen($phone)>0 && strlen($email)>0 && strlen($cargo)>0 && strlen($estado)) {

        $objetoConsultas= new Consultas();
        $result= $objetoConsultas->modificarUser($iduser, $name, $last_name, $phone, $email, $cargo, $estado);
    }
    else {
        echo "<script>alert('POR FAVOR COMPLETE TODOS LOS CAMPOS')</script>";
        echo '<script>location.href="../views/Admin/ver-usuarios-admin.php"</script>';
    }
?>