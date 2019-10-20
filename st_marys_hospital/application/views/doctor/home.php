<?php extend("layouts/layout.php") ?>
<?php startblock("title") ?>
<?php endblock() ?>

<?php startblock("extra_head") ?>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/doctor.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/layout.css') ?>">
<?php endblock() ?>

<?php startblock("banner") ?>
<p>DR. John Doe<br><small>SURGEON</small></p>
<?php endblock() ?>

<?php startblock("menu") ?>
<ul>
	<li id="profile-picture"><a href=""><img width="100%" src="<?= base_url('assets/images/doc.png')?>"></a></li>
	<li><a href="<?= site_url('doctor/')  ?>" class="link">Home</a></li>
	<li><a href="<?= site_url('doctor/appointment') ?>" class="link">Appointments</a></li>
	<li><a href="<?= site_url('doctor/prescription') ?>" class="link">Prescriptions</a><li>
	<li><a href="<?= site_url('requests/logout')?>" class="link">Logout</a></li>
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
