<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CEIS | Homepage</title>
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
      <a href="#" class="sidenav-margin-y"><i class="fa fa-paperclip sidenav-icon" aria-hidden="true"></i>
      <br>Transaction</a>
      <a href="#" class="sidenav-margin-y"><i class="fa fa-inbox sidenav-icon" aria-hidden="true"></i>
      <br>Inbox</a>
      <a href="logout.php" class="out "><span class="fas fa-sign-out-alt " href="#"></span>&nbsp;Logout</a>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
        <div class="col-md-12 homepage-heading">
          <h2 class="">Profile</h2>
          <hr class="green-hr">
        </div>
        </div>
        <div class="col-md-1 mx-0 text-center user">
          <span onclick="openNav()"><a class="text-center"><i class="fa fa-user-circle user-icon my-3" aria-hidden="true"></i></a></span>
        </div>
        <div class="col-md-10 mx-auto">
          <div class="col-md-12 text-right">
            <a href="#">Edit Profile</a>
          </div>
        <div class="col-md-12">
          <a href="">Display Info</a>
        </div>
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
            <button type="submit" class="btn btn-success py-2 px-3">Logout</button>
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