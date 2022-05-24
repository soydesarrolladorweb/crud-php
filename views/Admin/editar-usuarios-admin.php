<?php
  require_once("../../model/conection.php");
  require_once("../../model/consultasAdmin.php");
  require_once("../../controller/cargarUserAdmin.php");
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
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
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
          <div class="col-sm-6">
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
          <div class="col-md-12">
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
    <strong>Copyright &copy; 2020 <a href="https://soydesarrolladorweb.github.io/fabianBarrera/" target="blank_">Fabian Barrera</a>.</strong> All rights reserved.
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
