<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Application for Employment</title>
  <link rel="icon" href="resource/img/ceis-logo">
  <link rel="stylesheet" href="vendor/css/bootstrap.css">
  <link rel="stylesheet" href="vendor/css/mdb.min.css">
  <link href="vendor/fonts/css/fontawesome.min.css" rel="stylesheet">
  <link href="vendor/fonts/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="resource/scss/animate.min.css">
  <link rel="stylesheet" href="resource/scss/application-for-employment.css">
  </head>
  <body>
    <!-- <nav class="navbar navbar-dark bg-white shadow-sm slide-in-left">
    </nav> -->
    <form class="" action="test.php" method="post">
      <div id="demo" class="carousel slide"  data-interval="false" data-ride="carousel">
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active" >
            <div class="pres">
               <div class='container'>
                 <div class='row'>
                    <div class="col-md-12 text-center header">
                      <div class="header-text-width d-inline">
                      <img class="ceis-logo" src="resource/img/ceis-logo.png" alt="" />
                      <h4 class="ceis-text d-inline">CENTRO ESCOLAR INTEGRATED SCHOOL</h4>
                      </div>
                    </div>
                    <div class="col-md-12 text-center sub-header">
                      <h5 class="sub-header-text">Application for Employment</h5>
                    </div>
                       <!-- content1 start -->
                       <div class='col-md-12 text-center mt-2'>
                         <div class="custom-control custom-radio custom-control-inline mx-5">
                              <input type="radio" class="custom-control-input" id="op1" name="op1" value="Academic">
                              <label class="custom-control-label" for="op1">Academic</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline mx-5">
                              <input type="radio" class="custom-control-input" id="op2" name="op2" value="Non-Academic">
                              <label class="custom-control-label" for="op2">Non-Academic</label>
                            </div>
                       </div>
                         <div class="col-md-4 textfield-1">
                           <div class="md-form">
                              <input type="text" class="form-control" id="posapp" name="posapp">
                              <label for="posapp">Position Applied For</label>
                            </div>
                         </div>
                         <div class="col-md-4 textfield-1">
                           <div class="md-form">
                              <input type="text" class="form-control" id="offdep" name="offdep">
                              <label for="offdep">Office/Department</label>
                            </div>
                         </div>
                         <div class="col-md-4 textfield-1">
                           <div class="md-form">
                              <input type="text" class="form-control" id="campus" name="campus">
                              <label for="campus">Campus</label>
                            </div>
                         </div>
                       <!-- content1 end -->
                     <div class="col-md-12">
                       <a  href="#demo" data-slide="next" class="btn btn-success float-right px-5" > Next</a>
                     </div>
               </div>
             </div>
            </div>
          </div>
          <!--  -->
          <div class="carousel-item" >
            <div class="pres">
               <div class='container '>
                 <div class='row'>
                       <!-- content 2 start -->
                       <div class="col-md-8 mt-5">
                         <h6 class="d-inline">Date:</h6>
                         <h6 class="d-inline">(Current Date)</h6>
                       </div>
                       <div class="col-md-4 mt-5 float-right">
                         <div class="input-group">
                             <div class="input-group-prepend">
                               <span class="input-group-text">Upload</span>
                             </div>
                             <div class="custom-file">
                               <input type="file" class="custom-file-input" id="inputGroupFile01">
                               <label class="custom-file-label" for="inputGroupFile01">Select Image</label>
                             </div>
                           </div>
                       </div>
                       <div class="col-md-12 mt-3">
                         <h5>A. Personal and Family Data</h5>
                       </div>
                       <div class='col-md-2'>
                         <div class="md-form">
                            <input type="text" class="form-control" id="sName" name="sName">
                            <label for="sName">Surname</label>
                          </div>
                       </div>
                       <div class='col-md-2'>
                         <div class="md-form">
                            <input type="text" class="form-control" id="fName" name="fName">
                            <label for="fName">First Name</label>
                          </div>
                       </div>
                       <div class='col-md-2'>
                         <div class="md-form">
                            <input type="text" class="form-control" id="mName" name="mName">
                            <label for="mName">Middle Name</label>
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form">
                         <select class="browser-default custom-select">
                            <option value="" disabled selected>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form">
                            <input type="number" class="form-control" id="height" name="height">
                            <label for="height">Height</label>
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form">
                            <input type="number" class="form-control" id="weight" name="weight">
                            <label for="weight">Weight</label>
                          </div>
                       </div>
                       <div class="col-md-4">
                         <div class="md-form">
                            <input type="date" id="bDate" class="form-control datepicker" name="bDate">
                            <label for="bDate">Date of Birth</label>
                          </div>
                       </div>
                       <div class="col-md-4">
                         <div class="md-form">
                            <input type="text" class="form-control" id="bplace" name="bplace">
                            <label for="bplace">Place of Birth</label>
                          </div>
                       </div>
                       <div class="col-md-4">
                         <div class="md-form">
                            <input type="text" class="form-control" id="religion" name="religion">
                            <label for="religion">Religion</label>
                          </div>
                       </div>
                       <div class="col-md-12">
                         <div class="md-form">
                            <input type="text" class="form-control" id="paddress" name="paddress">
                            <label for="paddress">Primary Address</label>
                          </div>
                       </div>
                       <div class="col-md-4">
                         <div class="md-form">
                            <input type="text" class="form-control" id="hno" name="hno">
                            <label for="hno">Home Telephone No.</label>
                          </div>
                       </div>
                       <div class="col-md-4">
                         <div class="md-form">
                            <input type="text" class="form-control" id="cpno" name="cpno">
                            <label for="cpno">Cell Phone No.</label>
                          </div>
                       </div>
                       <div class="col-md-4">
                         <div class="md-form">
                            <input type="email" id="inputValidationEx" class="form-control validate">
                            <label for="inputValidationEx" data-error="wrong" data-success="right">Email Address</label>
                          </div>
                       </div>
                       <div class="col-md-12">
                         <div class="md-form">
                            <input type="text" class="form-control" id="saddress" name="saddress">
                            <label for="saddress">Provincial/Secondary Address</label>
                          </div>
                       </div>
                       <!-- content 2 end -->
                     <div class="col-md-6 mb-4">
                       <a  href="#demo" data-slide="prev" class="btn btn-success float-left px-5" > Back</a>
                     </div>
                     <div class="col-md-6 mb-4">
                       <a  href="#demo" data-slide="next" class="btn btn-success float-right px-5" > Next</a>
                     </div>
               </div>
             </div>
            </div>
          </div>
          <!--  -->
          <div class="carousel-item">
            <div class="pres">
               <div class='container'>
                 <div class='row'>
                       <!-- content 3 start -->
                       <div class="col-md-12 mt-5">
                         <label class="custom-control-inline">Check that applicable:</label>
                         <div class="custom-control custom-checkbox custom-control-inline mx-5">
                            <input type="checkbox" class="custom-control-input" id="boarding" name="boarding">
                            <label class="custom-control-label" for="boarding">Boarding</label>
                          </div>
                          <div class="custom-control custom-checkbox custom-control-inline mx-5">
                            <input type="checkbox" class="custom-control-input" id="lwf" name="lwf">
                            <label class="custom-control-label" for="lwf">Living with Family</label>
                          </div>
                          <div class="custom-control custom-checkbox custom-control-inline mx-5">
                            <input type="checkbox" class="custom-control-input" id="oh" name="oh">
                            <label class="custom-control-label" for="oh">Own Home</label>
                          </div>
                          <div class="custom-control custom-checkbox custom-control-inline mx-5">
                            <input type="checkbox" class="custom-control-input" id="renting" name="renting">
                            <label class="custom-control-label" for="renting">Renting</label>
                          </div>
                       </div>
                       <div class="col-md-12 mt-3">
                         <label class="custom-control-inline">Civil Status:</label>
                         <div class="custom-control custom-checkbox custom-control-inline mx-5">
                            <input type="checkbox" class="custom-control-input" id="single" name="single">
                            <label class="custom-control-label" for="single">Single</label>
                          </div>
                          <div class="custom-control custom-checkbox custom-control-inline mx-5">
                             <input type="checkbox" class="custom-control-input" id="married" name="married">
                             <label class="custom-control-label" for="married">Married: When </label>
                             <!-- <div class="md-form">
                                <input type="text" class="form-control m-0" id="married-when" name="married-when">
                              </div> -->
                           </div>
                           <div class="custom-control custom-checkbox custom-control-inline mx-5">
                              <input type="checkbox" class="custom-control-input" id="ws" name="ws">
                              <label class="custom-control-label" for="ws">Widowed/Separated: When </label>
                              <!-- <div class="md-form">
                                 <input type="text" class="form-control m-0" id="ws-when" name="ws-when">
                               </div> -->
                            </div>
                       </div>
                       <div class="col-md-6">
                         <div class="md-form">
                            <input type="text" class="form-control" id="taxNumber" name="taxNumber">
                            <label for="taxNumber">Tax Identification Number</label>
                          </div>
                       </div>
                       <div class="col-md-6">
                         <div class="md-form">
                            <input type="text" class="form-control" id="sss" name="sss">
                            <label for="sss">SSS Number</label>
                          </div>
                       </div>
                       <div class="col-md-6">
                         <div class="md-form">
                            <input type="text" class="form-control" id="philhealth" name="philhealth">
                            <label for="philhealth">Philhealth Number</label>
                          </div>
                       </div>
                       <div class="col-md-6">
                         <div class="md-form">
                            <input type="text" class="form-control" id="pag-ibig" name="pag-ibig">
                            <label for="pag-ibig">Pag-ibig Number</label>
                          </div>
                       </div>
                       <div class="col-md-12 mt-3">
                         <p>Please give information required below:</p>
                       </div>
                       <div class="col-md-1">

                       </div>
                       <div class="col-md-3">
                         <h6 class="text-center">Name</h6>
                       </div>
                       <div class="col-md-1">
                         <h6 class="text-center">Age</h6>
                       </div>
                       <div class="col-md-4">
                         <h6 class="text-center">Address</h6>
                       </div>
                       <div class="col-md-3">
                         <h6 class="text-center">If employed or studying, where?</h6>
                       </div>
                       <div class="col-md-1">
                         <p class="text-center mt-2">Father</p>
                       </div>
                       <div class="col-md-3">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="name" name="name">
                          </div>
                       </div>
                       <div class="col-md-1">
                         <div class="md-form my-0">
                            <input type="number" class="form-control text-center my-0" id="age" name="age">
                          </div>
                       </div>
                       <div class="col-md-4">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="address" name="address">
                          </div>
                       </div>
                       <div class="col-md-3">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="eos" name="eos">
                          </div>
                       </div>
                       <div class="col-md-1">
                         <p class="text-center mt-2">Mother</p>
                       </div>
                       <div class="col-md-3">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="name" name="name">
                          </div>
                       </div>
                       <div class="col-md-1">
                         <div class="md-form my-0">
                            <input type="number" class="form-control text-center my-0" id="age" name="age">
                          </div>
                       </div>
                       <div class="col-md-4">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="address" name="address">
                          </div>
                       </div>
                       <div class="col-md-3">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="eos" name="eos">
                          </div>
                       </div>
                       <div class="col-md-1">
                         <p class="text-center mt-2">Spouse</p>
                       </div>
                       <div class="col-md-3">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="name" name="name">
                          </div>
                       </div>
                       <div class="col-md-1">
                         <div class="md-form my-0">
                            <input type="number" class="form-control text-center my-0" id="age" name="age">
                          </div>
                       </div>
                       <div class="col-md-4">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="address" name="address">
                          </div>
                       </div>
                       <div class="col-md-3">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="eos" name="eos">
                          </div>
                       </div>
                       <div class="col-md-1">
                         <p class="text-center mt-2">Children</p>
                       </div>
                       <div class="col-md-3">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="name" name="name">
                          </div>
                       </div>
                       <div class="col-md-1">
                         <div class="md-form my-0">
                            <input type="number" class="form-control text-center my-0" id="age" name="age">
                          </div>
                       </div>
                       <div class="col-md-4">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="address" name="address">
                          </div>
                       </div>
                       <div class="col-md-3">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="eos" name="eos">
                          </div>
                       </div>
                       <div class="col-md-1">
                       </div>
                       <div class="col-md-3">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="name" name="name">
                          </div>
                       </div>
                       <div class="col-md-1">
                         <div class="md-form my-0">
                            <input type="number" class="form-control text-center my-0" id="age" name="age">
                          </div>
                       </div>
                       <div class="col-md-4">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="address" name="address">
                          </div>
                       </div>
                       <div class="col-md-3">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="eos" name="eos">
                          </div>
                       </div>
                       <div class="col-md-1">
                       </div>
                       <div class="col-md-3">
                         <div class="md-form my-0">
                            <input type="text" class="form-control my-0" id="name" name="name">
                          </div>
                       </div>
                       <div class="col-md-1">
                         <div class="md-form my-0">
                            <input type="number" class="form-control text-center my-0" id="age" name="age">
                          </div>
                       </div>
                       <div class="col-md-4">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="address" name="address">
                          </div>
                       </div>
                       <div class="col-md-3">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="eos" name="eos">
                          </div>
                       </div>
                       <!-- <div class="col-md-12">
                         <p>Are you related by a consaguinity of affinity to any officer or employee of the School?</p>
                         <input type="radio" id="Yes" name="consaguinity" value="Yes" onchange='checkRelatives();'>Yes
                         <input type="radio" id="No" name="consaguinity" value="No" onchange='checkRelatives();'>No
                          <div id="divbox" style="display:none;">
                            <table class="table table-bordered table-sm table-hover table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl mb-2" style="width:100%">
                              <thead class="thead">
                                  <th class="text-center align-middle">Name of Relative/s</td>
                                  <th class="text-center align-middle">Relationship</td>
                                  <th class="text-center align-middle">Position</td>
                                  <th class="text-center align-middle">Department/Office & Campus</td>
                            </thead>
                            <tr>
                              <td><input type="text" name="" placeholder=""></td>
                              <td><input  type="text" name="" placeholder=""></td>
                              <td><input type="text" name="" placeholder=""></td>
                              <td><input type="text" name="" placeholder=""></td>
                            </tr>
                            <tr>
                              <td><input type="text" name="" placeholder=""></td>
                              <td><input type="text" name="" placeholder=""></td>
                              <td><input type="text" name="" placeholder=""></td>
                              <td><input type="text" name="" placeholder=""></td>
                            </tr>
                            <tr>
                              <td><input type="text" name="" placeholder=""></td>
                              <td><input type="text" name="" placeholder=""></td>
                              <td><input type="text" name="" placeholder=""></td>
                              <td><input type="text" name="" placeholder=""></td>
                            </tr>
                            <tr>
                              <td><input type="text" name="" placeholder=""></td>
                              <td><input type="text" name="" placeholder=""></td>
                              <td><input type="text" name="" placeholder=""></td>
                              <td><input type="text" name="" placeholder=""></td>
                            </tr>

                            </table>
                          </div>
                       </div> -->
                       <!-- content 3 end -->
                    <div class="col-md-6 mt-4 mb-4">
                      <a  href="#demo" data-slide="prev" class="btn btn-success float-left px-5" > Back</a>
                    </div>
                    <div class="col-md-6 mt-4 mb-4">
                     <a  href="#demo" data-slide="next" class="btn btn-success float-right px-5" > Next</a>
                    </div>
               </div>
             </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="pres">
               <div class='container'>
                 <div class="row">
                 <div class="col-md-12 mt-5 mb-3">
                   <label>Are you related by a consaguinity of affinity to any officer or employee of the School?</label>
                   <div class="custom-control custom-radio custom-control-inline mx-5">
                        <input type="radio" class="custom-control-input" id="yes" name="yes" value="Yes" onchange='checkRelatives()' checked>
                        <label class="custom-control-label" for="yes">Yes</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline mx-5">
                        <input type="radio" class="custom-control-input" id="no" name="no" value="No" onchange='checkRelatives();'>
                        <label class="custom-control-label" for="no">No</label>
                      </div>
                   <!-- <input type="radio" id="Yes" name="consaguinity" value="Yes" onchange='checkRelatives();'>Yes
                   <input type="radio" id="No" name="consaguinity" value="No" onchange='checkRelatives();'>No -->
                  </div>
                   <!-- <div id="divbox" class="divbox"> -->
                     <div class="col-md-3">
                       <h6 class="text-center">Name of Relative/s</h6>
                     </div>
                     <div class="col-md-2">
                       <h6 class="text-center">Relationship</h6>
                     </div>
                     <div class="col-md-3">
                       <h6 class="text-center">Position</h6>
                     </div>
                     <div class="col-md-4">
                       <h6 class="text-center">Department/Offices & Campus</h6>
                     </div>
                     <div class="col-md-3">
                       <div class="md-form my-0">
                          <input type="text" class="form-control text-center my-0" id="name" name="name">
                        </div>
                     </div>
                     <div class="col-md-2">
                       <div class="md-form my-0">
                          <input type="text" class="form-control text-center my-0" id="relationship" name="relationship">
                        </div>
                     </div>
                     <div class="col-md-3">
                       <div class="md-form my-0">
                          <input type="text" class="form-control text-center my-0" id="position" name="position">
                        </div>
                     </div>
                     <div class="col-md-4">
                       <div class="md-form my-0">
                          <input type="text" class="form-control text-center my-0" id="doc" name="doc">
                        </div>
                     </div>
                     <div class="col-md-3">
                       <div class="md-form my-0">
                          <input type="text" class="form-control text-center my-0" id="name" name="name">
                        </div>
                     </div>
                     <div class="col-md-2">
                       <div class="md-form my-0">
                          <input type="text" class="form-control text-center my-0" id="relationship" name="relationship">
                        </div>
                     </div>
                     <div class="col-md-3">
                       <div class="md-form my-0">
                          <input type="text" class="form-control text-center my-0" id="position" name="position">
                        </div>
                     </div>
                     <div class="col-md-4">
                       <div class="md-form my-0">
                          <input type="text" class="form-control text-center my-0" id="doc" name="doc">
                        </div>
                     </div>
                     <div class="col-md-3">
                       <div class="md-form my-0">
                          <input type="text" class="form-control text-center my-0" id="name" name="name">
                        </div>
                     </div>
                     <div class="col-md-2">
                       <div class="md-form my-0">
                          <input type="text" class="form-control text-center my-0" id="relationship" name="relationship">
                        </div>
                     </div>
                     <div class="col-md-3">
                       <div class="md-form my-0">
                          <input type="text" class="form-control text-center my-0" id="position" name="position">
                        </div>
                     </div>
                     <div class="col-md-4">
                       <div class="md-form my-0">
                          <input type="text" class="form-control text-center my-0" id="doc" name="doc">
                        </div>
                     </div>
                     <div class="col-md-3">
                       <div class="md-form my-0">
                          <input type="text" class="form-control text-center my-0" id="name" name="name">
                        </div>
                     </div>
                     <div class="col-md-2">
                       <div class="md-form my-0">
                          <input type="text" class="form-control text-center my-0" id="relationship" name="relationship">
                        </div>
                     </div>
                     <div class="col-md-3">
                       <div class="md-form my-0">
                          <input type="text" class="form-control text-center my-0" id="position" name="position">
                        </div>
                     </div>
                     <div class="col-md-4">
                       <div class="md-form my-0">
                          <input type="text" class="form-control text-center my-0" id="doc" name="doc">
                        </div>
                     </div>
                     <div class="col-md-12 mt-5">
                       <label class="custom-control-inline">Have you ever had any illness, ailment or injury?</label>
                       <div class="custom-control custom-radio custom-control-inline mx-5">
                            <input type="radio" class="custom-control-input" id="yes" name="yes" value="Yes">
                            <label class="custom-control-label" for="yes">Yes</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline mx-5">
                            <input type="radio" class="custom-control-input" id="no" name="no" value="No">
                            <label class="custom-control-label" for="no">No</label>
                          </div>
                     </div>
                     <div class="col-md-12">
                       <label class="custom-control-inline">Have you consulted any physician during the last five years?</label>
                       <div class="custom-control custom-radio custom-control-inline mx-5">
                            <input type="radio" class="custom-control-input" id="yes" name="yes" value="Yes">
                            <label class="custom-control-label" for="yes">Yes</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline mx-5">
                            <input type="radio" class="custom-control-input" id="no" name="no" value="No">
                            <label class="custom-control-label" for="no">No</label>
                          </div>
                     </div>
                     <div class="col-md-12">
                       <div class="md-form mt-1">
                          <input type="text" class="form-control" id="a-9" name="">
                          <label for="a-9">If so give date, reason, nature and duration of treatment, and result</label>
                        </div>
                     </div>
                     <div class="col-md-12 mt-3">
                       <label class="custom-control-inline">Have you ever been convicted or charged with a violation of any law or ordinance?</label>
                       <div class="custom-control custom-radio custom-control-inline mx-5">
                            <input type="radio" class="custom-control-input" id="yes" name="yes" value="Yes">
                            <label class="custom-control-label" for="yes">Yes</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline mx-5">
                            <input type="radio" class="custom-control-input" id="no" name="no" value="No">
                            <label class="custom-control-label" for="no">No</label>
                          </div>
                     </div>
                     <div class="col-md-3">
                       <div class="md-form mt-3">
                          <input type="date" id="a-10a" class="form-control datepicker" name="">
                          <label for="a-10a">If so, when?</label>
                        </div>
                     </div>
                     <div class="col-md-9">
                       <div class="md-form mt-3">
                          <input type="text" class="form-control" id="a-10b" name="">
                          <label for="a-10b">Explain</label>
                        </div>
                     </div>
                    <!-- </div> -->
                    <div class="col-md-6 mb-4">
                      <a  href="#demo" data-slide="prev" class="btn btn-success float-left px-5" > Back</a>
                    </div>
                    <div class="col-md-6 mb-4">
                      <a  href="#demo" data-slide="next" class="btn btn-success float-right px-5" > Next</a>
                    </div>
                  </div>
               </div>
             </div>
            </div>
          <div class="carousel-item">
            <div class="pres">
               <div class='container'>
                 <div class='row'>
                         <div class="col-md-12 mt-5 mb-3">
                           <h5>B. Education</h5>
                         </div>
                       <div class="col-md-2">

                       </div>
                       <div class="col-md-2">
                         <h6 class="text-center">Degree Obtained</h6>
                       </div>
                       <div class="col-md-2">
                         <h6 class="text-center">Name of School</h6>
                       </div>
                       <div class="col-md-2">
                         <h6 class="text-center">Address of School</h6>
                       </div>
                       <div class="col-md-2">
                         <h6 class="text-center">Inclusive Dates</h6>
                       </div>
                       <div class="col-md-2">
                         <h6 class="text-center">Honor Received</h6>
                       </div>
                       <div class="col-md-2">
                         <p class=" text-center mt-2">High School</p>
                       </div>
                       <div class="">

                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <p class=" text-center mt-2">Vocational</p>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <p class=" text-center mt-2">College</p>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <p class=" text-center mt-2">Post Graduate</p>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-3 mt-5">
                         <h6 class="text-center">Government/License Exam</h6>
                       </div>
                       <div class="col-md-3 mt-5">
                         <h6 class="text-center">Agency</h6>
                       </div>
                       <div class="col-md-2 mt-5">
                         <h6 class="text-center">Rating</h6>
                       </div>
                       <div class="col-md-2 mt-5">
                         <h6 class="text-center">Date Passed</h6>
                       </div>
                       <div class="col-md-2 mt-5">
                         <h6 class="text-center">No. of Times Taken</h6>
                       </div>
                       <div class="col-md-3">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-3">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="number" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form mt-0">
                            <input type="date" id="" class="form-control text-center datepicker" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="number" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-3">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-3">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="number" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form mt-0">
                            <input type="date" id="" class="form-control text-center datepicker" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="number" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-3">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-3">
                         <div class="md-form my-0">
                            <input type="text" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="number" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form mt-0">
                            <input type="date" id="" class="form-control text-center datepicker" name="">
                          </div>
                       </div>
                       <div class="col-md-2">
                         <div class="md-form my-0">
                            <input type="number" class="form-control text-center my-0" id="" name="">
                          </div>
                       </div>
                       <div class="col-md-12">
                         <div class="md-form">
                            <input type="text" class="form-control" id="b-13" name="">
                            <label for="b-13">Other special qualifications? (books published, articles written, awards received, etc.)</label>
                          </div>
                       </div>
                       <div class="col-md-12">
                         <div class="md-form">
                            <input type="text" class="form-control" id="b-14" name="">
                            <label for="b-14">Special courses, seminars, and/or in-service training attended</label>
                          </div>
                       </div>
                       <div class="col-md-12">
                         <div class="md-form">
                            <input type="text" class="form-control" id="b-15" name="">
                            <label for="b-15">What are your special skills?</label>
                          </div>
                       </div>
                       <div class="col-md-12">
                         <div class="md-form">
                            <input type="text" class="form-control" id="b-16" name="">
                            <label for="b-16">Languages you speak or understand other than English</label>
                          </div>
                       </div>
                       <div class="col-md-12">
                         <div class="md-form">
                            <input type="text" class="form-control" id="b-17" name="">
                            <label for="b-17">List names of Organizations, club or societies of which you are active member in good standing</label>
                          </div>
                       </div>
                       <div class="col-md-6 mb-4">
                         <a  href="#demo" data-slide="prev" class="btn btn-success float-left px-5" > Back</a>
                       </div>
                       <div class="col-md-6 mb-4">
                         <a  href="#demo" data-slide="next" class="btn btn-success float-right px-5" > Next</a>
                       </div>
               </div>
             </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="pres">
               <div class='container'>
                 <div class='row'>
                   <div class="col-md-12 mt-5 mb-3">
                     <h5>C. Employment History</h5>
                   </div>
                   <div class="col-md-12">
                     <p>List below all employment held for the last five (5) years. Start with the present or most recent employer.</p>
                   </div>
                   <div class="col-md-3">

                   </div>
                   <div class="col-md-3">
                     <h6 class="text-center">Employer (1)</h6>
                   </div>
                   <div class="col-md-3">
                     <h6 class="text-center">Employer (2)</h6>
                   </div>
                   <div class="col-md-3">
                     <h6 class="text-center">Employer (3)</h6>
                   </div>
                   <div class="col-md-3">
                     <p class="text-justify ml-5 mt-2">Dates</p>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <p class="text-justify ml-5 mt-2">Position</p>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <p class="text-justify ml-5 mt-2">Office Department</p>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <p class="text-justify ml-5 mt-2">Company Name</p>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <p class="text-justify ml-5 mt-2">Address</p>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <p class="text-justify ml-5 mt-2">Immediate Supervisor's</p>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <p class="text-justify ml-5 mt-2">Name</p>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <p class="text-justify ml-5 mt-2">Position</p>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <p class="text-justify ml-5 mt-2">Salary</p>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <p class="text-justify ml-5 mt-2">Reason for Leaving</p>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-5">
                     <div class="md-form">
                        <input type="text" class="form-control" id="c-19a" name="">
                        <label for="c-19a">Of all jobs you have hold, which one did you like best?</label>
                     </div>
                   </div>
                   <div class="col-md-7">
                     <div class="md-form">
                        <input type="text" class="form-control" id="c-19b" name="">
                        <label for="c-19b">Why?</label>
                     </div>
                   </div>
                   <div class="col-md-4">
                     <div class="md-form">
                        <input type="text" class="form-control" id="c-20a" name="">
                        <label for="c-20a">Do you have a part-time job at present?</label>
                     </div>
                   </div>
                   <div class="col-md-8">
                     <div class="md-form">
                        <input type="text" class="form-control" id="c-20b" name="">
                        <label for="c-20b">Describe</label>
                     </div>
                   </div>
                   <div class="col-md-12">
                     <div class="md-form">
                        <input type="text" class="form-control" id="c-21" name="">
                        <label for="c-21">Subject/s qualified to teach (for academic applicant)</label>
                     </div>
                   </div>
                   <div class="col-md-12">
                     <div class="md-form">
                        <input type="text" class="form-control" id="c-22" name="">
                        <label for="c-22">Kind of work performed (for non-academic applicant)</label>
                     </div>
                   </div>
                       <div class="col-md-6 mb-4">
                         <a  href="#demo" data-slide="prev" class="btn btn-success float-left px-5" > Back</a>
                       </div>
                       <div class="col-md-6 mb-4">
                         <a  href="#demo" data-slide="next" class="btn btn-success float-right px-5" > Next</a>
                       </div>
               </div>
             </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="pres">
               <div class='container'>
                 <div class='row'>
                   <div class="col-md-12 mt-5 mb-3">
                     <h5>D. References</h5>
                   </div>
                   <div class="col-md-12">
                     <p>Give name of three (3) persons to whom you are not related, who are not politicians, and who havenot been your employers. These people should have known you for the past (5) years or more.</p>
                   </div>
                   <div class="col-md-3">
                     <p class="text-justify ml-5 mt-2">Name:</p>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <p class="text-justify ml-5 mt-2">Address:</p>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <p class="text-justify ml-5 mt-2">Contact Number/s:</p>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <p class="text-justify ml-5 mt-2">Occupation:</p>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <p class="text-justify ml-5 mt-2">Years Known:</p>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-3">
                     <div class="md-form my-0">
                        <input type="text" class="form-control text-center my-0" id="" name="">
                      </div>
                   </div>
                   <div class="col-md-12 text-center mt-3">
                     <input type="submit" name="submit" class="btn btn-success float-right px-5"  value="submit">
                   </div>
                       <div class="col-md-6">
                         <a  href="#demo" data-slide="prev" class="btn btn-success float-left px-5" > Back</a>
                       </div>
               </div>
             </div>
            </div>
          </div>
        </div>
      </div>
      </div>
     </form>
  </body>
  </html>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="vendor/js/jquery.min.js"></script>
  <script src="vendor/js/popper.min.js"></script>
  <script src="vendor/js/mdb.min.js"></script>
  <script src="vendor/js/bootstrap.min.js"></script>
  <script src="vendor/js/main.js"></script>
  <script type="text/javascript">
  function CivilStatus(val){
   var element1=document.getElementById('date1');
   if(val=='Married'||val=='Widowed/Separated')
     element1.style.display='block';
   else
     element1.style.display='none';
  }
  function checkRelatives(){
        var Yes = document.getElementById("Yes");
        var No = document.getElementById("No");
          divbox.style.display = Yes.checked ? "block" : "none";
  }
  </script>
  <script type="text/javascript">
        // Material Select Initialization
      $(document).ready(function() {
      $('.mdb-select').materialSelect();
      });
  </script>
