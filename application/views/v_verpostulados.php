<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
  
  $this->load->view('v_navbar');
  
   ?>
   <br><br><br>
    <!-- /.col-lg-3 -->
<div class="container">


<div class="card mt-4">
  
  <div class="card-body">
    <h3 class="card-title">Postulantes</h3>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
<br>
    <table class="table table-bordered table-striped">
<thead>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Evento</th>
  </tr>
</thead>

<tbody id="myTable">
<?php
    foreach ($consulta->result() as $fila) {?>
          <tr>
          <td><?= $fila->nombres ?></td>
          <td><?=$fila->apellidos?></td>
          <td><?=$fila->correo_electronico?></td>
          <td>
          <a href=""><span title="Descartar" class="glyphicon glyphicon-trash">Descartar  </span> </a>
        <a href="<?php echo site_url('c_verinmuebles/emailpost')."/".$fila->correo_electronico; ?>"><span title="Cpntactar"class="glyphicon glyphicon-envelope"></span>Contactar</a>
          </td>
        </tr>
    <?php
    
      
      }
    ?>
  
  
  
</tbody>
</table>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
  </div>
  <div class="card-footer">
                      
</div>

</div>

  
</body>
</html>