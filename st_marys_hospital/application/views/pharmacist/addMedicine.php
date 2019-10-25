<?php extend('pharmacist/home'); ?>
	<?php startblock('extra_head'); ?>
		<?php get_extended_block()?>
	<?php endblock()?>
	<?php startblock('banner'); ?>
		<?php get_extended_block()?>
		<link rel="stylesheet" href="<?= base_url('assets/css/nursePatient.css') ?>">
		<link rel="stylesheet" href="<?= base_url('assets/css/alert.css') ?>">
	<?php endblock()?>
	<?php startblock('menu'); ?>
		<?php get_extended_block()?>
	<?php endblock()?>

	<?php startblock('content');?>
		<div class="patient-form">
			<h2>Add New Medicine</h2>
			<?= form_open('requests/add_medicine') ?>
			<label> Medicine name
				<input type="text" name="medicine-name" value="<?= set_value('medicine-name'); ?>">
				<?php echo form_error('medicine-name', '<div class="alert">', '</div>') ?>
			</label>
			<label> quantity
				<input type="number" name="quantity" value="<?= set_value('quantity'); ?>">
				<?php echo form_error('quantity', '<div class="alert">', '</div>') ?>
			</label>
			<label> Unit price
				<input type="text" name="price" value="<?= set_value('price'); ?>">
				<?php echo form_error('price', '<div class="alert">', '</div>') ?>
			</label>

			<label> Provider
				<select name="provider" value="<?= set_value('provider'); ?>">
					<option value="select" selected>Select</option>
					<?php if (isset($providers)): ?>
						<?php foreach ($providers as $provider): ?>
							<option <?php echo set_select('provider', "<?php echo $provider->name ?>") ?>
								value="<?php echo $provider->name ?>"><?php echo $provider->name ?></option>
						<?php endforeach ?>
					<?php endif;?>
				</select>
				<?php echo form_error('provider', '<div class="alert">', '</div>') ?>
			</label>
			<button type="submit" class="ptn-btn">Publish</button>
			<?= form_close()?>
		</div>
	<?php endblock()?>
<?php end_extend();?>
