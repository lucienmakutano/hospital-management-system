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
			<?php if ($this->session->flashdata("error")):?>
				<div class="alert alert-danger"><?php echo $this->session->flashdata('error')?></div>
			<?php endif ?>
			<h2>Add New Medicine</h2>
			<?= form_open('requests/add_medicine') ?>
			<label> Medicine name
				<select name="medicine">
					<option value="" selected>Select</option>
					<?php if (isset($medicines)): ?>
						<?php foreach ($medicines as $medicine): ?>
							<option <?php echo set_select('medicine', "$medicine->medicine_name") ?>
								value="<?php echo $medicine->medicine_id ?>"><?php echo $medicine->medicine_name ?></option>
						<?php endforeach; ?>
					<?php endif;?>
				</select>
				<?php echo form_error('medicine', '<div class="alert">', '</div>') ?>
			</label>
			<label> quantity
				<input type="number" name="quantity" value="<?= set_value('quantity'); ?>" autocomplete="off">
				<?php echo form_error('quantity', '<div class="alert">', '</div>') ?>
			</label>
			<label> Unit price
				<input type="text" name="price" value="<?= set_value('price'); ?>" autocomplete="off">
				<?php echo form_error('price', '<div class="alert">', '</div>') ?>
			</label>

			<label> Expiry date
				<input type="Date" name="expiry-date" value="<?= set_value('expiry-date'); ?>" autocomplete="off">
				<?php echo form_error('expiry-date', '<div class="alert">', '</div>') ?>
			</label>

			<label> Provider
				<select name="provider">
					<option value="" selected>Select</option>
					<?php if (isset($providers)): ?>
						<?php foreach ($providers as $provider): ?>
							<option <?php echo set_select('provider', "$provider->name") ?>
								value="<?php echo $provider->provider_id ?>"><?php echo $provider->name ?></option>
						<?php endforeach ?>
					<?php endif;?>
				</select>
				<?php echo form_error('provider', '<div class="alert">', '</div>') ?>
			</label>
			<button type="submit" class="ptn-btn">Add</button>
			<?= form_close()?>
		</div>
	<?php endblock()?>
<?php end_extend();?>
