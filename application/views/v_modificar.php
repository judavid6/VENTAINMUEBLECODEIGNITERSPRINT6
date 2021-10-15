<?php  $this->load->view('v_navbar');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src=<?php echo base_url('js/jquery.js');?>></script>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url('css/estilos.css');?>>
</head>
<body>
<?php $this->load->view('v_navbar');
   
   ?>
   <br><br><br>
<div class="container">
    <!-- Page Features -->
    <br><br><br><br>

<?php
   
       
          $cadena1="archivos/";
          $cadena2=$info['archivo'];
          $resultado=$cadena1 . $cadena2;          
          ?>
          <?php echo form_open_multipart('c_principal/actualizar_producto');?>            
        <div class="card mb-4">
            <img class="card-img-top" src="<?php echo base_url($resultado); ?>" alt="Card image cap">
                <div class="card-body">
                <div class="form-group">
                    <input type="file" name="archivo" multiple  id="archivo" class="form-control" placeholder="Cargar Archivo">
                    <input type="hidden" name="archivo2" id="archivo2" class="form-control" placeholder="archivo2" value="<?php echo $info['archivo']; ?>">
                </div>  
                <div class="form-group">
                    <input type="text" name="titulo_pro" id="titulo_pro" class="form-control" placeholder="titulo_pro" value="<?php echo $info['titulo_pro']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="caracteristicas_pro" id="caracteristicas_pro" class="form-control" placeholder="caracteristicas_pro" value="<?php echo $info['caracteristicas_pro']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="precio_pro" id="precio_pro" class="form-control" placeholder="precio_pro" value="<?php echo $info['precio_pro']; ?>">
                </div>
                <div class="form-group">    
                    <input type="text" name="descripcion_pro" id="descripcion_pro" class="form-control" placeholder="descripcion_pro" value="<?php echo $info['descripcion_pro']; ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" name="id_producto" id="id_producto" class="form-control" placeholder="id_producto" value="<?php echo $info['id_producto']; ?>">
                </div>
                <input type="submit" value="Enviar" class="btn btn-primary">
            </div>
        
    </form>
</div>      
</body>
</html>