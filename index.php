
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VPS</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
<!--<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=4koXwNnpJ0Q-i2QAP2Zr59eq5fL95IqmZgEKOb1eyLjS4Oqui8PwE4XDMKghRCDJrEAeAch_zu0PPuWEKu2zqF2uyFcNVoLc3aTFQEjbI2HXl_RkwBjxrl7wOTy_Itjq" charset="UTF-8"></script>--></head>
<style type="text/css">
  body {
  background-image: url('dist/img/bg1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
  <h1 style="color:white";> Vehicle Parking Management System </h1>
  <br>
  <br>
<body class="hold-transition login-page" >
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index.php" class="h1"><b>Welcome</b></a>
    </div>
    <div class="card-body">
      <button type="button" class="btn btn-block btn-primary btn-lg" data-toggle="modal" data-target="#login"><i class="fa fa-lock"> LOGIN </i> </button><button type="button" class="btn btn-block btn-info btn-lg" data-toggle="modal" data-target="#register"><i class="fa fa-pen"> REGISTER</i></button>
      <div class="modal fade" id="login">
                        <div class="modal-dialog modal-sm">
                            <form action="admin/ch.php" method='post'>
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">LOGIN FORM</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="card card-primary">
                              <div class="card-body">
                                <div class="row">
                                <div class="col-12">
                                  <div class="input-group mb-3">
                                    <input type="text" name='username' class="form-control" placeholder="Enter Employer ID ..">
                                    <div class="input-group-append">
                                      <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12">
                                  <div class="input-group mb-3">
                                    <input type="password" name='password' class="form-control" placeholder="Enter Password ..">
                                    <div class="input-group-append">
                                      <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </div>
                              </div>
                          </div>
                           <span class="psw"><a href="forgotpsw.php">Forgot password?</a></span>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                              <button type="submit" name='logindb' id='logindb' class="btn btn-primary"><i class="fa fa-unlock"></i>Login</button>
                            </div>
                          </div>
                          </form>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
    <script type="text/javascript">
    function validate()
    {
      if (document.register.fname.value == "") 
      {
        alert("Please Provide your First Name");
        document.register.fname.focus();
        return false;
      }
      if (document.register.lname.value == "") 
      {
        alert("Please Provide your Last Name");
        document.register.lname.focus();
        return false;
      }
      if (document.register.cno.value == "") 
      {
        alert("Please Provide your Contact Number");
        document.register.cno.focus();
        return false;
      }
        if(document.register.caddress.value=="")
      {
        alert("Please Provide your Address");
        document.register.caddress.focus();
        return false;
      } 
      if (document.register.email.value == "") 
      {
        alert("Please Provide your Email Id");
        document.register.email.focus();
        return false;
      }
       if (document.register.dept.value == "") 
      {
        alert("Please Provide your Department");
        document.register.dept.focus();
        return false;
      }

      if (document.register.gen.value == "-1") 
      {
        alert("Please Provide your Gender");
        return false;
      }      

    if (document.register.age.value == "") 
      {
        alert("Please Provide your Age");
        document.register.age.focus();
        return false;
      }

    if (document.register.bdate.value == "") 
      {
        alert("Please Provide your Date Of Birth");
        document.register.bdate.focus();
        return false;
      }

    if (document.register.eid.value == "") 
      {
        alert("Please Provide your Employer ID");
        document.register.eid.focus();
        return false;
      }

    if (document.register.pass.value == "") 
      {
        alert("Please Provide your Employer Password");
        document.register.pass.focus();
        return false;
      }
       if (document.register.cpass.value == "") 
      {
        alert("Please Provide your Confirm Password");
        document.register.cpass.focus();
        return false;
      }
  if(document.register.pass.value!=document.register.cpass.value){
  alert("Password and Confirm Password mustsame");
        document.register.cpass.focus();
        return false;
}
      if(document.register.cno.value!=''){
        var cno=document.register.cno.value;        
        if(cno.length!=10){
        alert("Please Provide 10 Digit Contact No");
 document.register.cno.focus();
      return false;
      }
      }
return true;
    }
     function validateemail()
      {
        var email=document.register.email.value;
        atpos=email.indexOf("@");
        dotpos=email.lastIndexOf(".");
        if(atpos < 1 || (dotpos - atpos < 2 ))
      {
        alert("Please Enter Correct Email Id");
        document.register.email.focus();
        return false;
      }
      return true;
      }
  </script>
                          <div class="modal fade" id="register">
                        <div class="modal-dialog modal-lg">
                       <form name="register" onsubmit="return(validate());" action="admin/ch.php" method="post">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Registration Form</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="card card-primary">
                              <div class="card-body">
                                <div class="row">
                               <div class="col-4">
                                  <div class="input-group mb-3">
                                    <input type="text" class="form-control" name='fname' id='fname' placeholder="- First Name - "  onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                                    <div class="input-group-append">
                                      <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                               <!-- <div class="col-4">
                                  <div class="input-group mb-4">
                                    <input type="text" name='mname' id='mname' class="form-control" placeholder="- Middle Name - "
                                    onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                                    <div class="input-group-append">
                                      <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>-->
                                <div class="col-4">
                                  <div class="input-group mb-3">
                                    <input type="text" class="form-control" name='lname' id='lname' placeholder="- Last Name - " onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                                    <div class="input-group-append">
                                      <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                 <div class="col-4">
                                  <div class="input-group mb-4">
                                    <input type="number" class="form-control" id='cno' name='cno' placeholder="- Contact Number - ">
                                    <div class="input-group-append" >
                                      <div class="input-group-text">
                                        <span class="fas fa-phone"></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                  <div class="col-6">
                                  <div class="input-group mb-4">
                                    <input type="text" class="form-control" id='caddress' name='caddress' placeholder="- Complete Address - ">
                                    <div class="input-group-append">
                                      <div class="input-group-text">
                                        <span class="fas fa-address-card"></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-6">
                                  <div class="input-group mb-3">
                                    <input type="text" id='email' name='email' onchange="validateemail();" class="form-control" placeholder="- Email Address - "/>
                                    <div class="input-group-append">
                                      <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                  
                                 <div class="col-3">
                                  <div class="input-group mb-3">
                                    <input type="text" class="form-control" name='dept' id='dept'  placeholder="- Department - ">
                                    <div class="input-group-append">
                                      <div class="input-group-text">
                                        <span class="fas fa-briefcase"></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                  <div class="col-3">
                                    <select class="form-control" id='gen' name='gen'>
                                                    <option disabled="">- Select  Gender - </option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                      </select>
                                </div>
                                <div class="col-2">
                                  <div class="input-group mb-3">
                                    <input type="number" class="form-control" id='age' name='age' placeholder="-Age- ">
                                    <div class="input-group-append">
                                      <div class="input-group-text">
                                        <span class="fa solid fa-bars-staggered"></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-4" >
                                  <div class="input-group mb-3" style="width: 98%; margin-left: 2%">
                                     <p style="margin-top: -9%;">Birth Date:</p>
                                    <input type="date" class="form-control"  name='bdate' id='bdate' style="margin-left: -32%; ">
                                    <div class="input-group-append">
                                      <div class="input-group-text">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                  <div class="col-4">
                                  <div class="input-group mb-4">
                                    <input type="text" class="form-control" id='eid' name='eid' placeholder="-Enter Employer ID- ">
                                    <div class="input-group-append">
                                      <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                  <div class="col-4">
                                  <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="- Password - " name='pass' id='pass' >
                                    <div class="input-group-append">
                                      <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
<div class="col-4">
                                  <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="-Confirm Password - " name='cpass' id='cpass' >
                                    <div class="input-group-append">
                                      <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                              <button type="submit" name='signdb' id='signdb' class="btn btn-primary"><i class="fa fa-unlock"></i>Register</button>
                            </div>
                          </div>
                          </form>
    </div>
    </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
