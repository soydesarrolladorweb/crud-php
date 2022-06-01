<?php
  require_once("../../model/conection.php");
  require_once("../../model/consultasAdmin.php");
  require_once("../../controller/cargarUserAdmin.php");
  require_once('../../controller/verPerfil.php');
  require_once('../../model/seguridad.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Practice System</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
  include("../../includes/sidebar.php");
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Usuario</h1>
          </div><!-- /.col -->
          <div class="col-sm-5">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Administrador</a></li>
              <li class="breadcrumb-item active">Editar usuario</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
  <section class="container">
    <div class="container-fluid">
          <div class="row">
          <!-- left column -->
          <div class="col-md-11">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">DATOS DE USUARIO</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

            <?php
              seleccionar();
            ?>

          <!-- <form role="form" action="../../controller/insertUsers.php" method="POST">
                <div class="card-body">

                  <div class="row">
                    <div class="form-group col-md-6 ">
                            <label for="idusuario">Identificacion</label>
                            <input type="text" class="form-control" name="idusuario" id="idusuario" placeholder="Ej: 79452663" required="">
                    </div>
                          <div class="form-group col-md-6 ">
                            <label for="nombres">Nombres</label>
                            <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Ej:Fabian Enrique" required="">
                          </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6 ">
                      <label for="apellidos">Apellidos</label>
                      <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Ej:Barrera" required="">
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ej:3007614919" required="">
                    </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-md-6 ">
                    <label for="correo">Email</label>
                    <input type="email" class="form-control" name="correo" id="correo" placeholder="Ej:febarrera12@misena.edu.co" required="">
                  </div>
                  <div class="form-group col-md-6 ">
                      <label for="usuario">Usuario</label>
                      <input type="text" class="form-control" name="usuario" id="usuario" placeholder="fabiancho.5" required="">
                  </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-md-6 ">
                          <label for="clave">Clave</label>
                          <input type="password" class="form-control" name="clave" id="clave" placeholder="Alfa numerica min 8 caracteres" required="">
                      </div>
                      <div class="form-group col-md-6 ">
                            <label for="rol">Rol</label>
                            <select class="form-control" name="rol" id="rol" required="">
                                  <option>Seleccione un Rol</option>
                                  <option value="1">Administrador</option>
                                  <option value="2">Supervisor</option>
                                  <option value="3">Vendedor</option>
                            </select>
                          </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6 ">
                        <label for="estatus">Estatus</label>
                        <select class="form-control" name="estatus"  id="estatus" required="">
                              <option>Activar Usuario</option>
                              <option value="0">Activo 1</option>
                              <option value="1">Inactivo 0</option>
                        </select>
                      </div>
                  
                    </div>
                </div>
                
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </form> -->
              
            </div> 
          </div>   
        </div>
    </div>    
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022 <a href="https://soydesarrolladorweb.github.io/fabianBarrera/" target="blank_">Fabian Barrera</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
