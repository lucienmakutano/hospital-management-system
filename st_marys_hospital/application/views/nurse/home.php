
<?php extend("layouts/layout.php") ?>
    <?php startblock("title") ?>
    <?php endblock() ?>

    <?php startblock("extra_head") ?>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/adminhome.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/alert.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/nurseHome.css')?>">
    <?php endblock() ?>

    <?php startblock("banner") ?>
	<p><?php echo $this->session->userdata('firstName') . " " . $this->session->userdata('lastName')?><br> <small>nurse</small> </p>
	<?php get_extended_block();?>
    <?php endblock() ?>

    <?php startblock("menu") ?>
    <ul>
		<li id="profile-picture"><a href="#"><img src="<?php echo $this->session->userdata('profile picture') ?>" alt="profile picture"> </a> </li>
		<li><a href="<?= site_url('nurse/') ?>">Home</a> </li>
		<li><a href="<?= site_url('nurse/newPatient') ?>">Add patient</a></li>
		<li><a href="<?= site_url('nurse/assignRoom') ?>">Assign wards</a></li>
		<li><a href="<?= site_url('nurse/newAppointment') ?>">Book appointment</a> </li>
    </ul>
    <?php endblock() ?>

    <?php startblock("content") ?>
	<div class="search">
		<label>
			<input type="text" name="" placeholder="Enter patient Citation number">
		</label>
		<button type="button" name="button">search</button>
	</div>
	<div id="responsive-table">
		<h3>Patient Information</h3>
		<table>
			<tr>
				<th>Citation Number</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Address</th>
				<th>Email</th>
				<th>Telephone Number</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Blood Group</th>
				<th>Extra Information</th>
			</tr>
			<tr>
				<td>STMH/2001</td>
				<td>Lucien</td>
				<td>Mak</td>
				<td>Nairobi, Kenya</td>
				<td>lucien@gmail.com</td>
				<td>07700000</td>
				<td>12</td>
				<td>M</td>
				<td>O+</td>
				<td>Headache</td>
			</tr>
			<tr>
				<td>STMH/200</td>
				<td>Kirtan</td>
				<td>Patel</td>
				<td>Nairobi, Kenya</td>
				<td>k.patel@gmail.com</td>
				<td>077870000</td>
				<td>15</td>
				<td>M</td>
				<td>O+</td>
				<td>Stomachache</td>
			</tr>
			<tr>
				<td>STMH/20</td>
				<td>Bill</td>
				<td>Nyerere</td>
				<td>Nairobi, Kenya</td>
				<td>bill@gmail.com</td>
				<td>07707900</td>
				<td>18</td>
				<td>M</td>
				<td>O+</td>
				<td>Headache</td>
			</tr>
			<tr>
				<td>STMH/28</td>
				<td>Chris</td>
				<td>Maunga</td>
				<td>Nairobi, Kenya</td>
				<td>chris@gmail.com</td>
				<td>07707911</td>
				<td>15</td>
				<td>M</td>
				<td>O+</td>
				<td>Headache</td>
			</tr>
		</table>
	</div>
    <?php endblock() ?>
<?php end_extend() ?>
