<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
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
				<?php start_block_marker('banner') ?>
                    <!-- use <p> for name and the type of the user -->
                    <!-- further more enclode the type of the user in <small></small> -->

                    <!-- example <p>name<br><small>admin</small><p> -->
				<?php end_block_marker(); ?>
			</div>
			<div class="menu">
				<?php start_block_marker('menu') ?>
                    <!-- when creating your menu use <ul> -> <li> -> <a> -->
                    <!-- example <ul>
                        <li><a href="#">link1</a></li>
                        <li><a href="#">link2</a></li>
                    </ul> -->
				<?php end_block_marker(); ?>
			</div>
			<div class="content">
				<?php start_block_marker('content') ?>
                    <!-- for the content design it as you wish -->
				<?php end_block_marker(); ?>
				<div class="footer">
					footer
				</div>
			</div>
		</div>
    </body>
</html>
