<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src=<?php echo base_url('js/jquery.js');?>></script>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url('css/estilos.css');?>>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">

    function abrirVentana(){
      $(".ventana").slideDown("slow");
    }
    function cerrarVentana(){
      $(".ventana").slideUp("fast");
    }
    </script>
    
</head>

<body>

  <!-- Navigation -->
  <?php $this->load->view('v_navbar');
   
   ?>
   <br><br><br>

  <!-- Page Content -->
  
  <?php
  
  
    $azul = "img/banner.jpg"; 
?>
<style type="text/css">
.jumbotron{
  background-image: url(<?php echo base_url($azul);?>) ;
  background-size: 100% 100%;
 
}
.esconder{
  visibility: hidden ;

}
.container-fluid{
  padding-left: 180px;
  padding-right: 180px;
}
.card-img-top{
 height: 350px !important;
    width: auto !important;
}


</style>
<div class="container-fluid">
    <header class="jumbotron my-4">
    <div class="esconder">
    <h1 class="display-3 " >A Warm Welcome!</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
    <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
    </div>

    </header>
</div>
    <!-- Jumbotron Header -->
    <br><br>
    <div class="container">
    <!-- Page Features -->
<div class="row text-center">
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
        <input type="hidden" name="id" value="<?= $fila->id_producto ?>">
          <h2 class="card-title" name="titulo_pro"><?= $fila->titulo_pro ?></h2>           
          <p class="card-text" name="caracteristicas_pro"><?= $fila->caracteristicas_pro ?></p>
          <p class="card-text" name="precio_pro"><?= $fila->precio_pro ?></p>
          <p class="card-text" name="descripcion_pro"><?= $fila->descripcion_pro ?></p>
    </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary">Find Out More!</a>
      </div>
    </div>
  </div>
  <?php
          }
          ?> 
</div>
            
         
                 
  </div>


  <div class="container" id="modal" >
    
<?php  
          
      
          $cadena1="archivos/";
          $cadena2=$fila->archivo;
          $resultado=$cadena1 . $cadena2;        
          ?>     
          <?php echo form_open_multipart('');?>
          <div class="ventana" style="overflow-y: scroll;">
          
            <div class="form">
             <br>         
          <img class="card-img-top" src="<?php echo base_url($resultado); ?>" alt="Card image cap">         
          <div class="card-body">
                    
                        
                                       
                    <div class="form-group">
                        <label for="titulo"></label>
                        <h2 class="card-text" name="titulo_pro"><?= $fila->titulo_pro ?></h2>  
                    </div>
                    <div class="form-group">
                        <label for="apellidos"></label>
                        <p class="card-text" name="caracteristicas_pro"><?= $fila->caracteristicas_pro ?></p>
                    </div>

                    <div class="form-group">
                        <label for="correo_electronico"></label>
                        <p class="card-text" name="precio_pro"><?= $fila->precio_pro ?></p>
                    </div>

                    <div class="form-group">
                        <label for="celular"></label>
                        <p class="card-text" name="descripcion_pro"><?= $fila->descripcion_pro ?></p>
                    </div>

                    
                    <input type="submit" value="Enviar" class="btn btn-primary">
                    <div class="cerrar"> <a href= "javascript: cerrarVentana();" class="btn btn-primary">cerrar X</a></div>
              </form>
            
                   
        </div>
        </div>
        </div>
        
  </div>
  
  <!-- Modal -->
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
        <button type="button" class="btn btn-primary">SI</button>
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
</script>
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