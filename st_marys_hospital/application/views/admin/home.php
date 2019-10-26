<?php extend('layouts/layout.php') ?>
    <?php startblock('title') ?>
    <?php endblock() ?>

    <?php startblock('extra_head') ?>
	<link rel="stylesheet" href="<?= base_url('assets/css/adminhome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/alert.css') ?>">
    <?php endblock() ?>

    <?php startblock('banner') ?>
	<p><?php echo $this->session->userdata('firstName') . " " . $this->session->userdata('lastName')?><br><small>admin</small></p>
	<?php get_extended_block();?>
    <?php endblock() ?>
    <?php startblock('menu') ?>

    <ul>
        <li id="profile-picture"><a href="#"><img src="<?= $this->session->userdata('profile picture')?>" alt="profile picture"></a></li>
        <li><a href="<?= site_url('admin/') ?>">Home</a></li>
		<li><a href="<?= site_url('admin/addUser')?>">Add user</a></li>
        <li><a href="<?= site_url('admin/news') ?>">Add news</a></li>
    </ul>
    <?php endblock() ?>
    <?php startblock('content') ?>
		<?php
		if ($this->session->flashdata('message')){
			echo "<p class='alert alert-success'>".$this->session->flashdata('message')."</p>";
		}
		?>
		<div class="responsive-table">
			<h3>Users</h3>
			<table>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Date Of Birth</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone Number</th>
					<th>User Type</th>
				</tr>
				<?php if (isset($users)): ?>
					<?php foreach ($users as $user): ?>
						<tr>
							<td><?php echo $user->fname ?></td>
							<td><?php echo $user->lname  ?></td>
							<td><?php echo $user->dob  ?></td>
							<td><?php echo $user->gender  ?></td>
							<td><?php echo $user->email  ?></td>
							<td><?php echo $user->phone_number  ?></td>
							<td><?php echo $user->user_type  ?></td>
						</tr>
					<?php endforeach; ?>
				<?php else: ?>
					<h2>No records was found</h2>
				<?php endif?>
			</table>
		</div>
    <?php endblock() ?>
<?php end_extend() ?>
