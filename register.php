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
     <div class="container-fluid">
       <div class="row animated fadeInDown">
         <div class="col-md-12 text-center">
           <img class="ceis-logo" src="resource/img/ceis-logo.png" alt="" />
         </div>
       </div>
       <div class="row row-form animated fadeInDown">
         <div class="col-md-4 mx-auto">
           <?php vald()?>
         <form action="" method="post">
             <table class="table ">
                 <tr>
                     <td>
                         <div class="row justify-content-center">
                             <div class="form-group col-4">
                              <label for = "username" class=""> Username:</label>
                              <input class="form-control"  type = "text" name="username" id="username" value ="<?php echo input::get('username');?>" autocomplete="off" required />
                             </div>
                             <div class="form-group col-4">
                              <label for = "password"> Password:</label>
                              <input type="password" class="form-control" name="password" id="password" value ="<?php echo input::get('password');?>" autocomplete="off"required/>
                             </div>
                             <div class="form-group col-4">
                              <label for = "ConfirmPassword"> Confirm Password:</label>
                              <input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword" value ="<?php echo input::get('ConfirmPassword');?>" autocomplete="off"required/>
                             </div>
                          </div>
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <div class="row justify-content-center">
                             <div class="form-group col-4">
                              <label for = "fullName" class=""> Full Name</label>
                              <input class="form-control"  type = "text" name="fullName" id="fullName" value ="<?php echo input::get('fullName');?>"/required>
                             </div>
                             <div class="form-group col-4">
                              <label for = "email" class=""> Email Address</label>
                              <input class="form-control"  type = "text" name="email" id="email" value ="<?php echo input::get('email');?>"/required>
                             </div>
                          </div>
                     </td>
                 </tr>
                 <tr>
                     <td>
                         <div class="row justify-content-center">
                             <div class="form-group col-7">
                                 <label  >&nbsp;</label>
                             <input type="hidden" name ="Token" value="<?php echo Token::generate();?>" />
                              <input type="submit" value="Register" class=" form-control btn btn-primary" />
                             </div>
                         </div>
                     </td>
                 </tr>
             </table>
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
