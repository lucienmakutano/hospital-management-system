<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

		<!--	custom styles	-->
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/layout.css') ?>">

		<!--	bootstrap cdn	-->
<!--		<link rel="stylesheet" href="--><?//= base_url('assets/bootstrap/css/bootstrap.css') ?><!--">-->
<!--		<link rel="stylesheet" href="--><?php //base_url('assets/bootstrap/css/bootstrap-grid.css') ?><!--">-->

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
					<div class="dropdown mr-1">
						<button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
							Settings
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
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
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
