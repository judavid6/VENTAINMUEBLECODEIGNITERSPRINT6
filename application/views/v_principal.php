<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script type="text/javascript" src=<?php echo base_url('js/jquery.js'); ?>></script>
  <link rel="stylesheet" type="text/css" href=<?php echo base_url('css/estilos.css'); ?>>
  <script src="<?php echo base_url('js/push.min.js'); ?>"></script>


</head>

<body>

  <!-- Navigation -->
  <?php

  $this->load->view('v_navbar');

  ?>
  <br><br><br>

  <!-- Page Content -->


  <style type="text/css">


    .container-fluid {
      padding-left: 180px;
      padding-right: 180px;
    }

    .card-img-top {
      height: 350px !important;
      width: auto !important;
    }
  </style>
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('img/banner.Jpg'); ?>" class="d-block w-100"  height="500" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('img/banner.jpg'); ?>" class="d-block w-100" height="500" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('img/banner.jpg'); ?>" class="d-block w-100" height="500" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <!-- Jumbotron Header -->
  <br><br>
  <div class="container">
    <!-- Page Features -->
    <div class="row text-justify">
      <?php
      foreach ($consulta->result() as $fila) { ?>
        <?php
        $cadena1 = "archivos/";
        $cadena2 = $fila->archivo;
        $resultado = $cadena1 . $cadena2;

        $idpro = $fila->id_producto;
        $titulopro = $fila->titulo_pro;
        $caracteristicaspro = $fila->caracteristicas_pro;
        $preciopro = $fila->precio_pro;
        $descripcionpro = $fila->descripcion_pro;

        ?>

        <div class="col-lg-6 col-md-6 mb-4">
          <div class="card h-100">
            <img class="card-img-top" src="<?php echo base_url($resultado); ?>" alt="Card image cap">
            <div class="card-body">
              <form action="<?php echo site_url('c_principal/editar_producto');  ?>" name="form1" method="post">
                <input type="hidden" name="id" id="id" value="<?= $fila->id_producto ?>">
                <h2 class="card-title" name="titulo_pro"><?= $fila->titulo_pro ?></h2>
                <p class="card-text text-truncate" name="caracteristicas_pro"><?= $fila->caracteristicas_pro ?></p>
                <p class="card-text" name="precio_pro"><?= $fila->precio_pro ?></p>
                <p class="card-text text-truncate" name="descripcion_pro"><?= $fila->descripcion_pro ?></p>
            </div>
            <div class="card-footer">
              <?php
              if (isset($_SESSION['id'])) {

                if ($fila->id_usuario == $_SESSION['id'] || $_SESSION['tipo'] == "admin") { ?>
                  <input type="submit" name="editar" value="Editar" class="btn btn-danger">

                  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable" onclick="enviar(<?= $idpro; ?>,'<?= $titulopro; ?>')">
                    
                      Postularse
                    </button>-->

                <?php
                } else { ?>
                  <input type="submit" class="btn btn-primary" name="postularse" value="Ver mas...">



                <?php
                }
                ?>
              <?php
              } else { ?>
                <a href="<?php echo site_url('c_login') ?>">
                  <input type="submit" name="postularse" class="btn btn-primary" value=" Ver mas...">



                </a>
              <?php
              }

              ?>
            </div>
            </form>

          </div>
        </div>

      <?php
      }
      ?>
    </div>
  </div>

  <!-- Modal 
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
         
        </button>
      </div>
      <div class="modal-body">
      <h2>ESTÁ SEGURO DE QUERER POSTULARSE PARA ESTE INMUEBLE?</h2>
      
      </div>
      <div class="modal-footer">
        <a href="<?php echo site_url('c_principal/postularse') . "/" . $fila->id_producto; ?>">SI</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        
      </div>
    </div>
  </div>
</div>
<script>
  function enviar(id_producto,titulo_pro){
    document.getElementById("id_producto").value = id_producto;
    document.getElementById("titulo_pro").value = titulo_pro;
  }
</script>-->
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>