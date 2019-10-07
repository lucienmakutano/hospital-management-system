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
			<form action="#" method="post">
				<label>
					<input type="password" required placeholder="Old password">
				</label><br><br>
				<label>
					<input type="password" required placeholder="New password">
				</label><br><br>
				<label>
					<input type="password" required placeholder="Confirm password">
				</label><br><br>
				<button type="submit" name="btn-change">Submit</button>
			</form>
		</div>


	<?php endblock();?>
	<?php startblock('footer');?>
		<?php get_extended_block();?>
	<?php endblock();?>

<?php end_extend();?>

