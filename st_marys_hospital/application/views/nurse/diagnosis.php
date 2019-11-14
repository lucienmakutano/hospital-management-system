<?php extend('nurse/home.php') ?>
<?php startblock('title') ?>
<?php endblock() ?>

<?php startblock('extra_head') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/alert.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/nursePatient.css') ?>">
<script src="<?= base_url('assets/js/nurse.js')?>"></script>
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
	<?= form_open('nurse/new_diagnosis') ?>
	<label> Citation card
		<input type="text" name="citation_card" value="<?php echo set_value('citation_card') ?>" autocomplete="off">
		<?php echo form_error('citation_card', '<div class=alert>', '</div>'); ?>
	</label>
	<label> blood pressure
		<input type="text" name="blood-p" value="<?php echo set_value('blood-p') ?>" autocomplete="off">
		<?php echo form_error('blood-p', '<div class=alert>', '</div>'); ?>
	</label>
	<label> Weight
		<input type="number" id="weight" name="weight" value="<?php echo set_value('weight')?>" autocomplete="off">
		<?php echo form_error('weight', '<div class=alert>', '</div>'); ?>
	</label>
	<label> Height
		<input type="text" id="height" name="height" value="<?php echo set_value('height')?>" autocomplete="off">
		<?php echo form_error('height', '<div class=alert>', '</div>'); ?>
	</label>
	<label> BMI
		<input type="text" id="bmi" name="bmi" value="<?php echo set_value('bmi')?>" readonly>
		<?php echo form_error('bmi', '<div class=alert>', '</div>'); ?>
	</label>
	
	<input type="submit" name="btn" class="ptn-btn" value="Save">
	<?= form_close()?>
</div>
<?php endblock() ?>
<?php end_extend() ?>
