<?php extend('doctor/home.php') ?>
<?php startblock('title') ?>
<?php endblock() ?>

<?php startblock('extra_head') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/appointment.css') ?>">
<?php endblock() ?>

<?php startblock('banner') ?>
<?php get_extended_block();?>
<?php endblock() ?>

<?php startblock('menu') ?>
	<?php get_extended_block(); ?>
<?php endblock() ?>
<?php startblock('content') ?>
	<h2 id="text">Appointments</h2>
	<div class="appointment-form">
		<?php if(isset($data)): ?>
			<?php foreach ($data as $dt): ?>
				<div class="appointment-content">
					<p id="title"><?php echo $dt['citation card'] ?></p>
					<p id="content"><?php echo $dt['summary'] ?></p>
					<a><button id="btn">learn more</button></a>
				</div>
			<?php endforeach; ?>
		<?php endif ?>
	</div>

<?php endblock() ?>
<?php end_extend() ?>
