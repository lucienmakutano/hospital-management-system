<?php extend('admin/home.php') ?>
<?php startblock('title') ?>
<?php endblock() ?>

<?php startblock('extra_head') ?>
<?php endblock() ?>

<?php startblock('banner') ?>
<?php get_extended_block();?>
<?php endblock() ?>

<?php startblock('menu') ?>
	<?php get_extended_block(); ?>
<?php endblock() ?>
<?php startblock('content') ?>
<div class="form">
	<?= validation_errors()?>

	<?= form_open('form') ?>
	<label> ID
		<input type="number" required autocomplete="on">
	</label>
	<label> First name
		<input type="text" required autocomplete="on">
	</label>
	<label> Last name
		<input type="text" required autocomplete="on">
	</label>
	<label> Date of birth
		<input type="date" required autocomplete="on">
	</label>
	<label> Gender
		<input type="text" required autocomplete="on">
	</label>
	<label> Email
		<input type="email" required autocomplete="on">
	</label>
	<label> Phone number
		<input type="number" required autocomplete="on">
	</label>
	<label> User type
		<select>
			<option>doctor</option>
			<option>nurse</option>
			<option>pharmacist</option>
		</select>
	</label>
	<label> Profile picture
		<input type="file" required autocomplete="on">
	</label>
	<label> Password
		<input type="password" required autocomplete="off">
	</label>
	<button type="submit">Save</button>
	<button type="reset">Clear</button>
	<?= form_close()?>
</div>
<?php endblock() ?>
<?php end_extend() ?>
