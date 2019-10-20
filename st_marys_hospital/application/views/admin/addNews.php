<?php extend('admin/home.php') ?>

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
		<?= form_open('requests/add_news') ?>
		<label> Title
			<input type="text" name="title" value="<?= set_value('title'); ?>">
			<?php echo form_error('title', '<div class="alert">', '</div>') ?>
		</label>
		<label> Message
			<textarea name="message" rows="8" cols="80" value="<?= set_value('message') ?>" placeholder="enter the Message here"></textarea>
			<?php echo form_error('message', '<div class="alert">', '</div>')?>
		</label>
		<button type="submit" class="ptn-btn">Publish</button>
		<?= form_close()?>
	</div>
<?php endblock() ?>
<?php end_extend() ?>
