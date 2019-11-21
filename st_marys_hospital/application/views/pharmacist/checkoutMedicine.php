<?php extend('pharmacist/home.php') ?>
<?php startblock('title') ?>
<?php endblock() ?>

<?php startblock('extra_head') ?>
<!-- bootstrap js-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/js/bootstrap.bundle.js') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/js/bootstrap.js') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/js/jquery.flexslider.js') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/js/jquery-2.3.3.min.js') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/js/jquery-ui.js') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/Booking.css') ?>">
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
    	<?php if(isset($prescriptions)): ?>
    		<?php foreach ($prescriptions as $prescription): ?>
		    	
			        <?= form_open("pharmacist/dispatch/$prescription->prescription_id") ?>
						<label> Patient's citation card number <br>
							<input type="number" name="patient-id" value="<?php echo $prescription->Citation_card ?>">
							<?php echo form_error('patient-id', '<div class="alert">', '</div>')?>
						</label>
						<label> Doctor's ID <br>
							<input type="number" name="doctor-id" value="<?php echo $prescription->doctor_id ?>">
							<?php echo form_error('doctor-id', '<div class="alert">', '</div>')?>
						</label>
						<label> Prescription Details <br>
							<input type="text" name="description"  value="<?php echo $prescription->dosage ?>">
							<?php echo form_error('description', '<div class="alert">', '</div>')?>
						</label><br>
						<label> Prescribed on <br>
							<input type="text" name="description"  value="<?php echo $prescription->issued_on ?>">
							<?php echo form_error('description', '<div class="alert">', '</div>')?>
						</label><br>
						<input type="submit" name="btn" class="ptn-btn" value="Dispatch">
			    	<?= form_close()?>
			
	    	<?php endforeach ?>
    	<?php endif ?>
    </div>

<?php endblock() ?>
<?php end_extend() ?>
