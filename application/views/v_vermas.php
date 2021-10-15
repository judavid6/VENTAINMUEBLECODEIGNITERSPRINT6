<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src=<?php echo base_url('js/jquery.js');?>></script>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url('css/estilos.css');?>>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?php echo base_url('js/push.min.js'); ?>"></script>
</head>

<?php $this->load->view('v_navbar');
   
   ?>
   <br><br><br>

<div class="container">
    <div class="row text-justify">
      <?php
        foreach ($consulta->result() as $fila) {?>
        <?php
          $cadena1="archivos/";
          $cadena2=$fila->archivo;
          $resultado=$cadena1 . $cadena2;                  
          ?>     
             
        <div class="col-lg-8 col-md-6 mb-4">
          <div class="card h-100">
            <img class="card-img-top" src="<?php echo base_url($resultado); ?>" alt="Card image cap">
            <div class="card-body">
            <form action="<?php echo site_url('c_principal/postularse')."/".$fila->id_producto;  ?>" name="form1" method="post">     
                <input type="hidden" name="id" id="id" value="<?= $fila->id_producto ?>">
                            
                  <p class="card-title " name="caracteristicas_pro"><strong>DESCRIPCION:</strong></p>
                  <p class="card-text " name="caracteristicas_pro"><?= $fila->caracteristicas_pro ?></p>
                  
                  <p class="card-text " name="descripcion_pro"><?= $fila->descripcion_pro ?></p>
            </div>
            <div class="card-footer">
                       
            </div>
          </div>
        </div> 
        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          
          <div class="card-body">
            <h4 class="card-title"><?= $fila->titulo_pro ?></h4>
            <p class="card-text"><?= $fila->ubicacion_pro?></p>
            <p class="card-text" name="precio_pro">$<?= $fila->precio_pro ?></p>
          </div>
          <div class="card-footer">
          <?php
          $query=$this->db->query("SELECT * FROM postulaciones WHERE id_usuario = '".$_SESSION['id']."' AND id_producto ='".$fila->id_producto."'" );
          $result =   $query->row_array();
          if($result){?>
          Ya estas postulado a este inmueble <br><br>
          <input type="submit" name="volver" class="btn btn-danger" value="Volver"> 
          <?php

              
          }
          else{?>
                    <input type="submit" name="postularse" class="btn btn-primary" value="Postularse">   

          <?php

          }
          ?>
          </div>
        </div>
      </div> 
      </form>  
      <?php
              }
              ?>   
                                  
    </div>                              
</div>
</body>
</html>