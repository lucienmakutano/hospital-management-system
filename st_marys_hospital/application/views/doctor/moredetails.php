<?php extend('doctor/home.php') ?>
<?php startblock('title') ?>
<?php endblock() ?>

<?php startblock('extra_head') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/moredetails.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/alert.css') ?>">
<?php endblock() ?>

<?php startblock('banner') ?>
<?php get_extended_block();?>
<?php endblock() ?>

<?php startblock('menu') ?>
	<?php get_extended_block(); ?>
<?php endblock() ?>
<?php startblock('content') ?>
		<div class="moredetails-form">
		
				<div class="moredetails-content">
					<table>
						<tr>
							<th>Citation card number </th>
							<th>Bloody group </th>
							<th>Height </th>
							<th>Weight </th>
							<th>Symptoms </th>
						</tr>
						<tr>
							<td>10</td>
							<td>O+</td>
							<td>5 feet</td>
							<td>50 kg</td>
							<td>flu<br>headache<br>fever</td>
						</tr>
						
					</table>
					<button>Checked</button>
				</div>
			
	</div>
<?php endblock() ?>
<?php end_extend() ?>