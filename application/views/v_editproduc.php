<?php  $this->load->view('v_navbar');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class ="container">
        <div class="row">
            <div class ="col-md-4 col-md-offset-4">
            <h2>Modificar</h2>
                <form action="<?php echo site_url('c_administrarusu/update_usuario'); ?>" method ="post">
               
                    <div class="form-group">
                        <label for="nombres"></label>
                        <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Nombres" value="<?php echo $editusuario['nombres']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="apellidos"></label>
                        <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Apellidos" value="<?php echo $editusuario['apellidos']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="nombres"></label>
                        <input type="text" name="correo_electronico" id="correo_electronico" class="form-control" placeholder="Correo electronico" value="<?php echo $editusuario['correo_electronico']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="nombres"></label>
                        <input type="text" name="celular" id="celular" class="form-control" placeholder="Celular" value="<?php echo $editusuario['celular']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="nombres"></label>
                        <input type="text" name="estatura" id="estatura" class="form-control" placeholder="Estatura" value="<?php echo $editusuario['estatura']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="login"></label>
                        <input type="text" name="login" id="login" class="form-control" placeholder="Login" value="<?php echo $editusuario['login']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="tipo"></label>
                        <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Tipo" value="<?php echo $editusuario['tipo']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="password"></label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="Password" value="<?php echo base64_decode($editusuario['password']); ?>">
                    </div>

                    <div class="form-group">
                        <label for="ip"></label>
                        <input type="hidden" name="id_usuario" id="id_usuario" class="form-control" placeholder="id_usuario" value="<?php echo $editusuario['id_usuario']; ?>">
                    </div>

                        <input type="submit" value="Enviar" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
 
</body>
</html>