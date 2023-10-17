<?php

session_start();
if(isset($_SESSION['username']))
{
		 echo "<script>window.location.assign('index.php');</script>";
}

?>
<html>
<head>
<title>Fabrics |Login</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
:root {
  --active-color: rgba(0,0,0,0.65);
}

.card-signup {
  border: 1px solid #dadce0;
  border-radius: .5rem;
}

.card-signup .card-body {
  padding: 48px 40px 36px;
}

.logo {
  width: 75px;
  height: auto;
  margin-bottom: 1rem;
}

.slogan {
  color: #3c4043;
  font-weight: 500;
  font-size: .875rem;
}

.btn[class*=btn-outline-] {
  border-width: 1px !important;
  box-shadow: none;
  padding-top: .525rem;
  padding-right: 1.4375rem;
  padding-bottom: .525rem;
  padding-left: 1.4375rem;
  font-weight: 500;
  font-size: .785rem;
  border-radius: .25rem;
}

.btn.btn-outline-primary {
 border-color: #dadce0 !important; 
}

.card-signup .btn.btn-outline-primary:hover {
  background-color: #f6f9fe !important;
  border-color: #d2e3fc !important;
  box-shadow: none !important;
}

.card-signup .btn.btn-outline-primary:focus,
.card-signup .btn.btn-outline-primary:active {
  background-color: #e4eefd !important;
  border-color: #d2e3fc !important;
  box-shadow: none !important;
}

.md-form.mat-2 input[type=text],
.md-form.mat-2 input[type=password],
.md-form.mat-2 input[type=email] {
  border-width: 1px !important;
  border-style: solid;
  border-color: #ced4da;
  border-radius: 5px;
  padding-top: .5rem;
  padding-left: 8px;
  padding-right: 8px;
  padding-bottom: .3rem;
  font-size: .875rem;
  line-height: 1.5;
  box-sizing: border-box;
}

.md-form.mat-2 input[type=text]:focus,
.md-form.mat-2 input[type=password]:focus,
.md-form.mat-2 input[type=email]:focus {
  border-color: #4285f4;
  box-shadow: inset 0px 0px 0px 1px #4285f4;
}

.md-form.mat-2 label {
  top: .5rem;
  left: 8px;
  font-size: .875rem;
}

.md-form.mat-2 label.active {
  background: #fff;
  font-weight: 500;
  padding-right: 5px;
  padding-left: 5px;
  font-size: 11px;
  top: 1rem;
  left: 8px;
}

.btn-toggle-pass {
  border: none;
  position: absolute;
  top: 6px;
  background: transparent;
  right: 0;
}

.btn-toggle-pass.active {
  color: var(--active-color);
}
</style>
</head>
<body><div class="container" style="margin-top:5%">
  <div class="row">
    <div class="col-md-5 mx-auto my-4">
      <div class="card card-signup z-depth-0">
        <div class="card-body text-center" style="font-size:x-large">
        
        <h2 style="border-bottom:1px solid black;">  Fabrics</h2>
          <h3 class="card-title">SignIn</h3>
          
        
            <form action="chkuserlogin.php" method="POST"  id="myloginform">
          <div class="md-form mat-2" style="margin-top:20px;">
		  <h4 style="color:red">Invalid Email/password<h4>
        	<label for="email">E-mail</label>
        	<input type="email" id="email" class="form-control" name="email"> 
      	  </div>
            
          <div class="md-form mat-2" style="margin-top:20px;">
        	<label for="password">Password</label>
        	<input type="password" id="password" class="form-control" name="pass">
      	  </div>
        
          
          <div class="card-foter text-right"  style="margin-top:20px;">
  		    <button type="button" class="btn btn-primary" style="width: 140px;" onclick="document.getElementById('myloginform').submit();">Sign In</button>
          </div>
		  </form>
		  <div class="card-foter"  style="margin-top:20px;border-top:1px solid aqua;font-size:large">
  		    <a href="usersignup.php">Do'nt have account?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>

</script>
</body>
</html>
