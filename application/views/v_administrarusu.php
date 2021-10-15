<!DOCTYPE html>
<html lang="en">

<head>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
  <?php $this->load->view('v_navbar');

  ?>
  <br><br><br>
  <div class="container mt-3">
    <h2>Administrar Usuarios</h2>
    <br>
    <!-- Nav tabs -->
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">CONSULTA</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">REGISTRO</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <br>
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <br>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>id</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Correo Electronico</th>
              <th>Celular</th>
              <th>Estatura</th>
              <th>Login</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody id="myTable">
            <?php
            foreach ($listaUsuario as $value) { ?>
              <tr>
                <td><?php echo $value->id_usuario; ?></td>
                <td><?php echo $value->nombres; ?></td>
                <td><?php echo $value->apellidos; ?></td>
                <td><?php echo $value->correo_electronico; ?></td>
                <td><?php echo $value->celular; ?></td>
                <td><?php echo $value->estatura; ?></td>
                <td><?php echo $value->login; ?></td>
                <td>

                  <a href="<?php echo site_url('c_administrarusu/delete') . "/" . $value->id_usuario; ?>"><span title="Eliminar">
                      <ion-icon name="trash-outline"></ion-icon>
                    </span> </a>
                  <a href="<?php echo site_url('c_administrarusu/edit') . "/" . $value->id_usuario; ?>"><span title="Editar">
                      <ion-icon name="create-outline"></ion-icon>
                    </span> </a>
                </td>
              </tr>
            <?php  } ?>
          </tbody>
        </table>
        <script>
          $(document).ready(function() {
            $("#myInput").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
            });
          });
        </script>
      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
      <div class="container">
          <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
              <div class="card card-signin my-5">
                <div class="card-body">
                  <h5 class="card-title text-center">CREAR</h5>
                  <form action="<?php echo site_url('c_administrarusu/nuevousuario') ?>" method="post">
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
                      <input type="password" name="password" id="estatura" class="form-control" placeholder="Contraseña">
                    </div>

                    <div class="form-group">
                      <label for="confirmar_password"></label>
                      <input type="password" name="confirmar_password" id="estatura" class="form-control" placeholder="Confirmar Contraseña">
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
      </div>
    </div>

    <!-- Tab panes -->
    
  </div>

</body>

</html>