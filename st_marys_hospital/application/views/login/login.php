<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>login</title>
  </head>
  <body>
    <div class="top">
	<h1 align="center" style="color: white">St marry's hospital</h1>
	<a href="#" id="home">Home</a>
	</div>
	<div class="login-border">
		<form action="validation.php" method="post">
		<div class="login-box">
			<div class=" login-left">
		<div class="form-group">
			<label style="color: white">Email</label><br>
				<input  type="text" name="user" class="form-control"  required >
			</div>
		<div class="form-group">
			<label style="color: white">Password</label><br>
					<input  type="Password" name="Password" class="form-control"  required>
			</div>
			<a href="#" style="color: #00FF00">change password</a>
			<a href="#" style="color: #00FF00">Forgot password</a>
           <br><br><button type="submit" class="btn btn-primary" id="log">login</button>
           </div>
           <div class="info- right">

            <h2 style="color: white" >You dont have an account yet?</h2>
            <p style="color: white">kindly visit the hospital so they can make you an account and get you started with</p>
           </div>

       </div>
	</form>
	</div>
	<div class="rights">
           	 <label style="color: white">Copyright © St_marrys_hospital 2019</label>
           </div>
  </body>
</html>
