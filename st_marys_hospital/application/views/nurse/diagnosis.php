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
	<h2>New Diagnosis</h2>
	<?= form_open('requests/diagnosis') ?>
	<label> blood pressure
		<input type="text" name="blood-p" value="<?php echo set_value('blood-p') ?>">
		<?php echo form_error('fname', '<div class=alert>', '</div>'); ?>
	</label>
	<label> Height
		<input type="text" name="height" value="<?php echo set_value('height')?>">
		<?php echo form_error('lname', '<div class=alert>', '</div>'); ?>
	</label>
	<label> Weight
		<input type="number" name="weight" value="<?php echo set_value('weight')?>">
		<?php echo form_error('dob', '<div class=alert>', '</div>'); ?>
	</label>
	<label> BMI
		<input type="number" name="bmi" value="<?php echo set_value('bmi')?>" disabled>
		<?php echo form_error('gender', '<div class=alert>', '</div>'); ?>
	</label>
	
	<input type="submit" name="btn" class="ptn-btn" value="Save">
	<?= form_close()?>
</div>
<?php endblock() ?>
<?php end_extend() ?>
