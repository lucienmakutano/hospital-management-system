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
    <h2>Assign Room</h2>
	<?= validation_errors()?>

	<?= form_open('requests/assign_room') ?>
    	<label> Patient's citation card
    		<input type="text" required>
    	</label>
    	<label> Room number
    		<input type="text" required>
    	</label>
        <label> Type of room
    		<select class="" name="">
                <option value="General" selected>Select</option>
                <option value="General">General</option>
                <option value="Deluxe">Deluxe</option>
            </select>
    	</label>
        <input type="submit" name="btn" class="ptn-btn" value="Assign">
	<?= form_close()?>
</div>
<?php endblock() ?>
<?php end_extend() ?>
