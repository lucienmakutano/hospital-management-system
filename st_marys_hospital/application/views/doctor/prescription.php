<?php extend('doctor/home.php') ?>
<?php startblock('title') ?>
<?php endblock() ?>

<?php startblock('extra_head') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/Booking.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/alert.css') ?>">
<?php endblock() ?>

<?php startblock('banner') ?>
<?php get_extended_block();?>
<?php endblock() ?>

<?php startblock('menu') ?>
<?php get_extended_block(); ?>
<?php endblock() ?>
<?php startblock('content') ?>

<div class="prescription-form">
	<?php if (isset($patient)):?>
		<h2><?php echo $patient[0]['fname'] . " " . $patient[0]['lname']  ?></h2>
		<hr><br>
		<?= form_open("doctor/prescription/" . $patient[0]['Citation_card']) ?>
		<label> Patient's citation card number <br>
			<input type="number" name="patient-id" value="<?php echo $patient[0]['Citation_card'] ?>" readonly>
			<?php echo form_error('patient-id', '<div class="alert">', '</div>')?>
		</label>
		<label> Doctor's ID <br>
			<input type="number" name="doctor-id" value="<?= $this->session->userdata('id') ?>" readonly>
			<?php echo form_error('doctor-id', '<div class="alert">', '</div>')?>
		</label>
		<label> Prescription Details <br>
			<textarea name="description" rows="8" cols="80"></textarea>
			<?php echo form_error('description', '<div class="alert">', '</div>')?>
		</label><br>
		<input type="submit" name="btn" class="ptn-btn" value="Submit">
		<?= form_close()?>
	<?php endif;?>
</div>

<?php endblock() ?>
<?php end_extend() ?>
