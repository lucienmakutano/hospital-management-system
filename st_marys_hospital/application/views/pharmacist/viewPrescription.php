<?php extend('pharmacist/home'); ?>
	<?php startblock('extra_head')?>
		<?php get_extended_block()?>
		<link rel="stylesheet" href="<?= base_url('assets/css/appointment.css') ?>">
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
			<?php if(isset($data)): ?>
				<?php foreach ($data as $dt): ?>
					<div class="appointment-content">
						<p id="title"><?php echo $dt['citation_card'] ?></p>
						<p id="content"><?php echo $dt['dosage'] ?></p>
						<p id="content"><?php echo $dt['medicine'] ?></p>
						<a><button id="btn">learn more</button></a>
					</div>
				<?php endforeach; ?>
			<?php endif ?>
		</div>
	<?php endblock()?>
<?php end_extend();?>
