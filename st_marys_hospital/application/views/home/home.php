<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type"   content="text/html; charset=utf-8" />
		<meta name="description" content="st mary's hospital gives the best care" />
		<meta name="keywords" content="hospital, medicine, inpatient, outpatient, radiography" />
		<meta name="robots" content="index, nofollow" />
		<link rel="stylesheet" type="text/css" href="assets/css/home.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>home - st mary's hospital</title>
	</head>

	<body>
		<header>
			<div class="designation">ST MARY'S HOSPITAL</div>
			<nav class="nav-links">
				<ul>
					<li><a href="#">About us</a></li>
					<li><a href="#direct-help">Contact</a></li>
				</ul>
			</nav>
			<a href="<?= site_url('welcome/login') ?>"><button>Log in</button></a>
		</header>

		<div class="wrapper">
			<section id="abv-fld">
				<div class="above-fold">
					<div class="headline">
						WORLD <br>CLASS CARE
					</div>
					<div class="sub-headline">
						we have the world's best doctors ready to give you the best care possible
					</div>
					<div class="call-for-action">
						<a href="#important"><button id="more">more</button></a>
						<a href="<?= site_url('welcome/login') ?>"><button id="login">login</button></a>
					</div>
				</div>
			</section>

			<section id="sec-cont">
				<div class="secondary-content">
					<div>
						<div class="about-us">
							<div class="info">
								<h3 id="abt">About us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									A adipisci architecto asperiores blanditiis distinctio doloremque eaque enim magnam,
									nemo neque odio quasi quidem quisquam reiciendis repudiandae vero voluptate?
									Facere, molestiae.
									<br><br>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									Consequuntur dolore illum magnam nam. A aspernatur, consectetur,
									delectus eaque error eveniet fuga iste laborum,
									modi nesciunt nobis nostrum similique veritatis? Adipisci.
								</p>
							</div>
							<div class="pictures">
								<img src="assets/images/patient-care.jpg">
							</div>
						</div>
					</div>
					<div>
						<h3 id="important">Important news</h3>
						<div class="news">
							<?php if (isset($data)): ?>
								<?php foreach ($data as $dt): ?>
									<div class="flash-news">
										<h3><?php echo $dt->title ?></h3>
										<p><?php echo $dt->message?></p>
										<button>learn more</button>
									</div>
								<?php endforeach ?>
							<?php endif ?>
						</div>
					</div>
					<div >
						<h3 id="trust">our partners</h3>
						<div class="trust-indicator">
							<img id="img1" src="assets/css/health-forum-1-logo-png-transparent.png" alt="">
							<img id="img2" src="assets/images/Health-Plus-Logo-by-Friendesign-Acongraphic-580x387.jpg" alt>
							<img id="img3" src="assets/images/1280px-Sato_Pharmaceutical_company_logo.svg.png" alt>
							<img id="img4" src="assets/images/764404_20745969_3649102_b0dd7c34_image.jpg" alt>
						</div>
					</div>
					<div id="direct-help">
						<div class="fa-border">
							<h2 id="stmnt">Need some help<br>with something?</h2>
							<p id="p">Just fill in this form with your name and contact details and one of our representatives will get<br>in touch with you as soon as possible</p>
							<div class="info-box">
								<form>
									<label>
										<input type="email" name="Email" placeholder="Email" >
									</label><br><br>
									<label>
										<input type="text" name="subject" placeholder="subject">
									</label><br><br>
									<label>
										<textarea placeholder="Message"></textarea>
									</label>
									<br><br>
									<button class="btn"> submit </button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<footer>
			<div class="footer">
				<div class="footer-content">
					<div class="useful-link">
						<h4>useful links</h4>
						<ul>
							<li><a href="<?php echo site_url('security/changePassword') ?>">change password</a></li>
							<li><a href="<?php echo site_url('security/forgotPassword') ?>">forgot password</a></li>
							<li><a href="<?php echo site_url('welcome/login') ?>">login</a></li>
						</ul>
					</div>
					<div class="contact">
						<h4>contact</h4>
						<ul>
							<li><a href="mailto:support@stmary.health">support@stmary.health</a></li>
							<li>0700000000</li>
							<li>nairobi west, strathmore university</li>
						</ul>
					</div>
					<div class="social-media">
						<h4>social media</h4>
						<div class="media">
							<ul>
								<li><a href="https://github.com/"><img src="assets/images/github-square-brands.svg" alt=""></a></li>
								<li><a href="https://www.facebook.com/"><img src="assets/images/facebook-square-brands.svg" alt=""></a></li>
								<li><a href="https://www.linkedin.com/"><img src="assets/images/linkedin-brands.svg" alt=""></a></li>
								<li><a href="https://twitter.com/home"><img src="assets/images/twitter-square-brands.svg" alt=""></a></li>
								<li><a href="https://www.blogger.com/about/?r=1-null_user"><img src="assets/images/blogger-brands.svg" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="copyright">
					copyright &copy; <?= date('Y') ?> st mary's hospital | all rights reserved.
				</div>
			</div>
		</footer>
	</body>
</html>
