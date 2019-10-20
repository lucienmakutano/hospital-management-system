<?php extend("layouts/layout.php") ?>
    <?php startblock("title") ?>
<title>home - pharmacy - st marys hospital</title>
    <?php endblock() ?>

    <?php startblock("extra_head") ?>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/adminhome.css')?>">
    <?php endblock() ?>

    <?php startblock("banner") ?>
    <p>Bill<br><small>Pharmacist</small></p>
	<?php get_extended_block();?>
    <?php endblock() ?>

    <?php startblock("menu") ?>
		<ul>
			<li id="profile-picture"><a><img src="<?= base_url('assets/images/doc.png')?>" alt="profile picture" width="200px"></a></li>
			<li><a>Home</a></li>
			<li><a>View Prescriptions</a></li>
			<li><a>Add Medicines</a></li>
			<li><a href="<?= site_url('requests/logout')?>">Logout</a></li>
		</ul>
    <?php endblock() ?>

    <?php startblock("content") ?>
	<div class="responsive-table">
		<h3>Available Medicines</h3>
		<table>
			<tr>
				<th>Name</th>
				<th>quantity</th>
				<th>manufacturer</th>
				<th>provider</th>
			</tr>
<!--			--><?php //foreach ($data as $dt): ?>
			<tr>
				<td>Acetaminophen</td>
				<td>100</td>
				<td>McNeil Consumer Healthcare</td>
				<td>Health Plus</td>
			</tr>
<!--			--><?php //endforeach; ?>
		</table> 
	</div>
    <?php endblock() ?>
<?php end_extend() ?>
