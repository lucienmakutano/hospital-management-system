<?php extend('layouts/security_template.php');?>

	<?php startblock('title');?>
	<?php endblock();?>
	<?php startblock('extra_head');?>
	<?php endblock();?>
	<?php startblock('banner');?>
		<?php get_extended_block();?>
		<a><button class="btn">Home</button></a>
	<?php endblock();?>

	<?php startblock('content');?>
		<div class="password">
			<h3>Recover your password</h3>
			<?= validation_errors()?>
            <?= form_open('requests/forgot_password')?>
				<label>
					<input type="email" required placeholder="Enter your email">
				</label><br><br>
				<button type="submit">Send</button>
			<?= form_close()?>
		</div>

	<?php endblock();?>
	<?php startblock('footer');?>
		<?php get_extended_block();?>
	<?php endblock();?>

<?php end_extend();?>
