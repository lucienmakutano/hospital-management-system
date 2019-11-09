<?php extend('layouts/layout.php') ?>
    <?php startblock('title') ?>
    <?php endblock() ?>

    <?php startblock('extra_head') ?>
	<link rel="stylesheet" href="<?= base_url('assets/css/admin.home.css') ?>">
<!--	<link rel="stylesheet" href="--><?//= base_url('assets/css/materialize.min.css') ?><!--">-->
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
			<div id="search-filter">
				<form action="<?php echo site_url('admin')?>" method="post">
					<label for="">filter by</label>
					<select name="" id="">
						<option value="">filter</option>
					</select>
				</form>


				<form action="<?php echo site_url('admin')?>" method="post">
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
			<h3>Users</h3>
			<?php
			if (isset($records)){
				$users = $records->result_array();
				if (isset($users)){
					$this->table->set_heading('First Name', 'Last Name', 'Date Of Birth', 'Gender', 'Email', 'Phone Number', 'User Type', 'manage user');
					echo $this->table->generate($records);
					echo '<div class="pager">' . $this->pagination->create_links() . "</div>";
				}
			}
			else{
				echo "<h1>" . "No such records exists" . "</h1>>";
			}

			?>
		</div>
    <?php endblock() ?>
<?php end_extend() ?>

<!--<td>
	<a type="submit" href="<?php /*echo site_url("admin/delete_user/") */?>" id="edit-btn">edit</a>

	'<a type="submit" href="<?php /*echo site_url("admin/delete_user/") */?>"
		onclick="return confirm('are you sure you want to delete <?php /*echo '' */?> ?')" id="delete-btn">delete</a>'
</td>-->
