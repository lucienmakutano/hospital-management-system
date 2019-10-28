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
			<h2>Edit User</h2>
			<?php $attributes = array('id' => 'form'); ?>
			<?php if (isset($user_infos)): ?>
				<?php foreach ($user_infos as $user_info): ?>
					<?php  $user_id = $this->uri->segment(3); ?>
					<?php echo form_open_multipart("admin/update_user/$user_id", $attributes) ?>
						<label> First name
							<input type="text" value="<?php echo $user_info->fname ?>" name="f-name">
							<?php echo form_error('first-name', '<div class="alert">', '</div>')?>
						</label>
						<label> Last name
							<input type="text" value="<?php echo $user_info->lname ?>" name="l-name">
							<?php echo form_error('last-name', '<div class="alert">', '</div>')?>
						</label>
						<label> Date of birth
							<input type="date" value="<?php echo $user_info->dob ?>" name="dob">
							<?php echo form_error('dob', '<div class="alert">', '</div>')?>
						</label>
						<label> Gender
							<input type="text" value="<?php echo $user_info->gender ?>" name="gender">
							<?php echo form_error('gender', '<div class="alert">', '</div>')?>
						</label>
						<label> Email
							<input type="email" value="<?php echo $user_info->email ?>" name="email">
							<?php echo form_error('email', '<div class="alert">', '</div>')?>
						</label>
						<label> Phone number
							<input type="number" value="<?php echo $user_info->phone_number ?>" name="phone">
							<?php echo form_error('phone-number', '<div class="alert">', '</div>')?>
						</label>
						<label> Profile picture
							<input type="file" value="<?php echo set_value($user_info->profile_picture) ?>" name="profile">
							<?php echo form_error('profile-picture', '<div class="alert">', '</div>')?>
						</label>
						<label> User type
							<select id="user-type" value="<?php echo set_select($user_info->user_type) ?>" name="user">
								<option value="select" selected>Select</option>
								<option value="admin" <?= set_select('user-type', 'admin')?> >admin</option>
								<option value="nurse" <?= set_select('user-type', 'nurse')?> >nurse</option>
								<option value="doctor" <?= set_select('user-type', 'doctor')?> >doctor</option>
								<option value="pharmacist" <?= set_select('user-type', 'pharmacist')?> >pharmacist</option>
							</select>
							<?php echo form_error('speciality', '<div class="alert">', '</div>')?>
						</label>
						<button type="submit" class="ptn-btn" id="btn">Update</button>
					<?= form_close()?>
				<?php endforeach ?>
			<?php endif ?>
		</div>
	<?php endblock() ?>
<?php end_extend() ?>
