<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/hris/resource/php/class/core/init.php';
$user = new user();
isLogin();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CEIS | Create Account</title>
  <link rel="icon" href="resource/img/ceis-logo">
  <link rel="stylesheet" href="vendor/css/bootstrap.css">
  <link rel="stylesheet" href="vendor/css/mdb.min.css">
  <link href="vendor/fonts/css/fontawesome.min.css" rel="stylesheet">
  <link href="vendor/fonts/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="resource/scss/animate.min.css">
  <link rel="stylesheet" href="resource/scss/homepage.css">
  </head>
  <body>
    <div class="sidenav text-center">
      <div class="nav-logo py-1">
      <a class="text-center"><img class="ceis-logo" src="resource/img/ceis-logo.png" alt="" /></a>
      </div>
      <a href="homepage.php" class="sidenav-margin-y mt-2"><i class="fa fa-home sidenav-icon" aria-hidden="true"></i>
      <br>Home</a>
      <a href="inbox.php" class="sidenav-margin-y"><i class="fa fa-inbox sidenav-icon" aria-hidden="true"></i>
      <br>Inbox</a>
      <a href="create-account.php" class="sidenav-margin-y home-active"><i class="fa fa-user-plus sidenav-icon sidenav-icon-home-active" aria-hidden="true"></i>
      <br>Account</a>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
        <div class="col-md-12 homepage-heading">
          <h2 class="">Creating an account</h2>
          <hr class="green-hr">
        </div>
        <?php vald()?>
        <div class="row mx-auto">
        <div class="col-md-12 mt-3">
          <h5>I.</h5>
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
        </div>
        <div class="row mx-auto">
        <div class="col-md-12 mt-4">
          <h5>II.</h5>
        </div>
        <div class="col-md-7 mx-auto">
          <div class="md-form">
             <input class="form-control"  type ="email" name="email" id="email" value ="<?php echo input::get('email');?>"/required>
             <label for="email">Email Address</label>
             <small id="inputValidationEx" class="text-muted my-0">Use valid Centro Escolar University email.</small>
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
        </div>
        <div class="col-md-12 text-center mb-5">
          <div class="md-form">
            <input type="hidden" name ="Token" value="<?php echo Token::generate();?>" />
             <input type="submit" value="Register" class="btn btn-success" />
          </div>
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
        <div class="col-md-1 mx-0 text-center user">
          <span onclick="openNav()"><a class="text-center"><i class="fa fa-user-circle user-icon my-3" aria-hidden="true"></i></a></span>
        </div>
      </div>
    </div>

    <div id="accountNavigation" class="accountNav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 mt-3 text-center">
            <img class="user-icon" class="ceis-logo" src="resource/img/user-icon.jpg" alt=""/>
          </div>
          <div class="col-md-12 mt-2 text-center">
            <h6>Lopez, Ralph Edwin E.</h6>
            <p class="text-muted">Admin</p>
            <a href="logout.php" class="btn btn-success py-2 px-3">Logout</a>
          </div>
          <div class="col-md-12">
            <hr class="my-3">
          </div>
          <div class="col-md-12 text-center">
            <a class="profile-link" href="profile.php">Profile</a>
          </div>
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
  <script type="text/javascript">
    function openNav() {
    document.getElementById("accountNavigation").style.width = "300px";
    }

    function closeNav() {
    document.getElementById("accountNavigation").style.width = "0";
    }
  </script>
