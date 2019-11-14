<?php extend('pharmacist/home.php') ?>
<?php startblock('title') ?>
<?php endblock() ?>

<?php startblock('extra_head') ?>
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
		    	</div>
			        <?= form_open("pharmacist/checkout_medicine/$prescription->prescription_id") ?>
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
