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

	<div class="appointment-form">
		<?php foreach ($data as $dt): ?>
			<div class="appointment-content">
				<p id="title"><?php echo $dt['citation card'] ?></p>
				<p id="content"><?php echo $dt['summary'] ?></p>
				<button id="btn">learn more</button>
			</div>
		<?php endforeach; ?>
	</div>

<?php endblock() ?>
<?php end_extend() ?>
