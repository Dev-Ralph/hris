<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CEIS | Profile</title>
  <link rel="icon" href="resource/img/ceis-logo">
  <link rel="stylesheet" href="vendor/css/bootstrap.css">
  <link rel="stylesheet" href="vendor/css/mdb.min.css">
  <link href="vendor/fonts/css/fontawesome.min.css" rel="stylesheet">
  <link href="vendor/fonts/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="resource/scss/animate.min.css">
  <link rel="stylesheet" href="resource/scss/homepage.css">
  <link rel="stylesheet" href="resource/scss/profile.css">
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
      <a href="account.php" class="sidenav-margin-y"><i class="fa fa-user-plus sidenav-icon" aria-hidden="true"></i>
      <br>Account</a>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
        <div class="col-md-12 homepage-heading">
          <h2 class="">Editing Profile</h2>
          <hr class="green-hr">
        </div>
        </div>
        <div class="col-md-1 mx-0 text-center user">
          <span onclick="openNav()"><a class="text-center"><i class="fa fa-user-circle user-icon my-3" aria-hidden="true"></i></a></span>
        </div>
        <div class="col-md-10 mx-auto">
          <div class="col-md-12 text-right">
            <a href="profile.php" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              Cancel Editing</a>
          </div>
        <div class="row mx-auto">
        <div class="col-md-2 tex-center">
          <img class="user-profile-image" src="resource/img/user-icon.jpg" alt=""/>
          <button type="button" class="btn btn-success" name=""  data-toggle="modal" data-target="#uploadPicture">Upload</button>

        </div>
        <div class="col-md-10 mt-4">
          <div class="row">
          <div class="col-md-4">
            <div class="md-form m-0">
              <h6 class="mb-0">Last Name</h6>
               <input class="form-control"  type = "text" name="lastname" id="lastname" value ="" autocomplete="off" required />
             </div>
          </div>
          <div class="col-md-4">
            <div class="md-form m-0">
              <h6 class="mb-0">First Name</h6>
               <input class="form-control"  type = "text" name="firstname" id="firstname" value ="" autocomplete="off" required />
             </div>
          </div>
          <div class="col-md-4">
            <div class="md-form m-0">
               <h6 class="mb-0">Middle Name</h6>
               <input class="form-control"  type = "text" name="middlename" id="middlename" value ="" autocomplete="off" required />
             </div>
          </div>
        </div>
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-10 px-0">
        <div class="col-md-6">
          <div class="md-form m-0">
            <h6 class="mb-0">Email</h6>
            <p class="mt-2">test@gmail.com</p>
           </div>
        </div>
        <div class="col-md-12 mt-5 px-0">
          <button type="button" class="btn btn-success" name="">Save Changes</button>
        </div>
        </div>

        <!-- Upload Picture -->
        <div class="modal fade" id="uploadPicture" tabindex="-1" role="dialog" aria-labelledby="uploadPictureTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title modal-heading" id="uploadPictureTitle">Upload Picture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01">
                  <label class="custom-file-label" for="inputGroupFile01">Select Image</label>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Upload</button>
              </div>
            </div>
          </div>
        </div>

        </div>
       </div>
      </div>
    </div>

    <div id="accountNavigation" class="accountNav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 mt-3 text-center">
            <img class="user-icon" src="resource/img/user-icon.jpg" alt=""/>
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
