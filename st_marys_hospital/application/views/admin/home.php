<?php extend('layouts/layout.php') ?>
    <?php startblock('title') ?>
    <?php endblock() ?>

    <?php startblock('extra_head') ?>
	<link rel="stylesheet" href="<?= base_url('assets/css/adminhome.css') ?>">
    <?php endblock() ?>

    <?php startblock('banner') ?>
    <p>lucien<br><small>admin</small></p>
	<?php get_extended_block();?>
    <?php endblock() ?>
    <?php startblock('menu') ?>

    <ul>
        <li id="profile-picture"><a href="#"><img src="<?= base_url('assets/images/user.png')?>" alt="profile picture"></a></li>
        <li><a href="<?= site_url('admin/') ?>">Home</a></li>
		<li><a href="<?= site_url('admin/addUser')?>">Add user</a></li>
        <li><a href="<?= site_url('admin/news') ?>">Add news</a></li>
        <li><a href="<?= site_url('requests/logout')?>">Logout</a></li>
    </ul>
    <?php endblock() ?>
    <?php startblock('content') ?>
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
