<?php
  require_once('../../model/conection.php');
  require_once('../../model/validarSesion.php');
  require_once('../../model/consultasAdmin.php');
  require_once('../../controller/verPerfil.php');
  require_once('../../model/seguridad.php');
?>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <?php
      perfil();
    ?>

      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  
               <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Usuarios
                    <i class="fas fa-angle-left right"></i>
                    
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="registrar-usuarios-admin.php" class="nav-link">
                      <i class="far fa-user nav-icon"></i>
                      <span class="right badge badge-danger">New</span>
                      <p>Registrar Usuario</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="ver-usuarios-admin.php" class="nav-link">
                      <i class="far fa-eye nav-icon"></i>
                      <p>Listar Usuarios</p>
                    </a>
                  </li>
                </ul>
              </li> 

              <li class="nav-item">
                    <a href="../../controller/cerrarSesion.php" class="nav-link">
                      <i class="far fa-user nav-icon"></i>
                      <p>Cerrar Sesión</p>
                    </a>
                  </li>
          </ul>
      </nav>
      
    </div>
    
  </aside>