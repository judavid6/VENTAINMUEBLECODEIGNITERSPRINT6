<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php $this->load->view('v_navbar');
   
   ?>
   <br><br><br> 
    
    <form action="<?php echo site_url('c_login'); ?> " method ="POST">
    
    
    <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin">
            <div class="form-group">
                        <label for="login"></label>
                        <input type="text" name="login" id="login" class="form-control" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="password"></label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>

              <div class="custom-control custom-checkbox mb-3">
                <a href="<?php echo site_url('c_principal/nuevo_usuario') ?>">
                  <label class="label" >Or Sign Up</label>
                </a>
                
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
</body>
</html>