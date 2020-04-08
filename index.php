<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/hris/resource/php/class/core/init.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Centro Escolar Integrated School</title>
  <link rel="icon" href="resource/img/ceis-logo">
  <link rel="stylesheet" href="vendor/css/bootstrap.css">
  <link rel="stylesheet" href="vendor/css/mdb.min.css">
  <link href="vendor/fonts/css/fontawesome.min.css" rel="stylesheet">
  <link href="vendor/fonts/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="resource/scss/animate.min.css">
  <link rel="stylesheet" href="resource/scss/index.css">
  </head>
  <body>
  <?php blocker()?>
  <div class="container-fluid">
    <div class="row animated fadeInDown">
      <div class="col-md-12 text-center">
        <img class="ceis-logo" src="resource/img/ceis-logo.png" alt="" />
      </div>
    </div>
    <div class="row row-form animated fadeInDown">
      <div class="col-md-4 mx-auto">
        <form  action="" method="post" >
          <?php logd();?>
          <div class="md-form">
             <i class="fas fa-envelope prefix mt-2"></i>
             <input type="email" id="inputValidationEx" name="email" class="form-control validate my-0">
             <label for="inputValidationEx" data-error="wrong" data-success="right">Email Address</label>
             <small id="inputValidationEx" class="text-muted my-0">Use your valid Centro Escolar University email.</small>
           </div>
           <div class="md-form">
              <i class="fas fa-lock prefix mt-1"></i>
              <input type="password" id="inputValidationEx2" name="password" class="form-control validate my-0">
              <label for="inputValidationEx2" data-error="wrong" data-success="right">Password</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input my-0" name="remember" id="defaultUnchecked">
                <label class="custom-control-label" for="defaultUnchecked">Remember Me</label>
            </div>
            <input type =hidden name="token" value="<?php echo Token::generate(); ?>">
            <button type="submit" class="btn btn-success form-control mt-3 mx-0" >login</button>
      </form>


      </div>
    </div>
  </div>
  </body>
  </html>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="vendor/js/jquery.min.js"></script>
  <script src="vendor/js/popper.min.js"></script>
  <script src="vendor/js/mdb.min.js"></script>
  <script src="vendor/js/bootstrap.min.js"></script>
  <script src="vendor/js/main.js"></script>
