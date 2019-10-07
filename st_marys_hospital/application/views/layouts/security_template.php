<!DOCTYPE html>
<html lang="en">
	<head>
		<?php start_block_marker('title');?>
		<?php end_block_marker();?>
		<title></title>
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/security.css')?>">

		<?php start_block_marker('extra_head');?>
		<?php end_block_marker();?>
	</head>
	<body>
	<div class="body">
		<div class="banner">
			<?php start_block_marker('banner');?>
				<h2>ST MARY'S HOSPITAL</h2>
			<?php end_block_marker();?>
		</div>
		<div class="content">
			<?php start_block_marker('content');?>
			<?php end_block_marker();?>
		</div>
		<div class="footer">
			<?php start_block_marker('footer');?>
			<br>
			<hr>
			<footer>
				copyright &copy; <?= date('Y') ?> st mary's hospital. All rights reserved
			</footer>
			<?php end_block_marker();?>
		</div>
	</div>
	</body>
</html>
