<?php
    // Se crea la clase ya que estamos programando orientado en objetos
    class Consultas{
        // Llamamos los argumentos necesarios para realizar el registro, se deben utilizar los mismos nombres de la db
        public function insertUsers($iduser, $name, $last_name, $phone, $email, $pass, $cargo, $estado){

            // Conectamos con  la base de datos con la creación de un objeto de la clase conection
            $modelo = new Conection();
            $conection = $modelo->get_conection();

            // Condicional en el modelo de datos para que solo exista un usuario unico por el iduser o el email de la
            // db y el parametro email.
            $sql = "SELECT * FROM users WHERE iduser=:iduser OR email=:email";
            $result= $conection->prepare($sql);
            $result->bindParam(':iduser',$iduser);
            $result->bindParam(':email',$email);

            $result->execute();
            //Guardamos en un arreglo $f todo lo de $result para realizar la condicional de comparación.
            $f = $result->fetch(); 

            if ($f) {
                echo "<script>alert('DATOS YA EXISTENTES EN LA BASE DE DATOS, POR FAVOR VERIFIQUE.')</script>";
                echo '<script>location.href="../views/Admin/registrar-usuarios-admin.php"</script>';
            } else {
                $sql= "INSERT INTO users (iduser, name, last_name, phone, email, pass, cargo, estado) VALUES(:iduser, :name, :last_name, :phone, :email, :pass, :cargo, :estado)";
                
                // Se crean las declaraciones donde igualaremos los datos enviados desde el formulario a los values
                $statement = $conection->prepare($sql);
    
                $statement->bindParam(':iduser',$iduser);
                $statement->bindParam(':name',$name);
                $statement->bindParam(':last_name',$last_name);
                $statement->bindParam(':phone',$phone);
                $statement->bindParam(':email',$email);
                $statement->bindParam(':pass',$pass);
                $statement->bindParam(':cargo',$cargo);
                $statement->bindParam(':estado',$estado);
                
                // Validamos y ejecutamos la consulta

                if (!$statement) {
                    return "Error al registrar usuario";
                }
                else{
                    $statement->execute();
                    echo "<script>alert('USUARIO REGISTRADO CON EXITO')</script>";
                    echo '<script>location.href="../views/Admin/ver-usuarios-admin.php"</script>';
                }
            }

        }
        /**
         * *****************************************
         * MOSTRAR USUARIOS EN LA VISTA VER DEL MENU
         * *****************************************
         */
        
        public function cargarUsers(){
            $f=null;
            // Conectamos con  la base de datos con la creación de un objeto de la clase conection
            $modelo = new Conection();
            $conection = $modelo->get_conection();
            
            // Traemos todo de la db ordenada por Nombre
            $sql= "SELECT * FROM users ORDER BY name";
            $statement=$conection->prepare($sql);
            $statement->execute();

            // Todo lo que traiga $statement (info de users) guardelo en $result y lo iteramos con un array para mostrarlo en la vista
            while ($result = $statement->fetch()) {
                $f[] = $result;
            }
            return $f;
        }

        public function cargarUser($doc){
            $f=null;

            $modelo = new Conection();
            $conection = $modelo->get_conection();
            // donde iduser *campo de la bd* sea igual al param :iduser
            $sql= "SELECT * FROM users WHERE iduser = :iduser";
            
            $statement = $conection->prepare($sql);
            $statement->bindParam(":iduser", $doc);
            $statement->execute();

            while ($result = $statement->fetch()) {
                $f[] = $result;
            }
            return $f;

        }

        public function modificarUser($iduser, $name, $last_name, $phone, $email, $cargo){
            
            $modelo = new Conection();
            $conection = $modelo->get_conection();

            $sql= "UPDATE users SET iduser=:iduser, name=:name, last_name=:last_name, phone=:phone, email=:email, cargo=:cargo WHERE iduser=:iduser";

                $statement = $conection->prepare($sql);
    
                $statement->bindParam(':iduser',$iduser);
                $statement->bindParam(':name',$name);
                $statement->bindParam(':last_name',$last_name);
                $statement->bindParam(':phone',$phone);
                $statement->bindParam(':email',$email);
                $statement->bindParam(':cargo',$cargo);
    
                if (!$statement) {
                    return "Error al registrar usuario";
                }
                else{
                    $statement->execute();
                    echo "<script>alert('USUARIO ACTUALIZADO CON EXITO')</script>";
                    echo '<script>location.href="../views/Admin/ver-usuarios-admin.php"</script>';
                }
        }

        public function eliminarUser($idEliminar){
            $modelo = new Conection();
            $conection = $modelo->get_conection();

            $sql="DELETE FROM users WHERE iduser=:iduser";
            $statement = $conection->prepare($sql);
            $statement->bindParam(":iduser", $idEliminar);

            if (!$statement) {
                echo "<script>alert('ERROR AL ELIMINAR - INTENTE NUEVAMENTE')</script>";
                echo '<script>location.href="../views/Admin/ver-usuarios-admin.php"</script>';
            }
            else{
                $statement->execute();
                    echo "<script>alert('USUARIO ELIMINADO CON EXITO')</script>";
                    echo '<script>location.href="../views/Admin/ver-usuarios-admin.php"</script>';
                
            }
        }

    }
?>