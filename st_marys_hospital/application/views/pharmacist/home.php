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
			<tr>
				<td>Acetaminophen</td>
				<td>100</td>
				<td>McNeil Consumer Healthcare</td>
				<td>Health Plus</td>
			</tr>
			<tr>
				<td>adderall</td>
				<td>120</td>
				<td>McNeil Consumer Healthcare</td>
				<td>Health Forum</td>
			</tr>
			<tr>
				<td>Acetaminophen</td>
				<td>90</td>
				<td>Shire Pharmaceuticals</td>
				<td>Health Forum</td>
			</tr>
			<tr>
				<td>Alprazolam</td>
				<td>500</td>
				<td>Pfizer</td>
				<td>Sato innovation</td>
			</tr>
			<tr>
				<td>Amitriptyline </td>
				<td>100</td>
				<td>Mylan Pharmaceuticals Inc</td>
				<td>Sato innovation</td>
			</tr>
			<tr>
				<td>Amitriptyline </td>
				<td>1000</td>
				<td>Mylan Pharmaceuticals Inc</td>
				<td>Peak moments</td>
			</tr>
			<tr>
				<td>Amitriptyline </td>
				<td>100</td>
				<td>Mylan Pharmaceuticals Inc</td>
				<td>Peak moments</td>
			</tr>
		</table>
	</div>
    <?php endblock() ?>
<?php end_extend() ?>
