<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ENARTES</title>
 
    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url() ?>bootstrap/js/html5shiv.min.js"></script>
      <script src="<?php echo base_url() ?>bootstrap/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background:#eeeeee;">
 
    <p>
</p>
    <div class="container">
 <div class="row">
       <div class="col-md-4"></div>
            <div class="col-md-4">
  <div class="panel panel-default">
    <div class="panel-body">
	<span class="glyphicon glyphicon-user align-center" aria-hidden="true"></span> 
  <h3 class="">INICIAR SESIÓN</h3><hr/>
     <?php echo validation_errors(); ?>
  <?php echo form_open('verifylogin'); ?>
         <div class="form-group">
       <label for="username">Usuario:</label>
       <input type="text" class="form-control" id="username" name="username" placeholder="ejemplo@correo.com" required autofocus>
                    </div>
        <div class="form-group">
       <label for="password">Contraseña:</label>
       <input type="password" class="form-control" id="password" name="password" placeholder="******" required>
       </div>
       <button type="submit" value="Login" class="btn btn-lg btn-primary btn-block">Iniciar</button>
	    <label class="checkbox pull-right">
                    <input type="checkbox" value="remember-me">
                    Recordarme
                </label>
  <?php echo form_close(); ?>
 
             </div>
             </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url() ?>bootstrap/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>