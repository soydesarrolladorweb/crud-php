<?php

    function seleccionar(){
        if (isset($_GET['id_user'])) {
            $consultas = new Consultas();
            $id_user = $_GET['id_user'];
            $result = $consultas->cargarUser($id_user);

            foreach($result as $f){
                echo'
                <form role="form" action="../../controller/modificarUsersAdmin.php" method="POST">
                <div class="card-body">

                  <div class="row">
                    <div class="form-group col-md-6 ">
                            <label for="iduser">Identificacion</label>
                            <input type="number" readonly="readonly" value="'.$f['iduser'].'" class="form-control" name="iduser" id="iduser" placeholder="Tu numero de identificación" required="">
                    </div>
                          <div class="form-group col-md-6 ">
                            <label for="name">Nombres</label>
                            <input type="text" value="'.$f['name'].'" class="form-control" name="name" id="name" placeholder="Escribe tus nombres" required="">
                          </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6 ">
                      <label for="last_name">Apellidos</label>
                      <input type="text" value="'.$f['last_name'].'" class="form-control" name="last_name" id="last_name" placeholder="Escribe tus apellidos" required="">
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="phone">Telefono</label>
                        <input type="text" value="'.$f['phone'].'" class="form-control" name="phone" id="phone" placeholder="Escribe tu numero de contacto" required="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6 ">
                      <label for="email">Email</label>
                      <input type="email" value="'.$f['email'].'" class="form-control" name="email" id="email" placeholder="Escribe tu email" required="">
                    </div>

                    <div class="form-group col-md-6 ">
                      <label for="cargo">Casrgo</label>
                      <select class="form-control" name="cargo" id="cargo" required="">
                              <option value="'.$f['cargo'].'">'.$f['cargo'].'</option>
                              <option value="1">Administrador</option>
                              <option value="2">Supervisor</option>
                              <option value="3">Vendedor</option>
                      </select>
                    </div>
                  </div>
                </div>
                
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
                ';
            }
        }
    }

?>

<!-- /.content <button class="btn btn-danger" style="margin: 10px;" onclick="document.location = '../ver-usuarios-admin.php'">Cancelar</button>  -->