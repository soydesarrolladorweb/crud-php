<?php
    
    function cargarU(){

        $consultas = new consultas();
        $result = $consultas->cargarUsers();

        if (!isset($result)) {
            echo'<h2> NO HAY USUARIOS REGISTRADOS</h2>';
        }
        else {

            echo'
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr class="bg-primary">
                        <th class="text-center">Identificación</th>
                        <th class="text-center">Nombres</th>
                        <th class="text-center">Apellidos</th>
                        
                        <th class="text-center">Email</th>
                        <th class="text-center">Cargo</th>
                        <th class="bg-warning text-center">Editar</th>
                        <th class="bg-danger text-center">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
            ';
            foreach ($result as $f) {
                echo'
                    <tr>
                        <td class="text-center">'.$f["iduser"].'</td>
                        <td class="text-center">'.$f["name"].'</td>
                        <td class="text-center">'.$f["last_name"].'</td>
                        
                        <td class="text-center">'.$f["email"].'</td>
                        <td class="text-center">'.$f["cargo"].'</td>
                        <td class="text-center"><a href="editar-usuarios-admin.php?id_user='.$f["iduser"].'">Editar</a></td>
                        <td class="text-center"><a href="../../controller/eliminarUserAdmin.php?id_userEliminar='.$f["iduser"].'">Eliminar</a></td>
                    </tr>
                ';
            }
            echo'</tbody> </table>';

        }
    }


?>