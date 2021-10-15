<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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
    <h2>Administrar Productos</h2>
    <br>
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
              <th>Foto</th>
              <th>id producto</th>
              <th>id Usuario</th>
              <th>Titulo</th>
              <th>Caracteristicas</th>
              <th>Precio</th>
              <th>Descripcion</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody id="myTable">
            <?php

            foreach ($listaProducts as $value) { ?>
              <?php $cadena1 = "archivos/";
              $cadena2 = $value->archivo;
              $resultado = $cadena1 . $cadena2; ?>
              <tr>
                <td><img class="card-img-top" src="<?php echo base_url($resultado); ?>" alt="Card image cap"></td>
                <td><?php echo $value->id_producto; ?></td>
                <td><?php echo $value->id_usuario; ?></td>
                <td><?php echo $value->titulo_pro; ?></td>
                <td><?php echo $value->caracteristicas_pro; ?></td>
                <td><?php echo $value->precio_pro; ?></td>
                <td><?php echo $value->descripcion_pro; ?></td>

                <td>
                  <a href="<?php echo site_url('c_administrarproduc/delete') . "/" . $value->id_producto; ?>"><span title="Eliminar">
                      <ion-icon name="trash-outline"></ion-icon>
                    </span> </a>
                  <a href="<?php echo site_url('c_administrarproduc/edit') . "/" . $value->id_producto; ?>"><span title="Editar">
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

                  <?php echo form_open_multipart('c_nuevoproducto/nuevo_producto'); ?>
                  <div class="form-group">
                    <label for="archivo"></label>
                    <input type="file" name="archivo" multiple id="archivo" class="form-control" placeholder="Cargar Archivo" value="<?php echo set_value('archivo'); ?>">
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
    <!-- Nav tabs -->

    <style type="text/css">
      .card-img-top {
        height: 150px;
        width: 150px;
        max-width: 1200px;
      }
    </style>
    <!-- Tab panes -->
  </div>

</body>

</html>