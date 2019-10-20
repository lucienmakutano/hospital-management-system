<?php extend('admin/home.php') ?>

<?php startblock('title') ?>
<?php endblock() ?>

<?php startblock('extra_head') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/nursePatient.css') ?>">
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
				<?php echo form_error('first-name')?>
			</label>
			<label> Last name
				<input type="text" value="<?php echo set_value('last-name') ?>" name="last-name">
				<?php echo form_error('last-name')?>
			</label>
			<label> Date of birth
				<input type="date" value="<?php echo set_value('dob') ?>" name="dob">
				<?php echo form_error('dob')?>
			</label>
			<label> Gender
				<input type="text" value="<?php echo set_value('gender') ?>" name="gender">
				<?php echo form_error('gender')?>
			</label>
			<label> Email
				<input type="email" value="<?php echo set_value('email') ?>" name="email">
				<?php echo form_error('email')?>
			</label>
			<label> Phone number
				<input type="number" value="<?php echo set_value('phone-number') ?>" name="phone-number">
				<?php echo form_error('phone-number')?>
			</label>
			<label> User type
				<select id="user-type" value="<?php echo set_value('user-type') ?>" name="user-type">
					<option value="select" selected>Select</option>
					<option value="admin">admin</option>
					<option value="nurse">nurse</option>
					<option value="doctor">doctor</option>
					<option value="pharmacist">pharmacist</option>
				</select>
				<?php echo form_error('user-type')?>
			</label>
			<label> Password
				<input type="password"  name="password">
				<?php echo form_error('password')?>
			</label>
			<button type="submit" class="ptn-btn" id="btn">Save</button>
			<button type="reset" class="ptn-btn">Clear</button>
		<?= form_close()?>

	</div>
<?php endblock() ?>
<?php end_extend() ?>
