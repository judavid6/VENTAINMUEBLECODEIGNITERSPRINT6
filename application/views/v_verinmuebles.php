<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src=<?php echo base_url('js/jquery.js');?>></script>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url('css/estilos.css');?>>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<?php $this->load->view('v_navbar');
   
   ?>
   <br><br><br>
   <style type="text/css">

.card-img-top{
  height: 350px !important;
    width: auto !important;
}


</style>
   <div class="container">
   
   
   
   <div class="row text-justify">
      <?php
        foreach ($consulta->result() as $fila) {?>
        <?php
          $cadena1="archivos/";
          $cadena2=$fila->archivo;
          $resultado=$cadena1 . $cadena2; 

          $idpro=$fila->id_producto;
          $titulopro=$fila->titulo_pro;
          $caracteristicaspro=$fila->caracteristicas_pro;
          $preciopro=$fila->precio_pro;
          $descripcionpro=$fila->descripcion_pro;
                  
          ?>
          
    <div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="<?php echo base_url($resultado); ?>" alt="Card image cap">
          <div class="card-body">
        
              <input type="hidden" name="id" id="id" value="<?= $fila->id_producto ?>">
                <h2 class="card-title" name="titulo_pro"><?= $fila->titulo_pro ?></h2>           
                <p class="card-text text-truncate" name="caracteristicas_pro"><?= $fila->caracteristicas_pro ?></p>
                <p class="card-text" name="precio_pro"><?= $fila->precio_pro ?></p>
                <p class="card-text text-truncate" name="descripcion_pro"><?= $fila->descripcion_pro ?></p>
          </div>
          <div class="card-footer">
           <?php
          if($_SESSION['id']==$fila->id_usuario ||  $_SESSION['tipo']=="admin"){?>
          <form action="<?php echo site_url('c_verinmuebles/postulados')."/".$fila->id_producto;  ?>" name="form1" method="post">
            <input type="submit"  class="list-group-item bg-dark text-light" value="<?= $fila->titulo_pro ?>">
            </form>
            <?php
          }
        ?>
          </div>
        </div>
    </div>
     
      <?php
              }
              ?> 
  </div> 

</div>








  
  
    <!-- /.card -->
 <!--
    <div class="card card-outline-secondary my-4">
      <div class="card-header">
        Product Reviews
      </div>
      <div class="card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
        <hr>
        <a href="#" class="btn btn-success">Leave a Review</a>
      </div>
    </div>
    /.card -->

  </div>
  <!-- /.col-lg-9 -->

</div>

</div>
</body>
</html>