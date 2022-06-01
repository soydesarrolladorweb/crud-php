<?php

    function perfil(){

        $email = $_SESSION['email'];
        $consultas = new Consultas();
        $result = $consultas->verPerfil($email);

        foreach ($result as $f) {
            echo
             '<a href="registrar-usuarios-admin.php" class="brand-link">
             <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                  style="opacity: .8">
             <span class="brand-text font-weight-light">'.$f['cargo'].'</span>
           </a>
       
           
           <div class="sidebar">
             
             <div class="user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                 <img src="../../dist/img/user6-128x128.jpg" class="img-circle elevation-2" alt="User Image">
               </div>
               <div class="info">
                 <a href="#" class="d-block">'.$f['name'].' '.$f['last_name'].'</a>
               </div>
             </div>
             ';
        }
    }