<?php extend('admin/home.php') ?>

<?php startblock('title') ?>
<?php endblock() ?>

<?php startblock('extra_head') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/nursePatient.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/alert.css') ?>">
<script src="<?= base_url('assets/js/admin.js')?>"></script>
<?php endblock() ?>

<?php startblock('banner') ?>
<?php get_extended_block();?>
<?php endblock() ?>

<?php startblock('menu') ?>
	<?php get_extended_block(); ?>
<?php endblock() ?>

<?php startblock('content') ?>

	<div class="patient-form">

		<h2>New User</h2>
		<?php $attributes = array('id' => 'form'); ?>
		<?= form_open('requests/newUser', $attributes) ?>
			<label> First name
				<input type="text" value="<?php echo set_value('first-name') ?>" name="first-name">
				<?php echo form_error('first-name', '<div class="alert">', '</div>')?>
			</label>
			<label> Last name
				<input type="text" value="<?php echo set_value('last-name') ?>" name="last-name">
				<?php echo form_error('last-name', '<div class="alert">', '</div>')?>
			</label>
			<label> Date of birth
				<input type="date" value="<?php echo set_value('dob') ?>" name="dob">
				<?php echo form_error('dob', '<div class="alert">', '</div>')?>
			</label>
			<label> Gender
				<input type="text" value="<?php echo set_value('gender') ?>" name="gender">
				<?php echo form_error('gender', '<div class="alert">', '</div>')?>
			</label>
			<label> Email
				<input type="email" value="<?php echo set_value('email') ?>" name="email">
				<?php echo form_error('email', '<div class="alert">', '</div>')?>
			</label>
			<label> Phone number
				<input type="number" value="<?php echo set_value('phone-number') ?>" name="phone-number">
				<?php echo form_error('phone-number', '<div class="alert">', '</div>')?>
			</label>
			<label> User type
				<select id="user-type" value="<?php echo set_value('user-type') ?>" name="user-type">
					<option value="select" selected>Select</option>
					<option value="admin" <?= set_select('user-type', 'admin')?> >admin</option>
					<option value="nurse" <?= set_select('user-type', 'nurse')?> >nurse</option>
					<option value="doctor" <?= set_select('user-type', 'doctor')?> >doctor</option>
					<option value="pharmacist" <?= set_select('user-type', 'pharmacist')?> >pharmacist</option>
				</select>
				<?php echo form_error('speciality', '<div class="alert">', '</div>')?>
			</label>
			<label> Password
				<input type="password"  name="password">
				<?php echo form_error('password', '<div class="alert">', '</div>')?>
			</label>
			<button type="submit" class="ptn-btn" id="btn">Save</button>
			<button type="reset" class="ptn-btn">Clear</button>
		<?= form_close()?>

	</div>
<?php endblock() ?>
<?php end_extend() ?>
