<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="<?php echo base_url('js/push.min.js'); ?>"></script>

</head>
<body>
<?php
if(isset($param2)){
    if($param2 == 2){
         echo '<script>
        Push.create("USTED HA CONTACTADO A ESTE POSTULADO");
    </script>';
    } 
    redirect('c_principal','refresh');
}
if(isset($param1)){
    if($param1 == 1){
        echo '<script>
    Push.create("USTED HA SIDO POSTULADO");
</script>'; 
    }
    redirect('c_principal','refresh');
}
?>

   
</body>
</html>