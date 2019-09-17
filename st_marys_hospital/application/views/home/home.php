<!DOCTYPE html>
<html>
	<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/textAnimation.css') ?>">
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
				<div class="news">
          <div class="anime">
            <div class="slideshow-container">
              <div class="mySlides">
                  <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                    I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
                  <p class="author">- John Keats</p>
              </div>
              <div class="mySlides">
                  <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    But man is not made for defeat. A man can be destroyed but not defeated.</q>
                  <p class="author">- Ernest Hemingway</p>
              </div>
              <div class="mySlides">
                  <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt mollit anim id est laborum.I have not failed. I've just found 10,000 ways that won't work.</q>
                  <p class="author">- Thomas A. Edison</p>
              </div>
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div>

            <div class="dot-container">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
        </div>
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
						<p><a href="#">support@stmary.health</a></p>
						<p>0700000000</p>
					</div>
					<div id="security-detail">
						<u>security</u>
						<p><a href="#">recover account</a></p>
						<p><a href="#">change password</a></p>
						<p><a href="#">forgot password</a></p>
					</div>
				</div>
				<div class="footer-copy">
					copyright &copy; <?php echo date('Y') ?> st mary's hospital all rights reserved.
				</div>
			</div>
		</footer>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
	</body>
</html>
