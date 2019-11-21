<?php extend('doctor/home.php') ?>
<?php startblock('title') ?>
<?php endblock() ?>

<?php startblock('extra_head') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/appointment.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/alert.css') ?>">
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
				<p id="title"><strong>Citation number: </strong><?php echo $dt->Citation_card ?></p>
				<p id="content"><strong>Name:</strong> <?php echo $dt->fname ?>&nbsp;<?php echo $dt->lname ?></p>
				<p id="date"><strong> Date and time:</strong> <?php echo $dt->date ?></p>
				<a href="<?= site_url('doctor/moredetails/' . $dt->Citation_card) ?>"><button id="btn">learn more</button></a>
			</div>
		<?php endforeach; ?>
	<?php endif ?>
</div>

<?php endblock() ?>
<?php end_extend() ?>
