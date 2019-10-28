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
	<h2>New Patient</h2>
	<?= form_open('requests/diagnosis') ?>
	<label> First name
		<input type="text" name="fname" value="<?php echo set_value('fname') ?>">
		<?php echo form_error('fname', '<div class=alert>', '</div>'); ?>
	</label>
	<label> Last name
		<input type="text" name="lname" value="<?php echo set_value('lname')?>">
		<?php echo form_error('lname', '<div class=alert>', '</div>'); ?>
	</label>
	<label> Date of birth
		<input type="date" name="dob" value="<?php echo set_value('dob')?>">
		<?php echo form_error('dob', '<div class=alert>', '</div>'); ?>
	</label>
	<label> Gender
		<input type="text" name="gender" value="<?php echo set_value('gender')?>">
		<?php echo form_error('gender', '<div class=alert>', '</div>'); ?>
	</label>
	<label> Phone number
		<input type="number"name="phone" value="<?php echo set_value('phone')?>">
		<?php echo form_error('phone', '<div class=alert>', '</div>'); ?>
	</label>
	<label> Address
		<input type="text" name="address" value="<?php echo set_value('address')?>">
		<?php echo form_error('address', '<div class=alert>', '</div>'); ?>
	</label>
	<input type="submit" name="btn" class="ptn-btn" value="Save">
	<input type="reset" name="btn" class="ptn-btn" value="Clear">
	<?= form_close()?>
</div>
<?php endblock() ?>
<?php end_extend() ?>
