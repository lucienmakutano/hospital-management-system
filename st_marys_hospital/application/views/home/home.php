<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/home.css') ?>">
		<title>home - st marry's hospital</title>
	</head>
	<body>
		<header>
			<div class="header">
				<span><img width="80" height="120" src="assets/images/logo.jpeg"></span>
				<div id="designation">
					<span>ST MARY'S HOSPITAL</span><br>
					<small>YOUR HEALTH MATTERS</small>
				</div>
			</div>
		</header>
		<main>
			<div class="main">
				<div class="news">News</div>
				<div class="important">important</div>
				<div class="login">
					<img src="assets/images/user.png">
					<a href="<?php echo site_url('welcome/login'); ?>">
						<button>Login</button>
					</a>
				</div>
			</div>
		</main>
		<footer>
			<div class="footer">
				<div class="footer-content">
					<div id="support-info">
						<u>support</u>
						<p>support@stmary.health</p>
						<p>0700000000</p>
					</div>
					<div id="security-detail">
						<u>security</u>
						<p>recover account</p>
						<p>change password</p>
						<p>forgot password</p>
					</div>
				</div>
				<div class="footer-copy">
					copyright &copy; <?php echo date('Y') ?> st marry's hospital all rights reserved.
				</div>
			</div>
		</footer>
	</body>
</html>
