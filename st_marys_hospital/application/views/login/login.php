<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/alert.css') ?>">
    <title>login</title>
  </head>
  <body>
    <header>
      <div class="nav-bar">
        <h1 align="center">St mary's hospital</h1>
      </div>
    </header>
    <main>
        <div class="top">
  	        <h1 id="login-head">Login</h1>
  	    </div>
  	    <div class="login-border">
          		<div class="login-box">
          			<div class="login-left">
						<?php
							if ($this->session->flashdata('message')){
								echo "<p class='alert alert-danger'>".$this->session->flashdata('message')."</p>";
							}
						?>
                        <?= form_open('requests/login_users') ?>
                      		<div class="form-group">
                      			<label>Email</label><br>
                      			<input autofocus type="email" name="email" class="form-control" placeholder="example@domain.com"  value="<?php echo set_value('email')?>" >
								<?php echo form_error('email','<div class="alert">', '</div>') ?>
								<br><br>
                      		</div>
                  		    <div class="form-group">
                  			    <label>Password</label><br>
                  				<input  type="password" name="password" class="form-control" placeholder="password">
								<?php echo form_error('password', '<div class="alert">', '</div>') ?>
								<br><br>
                  		    </div>
                            <button type="submit" class="btn btn-primary" id="log">login</button>
                        <?= form_close() ?>
                        <br><br><br>
            			<a href="<?php echo site_url('security/forgotPassword'); ?>" style="color: #07248c">Forgot password?</a><br><br>
                    </div>
                    <div class="info-right">
                      <h1>Do not have an account yet?</h1>
                      <p>kindly visit the hospital's IT department so they can create an account to get you started.</p>
                    </div>
                </div>
    	</div>
    </main>
    <footer>
      <div class="footer-copy">
        copyright &copy; <?php echo date('Y') ?> st mary's hospital | all rights reserved.
      </div>
    </footer>
  </body>
</html>
