<?php extend('pharmacist/home'); ?>
	<?php startblock('extra_head') ?>
		<?php get_extended_block()?>
	<?php endblock()?>

	<?php startblock('banner') ?>
		<?php get_extended_block()?>
		<link rel="stylesheet" href="<?= base_url('assets/css/nursePatient.css') ?>">
		<link rel="stylesheet" href="<?= base_url('assets/css/alert.css') ?>">
	<?php endblock()?>

	<?php startblock('menu') ?>
		<?php get_extended_block()?>
	<?php endblock()?>

	<?php startblock('content') ?>
		<div class="patient-form">
			<h2>Add New Provider</h2>
			<?= form_open('requests/add_provider') ?>
			<label> Company name
				<input type="text" autocomplete="off" name="company-name" value="<?= set_value('company-name'); ?>">
				<?php echo form_error('company-name', '<div class="alert">', '</div>') ?>
			</label>
			<label> address
				<input type="text" autocomplete="off" name="address" value="<?= set_value('address'); ?>">
				<?php echo form_error('address', '<div class="alert">', '</div>') ?>
			</label>
			<label> email
				<input type="email" autocomplete="off" name="email" value="<?= set_value('email'); ?>">
				<?php echo form_error('email', '<div class="alert">', '</div>') ?>
			</label>
			<label> Telephone  number
				<input type="number" autocomplete="off" name="phone" value="<?= set_value('phone'); ?>">
				<?php echo form_error('phone', '<div class="alert">', '</div>') ?>
			</label>
			<button type="submit" class="ptn-btn">Add</button>
			<?= form_close()?>
		</div>
	<?php endblock()?>
<?php end_extend();?>
