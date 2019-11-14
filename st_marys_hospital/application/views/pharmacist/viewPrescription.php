<?php extend('pharmacist/home'); ?>
<?php startblock('extra_head')?>
<?php get_extended_block()?>
<link rel="stylesheet" href="<?= base_url('assets/css/appointment.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/alert.css') ?>">
<?php endblock()?>
<?php startblock('banner')?>
<?php get_extended_block() ?>
<?php endblock()?>
<?php startblock('menu')?>
<?php get_extended_block() ?>
<?php endblock()?>
<?php startblock('content')?>
<h2 id="text">Prescriptions</h2>
<div class="appointment-form">
	<?php if(isset($prescriptions)): ?>
		<?php foreach ($prescriptions as $prescription): ?>
			<div class="appointment-content">
				<p id="title"><?php echo $prescription->Citation_card ?></p>
				<p id="content"><?php echo $prescription->dosage ?></p>
				<p id="content"><?php echo $prescription->issued_on ?></p>
				<a href="<?php echo site_url("pharmacist/checkout_medicine/$prescription->prescription_id")?>"><button id="btn">learn more</button></a>
			</div>
		<?php endforeach; ?>
	<?php endif ?>
</div>
<?php endblock()?>
<?php end_extend();?>
