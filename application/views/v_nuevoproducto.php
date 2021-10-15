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
</head>
<body>
<?php $this->load->view('v_navbar');
   
   ?>
   <br><br><br><br>
    <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">CREAR</h5>
            
            <?php echo form_open_multipart('c_nuevoproducto/nuevo_producto');?>
                    <div class="form-group">
                        <label for="archivo"></label>
                        <input type="file" name="archivo" multiple  id="archivo" class="form-control" placeholder="Cargar Archivo" value="<?php echo set_value('archivo'); ?>">
                    </div>                    
                    <div class="form-group">
                        <label for="titulo"></label>
                        <input type="text" name="titulo_pro" id="titulo_pro" class="form-control" placeholder="titulo_pro" value="<?php echo set_value('titulo_pro'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="apellidos"></label>
                        <textarea type="text" name="caracteristicas_pro" id="caracteristicas_pro" class="form-control" placeholder="caracteristicas_pro" value="<?php echo set_value('caracteristicas_pro'); ?>"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="correo_electronico"></label>
                        <input type="text" name="precio_pro" id="precio_pro" class="form-control" placeholder="precio_pro" value="<?php echo set_value('precio_pro'); ?>">
                    </div>

                    <div class="form-group">
                        <label for="celular"></label>
                        <textarea type="text" name="descripcion_pro" id="descripcion_pro" class="form-control" placeholder="descripcion_pro" value="<?php echo set_value('descripcion_pro'); ?>"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="celular"></label>
                        <input type="text" name="ubicacion_pro" id="ubicacion_pro" class="form-control" placeholder="ubicacion_pro" value="<?php echo set_value('ubicacion_pro'); ?>"></textarea>
                    </div>

                    
                    <input type="submit" value="Enviar" class="btn btn-primary">
             
                    </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
        echo validation_errors();
    ?>
</body>
</html>