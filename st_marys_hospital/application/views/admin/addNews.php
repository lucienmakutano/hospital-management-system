<?php extend('admin/home.php') ?>

<?php startblock('title') ?>
<?php endblock() ?>

<?php startblock('extra_head') ?>
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
	<?= validation_errors()?>

	<?= form_open('requests/add_news') ?>
	<label> Title
		<input type="text" required autocomplete="on">
	</label>
	<label> Message
		<textarea name="name" rows="8" cols="80" placeholder="enter the Message here"></textarea>
	</label>
	<button type="submit" class="ptn-btn">Publish</button>
	<?= form_close()?>
</div>
<?php endblock() ?>
<?php end_extend() ?>
