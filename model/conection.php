<?php
    // Creamos la clase, ya que es Programación Orientada a Objetos
    class Conection{
        // Creamos una función publica para poder llamarla en los diferentes archivos.
        public function get_conection(){
            $user="root";
            $pass="";
            $host="localhost";
            $db="practiceProject";

            // Se crea la clase conection, se agrega la instancia de PDO y los cuatro parametros necesarios para la conexión.
            // mysql con el host, igualamos la dbname con la variable $db, el usuario y la contraseña.

            $conection= new PDO("mysql:host=$host; dbname=$db;", $user, $pass);
            return $conection;
        }


    }

?>