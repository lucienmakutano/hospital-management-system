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
				<h2><?php echo $dt->fname?>&nbsp;<?php echo $dt->lname?></h2>
				<hr>
				<form action="#">
					<label> Citation number</label>
					<input type="text" name="card_number" value="<?php echo $dt->citation_card ?>" readonly>
					<label> Blood pressure</label>
					<input type="text" name="blood-group" value="<?php echo $dt->blood_pressure ?>" readonly>
					<label> Height</label>
					<input type="text" name="height" value="<?php echo $dt->height ?>" readonly>
					<label> Weigth</label>
					<input type="text" name="weight" value="<?php echo $dt->weight ?>" readonly>
					<label> BMI</label>
					<input type="text" name="symptoms" value="<?php echo $dt->BMI ?>" readonly>
					<label for="">Symptoms</label>
					<input type="text" name="symptom" value="<?php echo $dt->summary?>" readonly>
				</form>
				<a href="<?php echo site_url('doctor/prescription/' . $dt->citation_card)?>"><button class="ptn-btn">Priscribe</button></a>
			<?php endforeach; ?>
		<?php endif ?>
	</div>
<?php endblock() ?>
<?php end_extend() ?>
