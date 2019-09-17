<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css') ?>">
    <title>login</title>
  </head>
  <body style="background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(<?php echo base_url('assets/images/new.jpg'); ?>)">

    <header>
      <div class="nav-bar">
        <h1 align="center" style="color: white">St marry's hospital</h1>
      </div>
    </header>
    <main>
      <div class="top">
  	     <h1 id="login-head">Login</h1>
  	  </div>
  	  <div class="login-border">
    		<form action="validation.php" method="post">
      		<div class="login-box">
      			<div class=" login-left">
          		<div class="form-group">
          			<label style="color: white">Email</label><br>
          				<input  type="text" name="user" class="form-control" placeholder="example@domain.com"  required ><br><br>
          		</div>
          		<div class="form-group">
          			<label style="color: white">Password</label><br>
          				<input  type="Password" name="Password" class="form-control" placeholder="password"  required>
          		</div>
        			<a href="#" style="color: #00FF00">change password</a>&nbsp;&nbsp;&nbsp;
        			<a href="#" style="color: #00FF00">Forgot password</a><br><br>
              <button type="submit" class="btn btn-primary" id="log">login</button>
            </div>
            <div class="info-right">
              <h2 style="color: white" >You dont have an account yet?</h2>
              <p style="color: white">kindly visit the hospital so they can make you an account and get you started with</p>
            </div>
         </div>
      	</form>
    	</div>
    </main>
    <footer>
      <div class="footer-copy">
        copyright &copy; <?php echo date('Y') ?> st marry's hospital all rights reserved.
      </div>
    </footer>
  </body>
</html>
