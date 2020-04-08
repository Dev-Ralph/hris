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
     <div class="container">
       <div class="row animated fadeInDown">
         <div class="col-md-12 text-center">
           <img class="ceis-logo" src="resource/img/ceis-logo.png" alt="" />
         </div>
       </div>
       <form action="" method="post">
       <div class="row row-form animated fadeInDown">
           <?php vald()?>
           <div class="col-md-12">
             <h5 class="text-center mt-4">Create Account</h5>
           </div>
           <div class="col-md-12">
             <p>I.</p>
           </div>
           <div class="col-md-4">
             <div class="md-form">
                <input class="form-control"  type = "text" name="lastname" id="lastname" value ="<?php echo input::get('lastname');?>" autocomplete="off" required />
                <label for="lastname">Last Name</label>
              </div>
           </div>
           <div class="col-md-4">
             <div class="md-form">
                <input class="form-control"  type = "text" name="firstname" id="firstname" value ="<?php echo input::get('firstname');?>" autocomplete="off" required />
                <label for="firstname">First Name</label>
              </div>
           </div>
           <div class="col-md-4">
             <div class="md-form">
                <input class="form-control"  type = "text" name="middlename" id="middlename" value ="<?php echo input::get('middlename');?>" autocomplete="off" required />
                <label for="middlename">Middle Name</label>
              </div>
           </div>
           <div class="col-md-12 mt-4">
             <p>II.</p>
           </div>
           <div class="col-md-7 mx-auto">
             <div class="md-form">
                <input class="form-control"  type ="email" name="email" id="email" value ="<?php echo input::get('email');?>"/required>
                <label for="email">Email Address</label>
                <small id="inputValidationEx" class="text-muted my-0">Use your valid Centro Escolar University email and register here.</small>
              </div>
           </div>
           <div class="col-md-6">
             <div class="md-form">
                <input type="password" class="form-control" name="password" id="password" value ="<?php echo input::get('password');?>" autocomplete="off"required/>
                <label for="password">Password</label>
              </div>
           </div>
           <div class="col-md-6">
             <div class="md-form">
                <input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword" value ="<?php echo input::get('ConfirmPassword');?>" autocomplete="off"required/>
                <label for="ConfirmPassword">Confirm Password</label>
              </div>
           </div>
           <div class="col-md-12 text-center mb-5">
             <div class="md-form">
               <input type="hidden" name ="Token" value="<?php echo Token::generate();?>" />
                <input type="submit" value="Register" class="btn btn-success" />
             </div>
             <a href="index.php">Go to Login</a>
           </div>

             <!-- <table class="table ">
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
             </table> -->
      </div>
    </form>
  </div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="vendor/js/jquery.min.js"></script>
<script src="vendor/js/popper.min.js"></script>
<script src="vendor/js/mdb.min.js"></script>
<script src="vendor/js/bootstrap.min.js"></script>
<script src="vendor/js/main.js"></script>
