<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

		<!--	custom styles	-->
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/layout.css') ?>">

		<?php start_block_marker('title') ?>
        <title>home - st marys hospital</title>
        <?php end_block_marker(); ?>
        <?php start_block_marker('extra_head') ?>
        <!-- put here your css and javascript links-->
        <?php end_block_marker(); ?>
    </head>
    <body>
		<div class="body">
			<div class="banner">
				<div>
					<?php start_block_marker('banner') ?>
					<!-- use <p> for name and the type of the user -->
					<!-- further more enclode the type of the user in <small></small> -->

					<!-- example <p>name<br><small>admin</small><p> -->
					<?php end_block_marker(); ?>
				</div>
				<div>
					<p>ST MARY'S HOSPITAL</p>
				</div>
				<div class="d-flex">
					<div class="dropdown">
						<button type="button" class="dropbtn">Settings</button>
						<div class="dropdown-content">
							<a class="dropdown-item" href="<?= site_url('security/changePassword')?>">change password</a>
							<a class="dropdown-item" href="<?= site_url('requests/logout') ?>">logout</a>
						</div>
					</div>
				</div>
			</div>
			<div class="menu">
				<?php start_block_marker('menu') ?>
                    <!-- when creating your menu use <ul> -> <li> -> <a> -->
                    <!-- example
						<ul>
							<li><a href="#">link1</a></li>
							<li><a href="#">link2</a></li>
						</ul>
                    -->
				<?php end_block_marker(); ?>
			</div>
			<div class="content">
				<?php start_block_marker('content') ?>
                    <!-- for the content design it as you wish -->
				<?php end_block_marker(); ?>
			</div>
		</div>
    </body>
</html>
