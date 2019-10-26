<?php extend("layouts/layout.php") ?>
	<?php startblock("title") ?>
	<?php endblock() ?>

	<?php startblock("extra_head") ?>
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/doctor.css') ?>">
		<link rel="stylesheet" href="<?= base_url('assets/css/avatar.css') ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/layout.css') ?>">
	<?php endblock() ?>

	<?php startblock("banner") ?>
		<p><?php echo $this->session->userdata('firstName') . "  " . $this->session->userdata('lastName')?><br><small>SURGEON</small></p>
	<?php endblock() ?>

	<?php startblock("menu") ?>
		<ul>
			<li id="profile-picture"><a href=""><img src="<?= $this->session->userdata('profile picture')?>" alt=""></a></li>
		<!--	<li><a href="--><?//= site_url('doctor/')  ?><!--" class="link">Home</a></li>-->
			<li><a href="<?= site_url('doctor/appointment') ?>" class="link">Home</a></li>
			<li><a href="<?= site_url('doctor/prescription') ?>" class="link">Prescriptions</a><li>
		</ul>
	<?php endblock() ?>

	<?php startblock("content") ?>
		<div id="content">
			<div id="ima">
				<div id="clock-in">
					<img id="picture1" src="<?= base_url('assets/images/clockin.png') ?>" alt="">
					<a href="#" id="in" >Clockin</a>
				</div>
				<div id="picture2">
					<img id="part1" src="<?= base_url('assets/images/clockout.png') ?>" alt="">
					<a  href="#" id="out" >Clockout</a>
				</div>
			</div>
		</div>
	<?php endblock() ?>
<?php end_extend() ?>
