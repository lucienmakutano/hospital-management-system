<?php extend('admin/home.php') ?>
<?php startblock('title') ?>
<?php endblock() ?>

<?php startblock('extra_head') ?>
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
	<?= validation_errors()?>

	<?= form_open('requests/add_patient') ?>
    	<label> First name
    		<input type="text" required>
    	</label>
    	<label> Last name
    		<input type="text" required>
    	</label>
    	<label> Date of birth
    		<input type="date" required>
    	</label>
    	<label> Gender
    		<input type="text" required>
    	</label>
    	<label> Email
    		<input type="email" required>
    	</label>
    	<label> Phone number
    		<input type="number" required>
    	</label>
        <label> Address
    		<input type="text" required>
    	</label>
        <input type="submit" name="btn" class="ptn-btn" value="Save">
        <input type="reset" name="btn" class="ptn-btn" value="Clear">
	<?= form_close()?>
</div>
<?php endblock() ?>
<?php end_extend() ?>
