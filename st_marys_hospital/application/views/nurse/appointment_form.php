<?php extend('nurse/home.php') ?>
<?php startblock('title') ?>
<?php endblock() ?>

<?php startblock('extra_head') ?>
	<link rel="stylesheet" href="<?= base_url('assets/css/nursePatient.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/alert.css') ?>">
<?php endblock() ?>

<?php startblock('banner') ?>
<?php get_extended_block();?>
<?php endblock() ?>

<?php startblock('menu') ?>
	<?php get_extended_block(); ?>
<?php endblock() ?>
<?php startblock('content') ?>
<div class="patient-form">
    <h2>New Appointment</h2>

	<?= validation_errors()?>
	<?= form_open('requests/book_appointment') ?>
        <label> Patient's citation card <br>
    		<input type="text" required>
    	</label>
        <label> Doctor's ID <br>
    		<input type="text" required>
    	</label>
        <label>Appointment Date<br>
        	<input type="date" required>
        </label>
    	<label>Appointment Time<br>
    		<input type="time" required>
        </label>
        <label> Brief summary of the symptom <br>
    		<textarea name="name" rows="8" cols="80"></textarea>
    	</label><br>
        <div class="">
            <input type="submit" name="btn" class="ptn-btn" value="Book appointment">
        </div>
	<?= form_close()?>
</div>
<?php endblock() ?>
<?php end_extend() ?>
