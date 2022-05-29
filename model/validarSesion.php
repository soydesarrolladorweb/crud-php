<?php
    class validarSesion{
        public function iniciarSesion($email, $pass){
            
            $modelo = new Conection();
            $conection = $modelo->get_conection();

            $sql = "SELECT * FROM users WHERE email=:email";
            $statement= $conection->prepare($sql);
            $statement->bindParam(":email", $email);

            // Creamos un array $f para utilizar dato por dato
            $statement->execute();
            if ($f = $statement->fetch()) {
                if ($pass == $f['pass']) {
                    
                    session_start();
                    $_SESSION['email'] =$f['email'];
                    $_SESSION['iduser'] =$f['iduser'];
                    $_SESSION['pass'] =$f['pass'];
                    $_SESSION['cargo'] =$f['cargo'];
                    $_SESSION['estado'] =$f['estado'];

                    // $_SESSION['autenticado']="SI";

                    if ($f['estado'] == "Activo") {
                        if ($f['cargo'] == "Administrador") {
                            echo "<script>alert('Bienvenido al panel de Administración')</script>";
                            echo '<script>location.href="../views/Admin/registrar-usuarios-admin.php"</script>';    
                        }
                        if ($f['cargo'] == "Vendedor") {
                            echo "<script>alert('Bienvenido al panel de ventas')</script>";
                            echo '<script>location.href="../views/Admin/menu-inicio.php"</script>';    
                        }
                        if ($f['cargo'] == "Supervisor") {
                            echo "<script>alert('Bienvenido al panel de Auditoria')</script>";
                            echo '<script>location.href="../views/Admin/ver-usuarios-admin.php"</script>';    
                        }
                    } else {
                        echo "<script>alert('USUARIO INACTIVO - COMUNIQUESE CON EL ADMINISTRADOR')</script>";
                        echo '<script>location.href="../index.php"</script>';    
                    }
                } else{
                    echo "<script>alert('CONTRASEÑA INCORRECTA')</script>";
                    echo '<script>location.href="../index.php"</script>';    
                } 
            }else {
                echo "<script>alert('USUARIO INCORRECTO')</script>";
                echo '<script>location.href="../index.php"</script>';
            }
        }   
        public function cerrarSesion(){
            $modelo = new Conection();
            $conection = $modelo->get_conection();

            session_start();
            session_destroy();

            echo "<script>alert('SESIÓN FINALIZADA')</script>";
            echo '<script>location.href="../index.php"</script>';
        }
    }


?>