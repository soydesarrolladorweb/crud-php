    <?php
    // Enlazamos con la conexión y las consultas (Model)
    require_once('../model/conection.php');
    require_once('../model/consultasAdmin.php');

    $iduser=$_POST['iduser'];
    $name=$_POST['name'];
    $last_name=$_POST['last_name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cargo=$_POST['cargo'];
    $status=$_POST['status'];

    // Validamos que los campos no vengan vacios

    if (strlen($iduser)>0 && strlen($name)>0 && strlen($last_name)>0 && strlen($phone)>0 && strlen($email)>0  && strlen($pass)>0 && strlen($cargo)>0 && strlen($status)>0 ) {
        // Encriptamos la contraseña
        $passmd=md5($pass);
        // Llamamos la clase Consultas (consultasAdmin.php)
        $objetoConsultas= new Consultas();
        // Creamos una variable para que toda nos guarde la información ya llena.
        $result= $objetoConsultas->insertUsers($iduser, $name, $last_name, $phone, $email, $passmd, $cargo, $status);
    }
    else {
        echo "<script>alert('POR FAVOR COMPLETE TODOS LOS CAMPOS')</script>";
        echo '<script>location.href="../views/Admin/registrar-usuarios-admin.php"</script>';
    }
?>