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
    $estado=$_POST['estado'];

    // Validamos que los campos no vengan vacios

    if (strlen($iduser)>0 && strlen($name)>0 && strlen($last_name)>0 && strlen($phone)>0 && strlen($email)>0  && strlen($pass)>0 && strlen($cargo)>0 && strlen($estado)>0 ) {
        define ('LIMITE',2000);
		define('ARREGLO', serialize(array('image/jpg' ,'image/png' ,'image/jpeg' )));//definir el arreglo con las extenciones permitidas//
		$FORMATO= unserialize(ARREGLO);

        if ($_FILES["foto"]["error"]>0) {//ese file depende del name del input del registrar//
			echo "<script>alert('Seleccione una imagen')</script>";
			echo "<script>location.href='../views/Admin/registrar-usuarios-admin.php'</script>";
		}
        else{
            if (in_array($_FILES['foto']['type'], $FORMATO) && $_FILES['foto']['size'] <= LIMITE *2000) {
                $rutaImg= "../dist/users/".$_FILES['foto']['name'];

                if (!file_exists($rutaImg)) {
                    $resultado = move_uploaded_file($_FILES["foto"]["tmp_name"], $rutaImg);

                    if ($resultado) {
                        // Encriptamos la contraseña
                        $passmd=md5($pass);
                        // Llamamos la clase Consultas (consultasAdmin.php)
                        $objetoConsultas= new Consultas();
                        // Creamos una variable para que toda nos guarde la información ya llena.
                        $result= $objetoConsultas->insertUsers($iduser, $name, $last_name, $phone, $email, $passmd, $cargo, $estado, $rutaImg);
                    }
                    else{
                        echo "<script>alert('Error al cargar la foto, intente nuevamente')</script>";
                        echo "<script>location.href='../views/Admin/registrar-usuarios-admin.php'</script>";
                    }

                }
                else{
                    echo "<script>alert('Ya existe una foto con este nombre')</script>";
				    echo "<script>location.href='../views/Admin/registrar-usuarios-admin.php'</script>";
                }
            }
            else{
				echo "<script>alert('Tamaño y/o tipo de imagen incorrecto')</script>";
				echo "<script>location.href='../views/Admin/registrar-usuarios-admin.php'</script>";
			}
        }
    }
    else {
        echo "<script>alert('POR FAVOR COMPLETE TODOS LOS CAMPOS')</script>";
        echo '<script>location.href="../views/Admin/registrar-usuarios-admin.php"</script>';
    }
?>