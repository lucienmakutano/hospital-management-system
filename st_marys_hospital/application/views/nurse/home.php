
<?php extend("layouts/layout.php") ?>
    <?php startblock("title") ?>
    <?php endblock() ?>

    <?php startblock("extra_head") ?>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/admin.home.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/alert.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/nurseHome.css')?>">

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- bootstrap javascript&jquery-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
		<form action="<?php echo site_url('nurse')?>" method="post">
			<div>
				<label>
					<input type="text" placeholder="search by first name" name="search" autocomplete="off">
				</label>
				<button type="submit">search</button>
				<?php echo form_error('search', '<small class=alert>', '</small>')?>
			</div>
		</form>
	</div>
	<hr>
	<div id="responsive-table">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="home-tab" data-toggle="tab" href="#patient" role="tab" aria-controls="home" aria-selected="true">Patients list</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="profile-tab" data-toggle="tab" href="#appointment" role="tab" aria-controls="profile" aria-selected="false">Appointments list</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">

			<div class="tab-pane fade show active" id="patient" role="tabpanel" aria-labelledby="home-tab">
				<h3>Patient Information</h3>
				<?php
				$records = paginatePatients("patient");
				$this->table->set_heading('Citation Card', 'First Name', 'Last Name', 'Date Of Birth' ,'Gender', 'Phone Number', 'Address');
				echo $this->table->generate($records);
				echo '<div class="pager">' . $this->pagination->create_links() . "</div>";

				?>
			</div>



			<div class="tab-pane fade" id="appointment" role="tabpanel" aria-labelledby="profile-tab">
				<h3>Appointments</h3>
				<?php
				$records = paginateAppointments("appointment");
				$this->table->set_heading('Citation card', 'Doctor', 'date', 'summary');
				echo $this->table->generate($records);
				echo '<div class="pager">' . $this->pagination->create_links() . "</div>";
				?>
			</div>
		</div>
	</div>
    <?php endblock() ?>
<?php end_extend() ?>
