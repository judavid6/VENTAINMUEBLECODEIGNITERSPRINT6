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
<br><br><br><br>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">CREAR</h5>
                <form action="<?php site_url('c_principal/nuevo_usuario') ?>" method ="post">
                    <div class="form-group">
                        <label for="nombres"></label>
                        <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Nombres" value="<?php echo set_value('nombres'); ?>">
                    </div>

                    <div class="form-group">
                        <label for="apellidos"></label>
                        <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Apellidos" value="<?php echo set_value('apellidos'); ?>">
                    </div>

                    <div class="form-group">
                        <label for="correo_electronico"></label>
                        <input type="text" name="correo_electronico" id="correo_electronico" class="form-control" placeholder="Correo Electronico" value="<?php echo set_value('correo_electronico'); ?>">
                    </div>

                    <div class="form-group">
                        <label for="celular"></label>
                        <input type="text" name="celular" id="celular" class="form-control" placeholder="Celular" value="<?php echo set_value('celular'); ?>">
                    </div>

                    <div class="form-group">
                        <label for="estatura"></label>
                        <input type="text" name="estatura" id="estatura" class="form-control" placeholder="Estatura" value="<?php echo set_value('estatura'); ?>">
                    </div>

                    <div class="form-group">
                        <label for="login"></label>
                        <input type="text" name="login" id="login" class="form-control" placeholder="Login" value="<?php echo set_value('login'); ?>">
                    </div>

                    <div class="form-group">
                        <label for="password"></label>
                        <input type="password" name="password" id="estatura" class="form-control" placeholder="Contraseña" >
                    </div>

                    <div class="form-group">
                        <label for="confirmar_password"></label>
                        <input type="password" name="confirmar_password" id="estatura" class="form-control" placeholder="Confirmar Contraseña" >
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