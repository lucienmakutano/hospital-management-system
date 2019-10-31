<?php extend('layouts/security_template.php');?>

	<?php startblock('title');?>
	<?php endblock();?>
	<?php startblock('extra_head');?>
	<?php endblock();?>
	<?php startblock('banner');?>
		<?php get_extended_block();?>
		<a href="#"><button class="btn">Home</button></a>
	<?php endblock();?>
	<?php startblock('content');?>

		<div class="password pass">
			<h3>Change your password</h3>
            <?= form_open('security/updatePassword')?>
				<div>
					<label>
						<input type="password" value="<?php echo set_value('old-password')?> "
							   placeholder="Old password" name="old-password">
					</label>
					<?php echo form_error('old-password', '<div class=alert>', '</div>') ?>
				</div>
				<br>
				<div>
					<label>
						<input type="password" value="<?php echo set_value('new-password')?> "
							   placeholder="New password" name="new-password">
					</label>
					<?php echo form_error('new-password', '<div class=alert>', '</div>') ?>
				</div>
				<br>
				<div>
					<label>
						<input type="password"  value="<?php echo set_value('confirm-password')?>"
							   placeholder="Confirm password" name="confirm-password">
					</label>
					<?php echo form_error('confirm-password', '<div class=alert>', '</div>') ?>
				</div>
				<br>
				<button type="submit" name="btn-change">Submit</button>
			<?= form_close()?>
		</div>


	<?php endblock();?>


	<?php startblock('footer');?>
		<?php get_extended_block();?>
	<?php endblock();?>

<?php end_extend();?>
