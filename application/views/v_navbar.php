<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url('c_principal') ?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <?php
            if($this->session->userdata('login')){?>

              <a class="nav-link" href="<?php echo site_url('c_nuevoproducto') ?>">Crear</a>
              
            <?php
            }
            ?>
            
          </li>
          <li class="nav-item">
            <?php
            if($this->session->userdata('login')){?>

              <a class="nav-link" href="<?php echo site_url('c_verinmuebles') ?>">Ver Inmuebles</a>
              
            <?php
            }
            ?>
            
          </li>
          <li class="nav-item">
          <?php 
          if(!isset( $_SESSION['login'])){?>
            <a class="nav-link" href="<?php echo site_url('c_principal/nuevo_usuario') ?>">SignUp</a>
            <?php
          }
          ?>
          </li> 

           <li class="nav-item">
           <?php 
           if(isset($_SESSION['login'])){
            if($_SESSION['tipo']=="admin"){ ?>
                <a class="nav-link" href="<?php echo site_url('c_administrarusu') ?>">Administrar Usuarios</a>
                <?php
            }
            ?>
            <?php
           }
           ?>
        
           
          </li>
          <li class="nav-item">
           <?php 
           if(isset($_SESSION['login'])){
            if($_SESSION['tipo']=="admin"){ ?>
                <a class="nav-link" href="<?php echo site_url('c_administrarproduc') ?>">Administrar Productos</a>
                <?php
            }
            ?>
            <?php
           }
           ?>
        
           
          </li>
          <li class="nav-item">
          <?php
          if($this->session->userdata('login')){?>
            <a class="nav-link" href="<?php echo site_url('c_login/logout') ?>">LogOut</a>
         <?php
          }else{?>
            <a class="nav-link" href="<?php echo site_url('c_login') ?>">LogIn</a>
          <?php
          }
              
          ?>
            
          </li>
        </ul>
      </div>
    </div>
  </nav>