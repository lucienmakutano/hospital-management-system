<?php extend("layouts/layout.php") ?>
    <?php startblock("title") ?>
<title>home - pharmacy - st marys hospital</title>
    <?php endblock() ?>

    <?php startblock("extra_head") ?>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/admin.home.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/avatar.css') ?>">
    <?php endblock() ?>

    <?php startblock("banner") ?>
	<p><?php echo $this->session->userdata('firstName') . " " . $this->session->userdata('lastName')?><br><small>Pharmacist</small></p>
	<?php get_extended_block();?>
    <?php endblock() ?>

    <?php startblock("menu") ?>
		<ul>
			<li id="profile-picture"><a><img src="<?= $this->session->userdata('profile picture')?>" alt="profile picture"></a></li>
			<li><a href="<?= site_url('pharmacist') ?>">Home</a></li>
			<li><a href="<?= site_url('pharmacist/view_prescription') ?>">View Prescriptions</a></li>
			<li><a href="<?= site_url('pharmacist/addMedicine') ?>">Add Medicines</a></li>
			<li><a href="<?= site_url('pharmacist/provider') ?>">Add Provider</a></li>
		</ul>
    <?php endblock() ?>

    <?php startblock("content") ?>
	<div class="responsive-table">
		<h3>Available Medicines</h3>
		<table>
			<tr>
				<th>Name</th>
				<th>quantity</th>
				<th>Price per tablet</th>
				<th>provider</th>
			</tr>
			<?php if (isset($medicines)): ?>
				<?php foreach ($medicines as $medicine): ?>
					<tr>
						<td> <?php echo $medicine->medicine_name ?> </td>
						<td> <?php echo $medicine->quantity ?> </td>
						<td> <?php echo $medicine->price_per_tablet ?> </td>
						<td> <?php echo $medicine->name ?> </td>
					</tr>
				<?php endforeach; ?>
			<?php endif;?>
		</table>
	</div>
    <?php endblock() ?>
<?php end_extend() ?>
