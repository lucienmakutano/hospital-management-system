<?php extend('nurse/home.php') ?>
<?php startblock('title') ?>
<?php endblock() ?>

<?php startblock('extra_head') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/alert.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/nursePatient.css') ?>">
<?php endblock() ?>

<?php startblock('banner') ?>
<?php get_extended_block();?>
<?php endblock() ?>

<?php startblock('menu') ?>
<?php get_extended_block(); ?>
<?php endblock() ?>
<?php startblock('content') ?>
<div class="patient-form">
	<h2>New Room</h2>
	<?= form_open('nurse/new_room') ?>
	<label> Room type
		<select name="room-type" id="">
			<option value="select">Select</option>
			<option value="standard">standard</option>
			<option value="luxury">luxury</option>
		</select>
		<?php echo form_error('room-type', '<div class=alert>', '</div>'); ?>
	</label>
	<label> Number of beds
		<input type="number" name="number-of-beds" value="<?php echo set_value('number-of-beds')?>">
		<?php echo form_error('number-of-beds', '<div class=alert>', '</div>'); ?>
	</label>
	<label> Price
		<input type="number" name="price" value="<?php echo set_value('price')?>">
		<?php echo form_error('price', '<div class=alert>', '</div>'); ?>
	</label>
	<input type="submit" name="btn" class="ptn-btn" value="Save">
	<?= form_close()?>
</div>
<?php endblock() ?>
<?php end_extend() ?>
