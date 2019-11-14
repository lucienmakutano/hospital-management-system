<?php extend('doctor/home.php') ?>
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
		<?php if(isset($data)):?>
			<?php foreach ($data as $dt): ?>

				<h2>Patient name</h2>
				<label> Citation number</label>
				<input type="text" name="card_number" value="<?php echo $dt->citation_card ?>" disabled>
				<label> Blood pressure</label>
				<input type="text" name="blood-group" value="<?php echo $dt->blood_pressure ?>" disabled>
				<label> Height</label>
				<input type="text" name="height" value="<?php echo $dt->height ?>" disabled>
				<label> Weigth</label>
				<input type="text" name="weigth" value="<?php echo $dt->weight ?>" disabled>
				<label> BMI</label>
				<input type="text" name="symptoms" value="<?php echo $dt->BMI ?>" disabled>
				<a href="<?php echo site_url('doctor/prescription/' . $dt->citation_card)?>"><button class="ptn-btn">Priscribe</button></a>
			<?php endforeach; ?>
		<?php endif ?>
	</div>
<?php endblock() ?>
<?php end_extend() ?>
