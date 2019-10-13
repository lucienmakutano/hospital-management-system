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
	<li><a href="#" class="link">Home</a></li>
	<li><a href="#" class="link">Appointments</a></li>
	<li><a href="#" class="link">Prescriptions</a><li>
	<li><a href="#" class="link">Diagnosis</a></li>
	<li><a href="#" class="link">Logout</a></li>
</ul>
<?php endblock() ?>

<?php startblock("content") ?>
<div id="content">
	<div id="ima">
		<img id="part2"src="<?= base_url('assets/images/clockin.png') ?>">
		<img id="part1"src="<?= base_url('assets/images/clockout.png') ?>">
	</div>
	<a href="#" id="in" >Clockin</a>
	<a  href="#" id="out" >Clockout</a>

</div>
<?php endblock() ?>
<?php end_extend() ?>
