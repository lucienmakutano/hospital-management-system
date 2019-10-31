
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
		<li><a href="<?= site_url('nurse/diagnosis') ?>">Diagnosis results</a></li>
		<li><a href="<?= site_url('nurse/newAppointment') ?>">Book appointment</a></li>
		<li><a href="<?= site_url('nurse/assignRoom') ?>">Assign wards</a></li>
		<li><a href="<?= site_url('nurse/add_room')?>">Add room</a></li>
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
				<th>Date of birth</th>
				<th>Gender</th>
				<th>Telephone Number</th>
				<th>Address</th>
				<th>manage patient</th>
			</tr>
			
				<?php if(isset($patientInfos)): ?>
					<?php foreach($patientInfos as $patientInfo): ?>
						<tr>
						<td><?php echo $patientInfo->Citation_card ?></td>
						<td><?php echo $patientInfo->fname ?></td>
						<td><?php echo $patientInfo->lname ?></td>
						<td><?php echo $patientInfo->DOB ?></td>
						<td><?php echo $patientInfo->gender ?></td>
						<td><?php echo $patientInfo->phonenumber ?></td>
						<td><?php echo $patientInfo->address ?></td>
						<td><a href="<?php echo site_url("nurse/edit_patient/$patientInfo->Citation_card")?>" id="edit-btn" >Edit</a>
							<a href="<?php echo site_url("nurse/delete_patient/$patientInfo->Citation_card")?>" id="delete-btn">Delete</a></td>
						</tr>
					<?php endforeach ?>
				<?php endif?>
			
		</table>
	</div>
    <?php endblock() ?>
<?php end_extend() ?>
