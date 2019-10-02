<?php extend('layouts/layout.php') ?>
    <?php startblock('title') ?>
    <?php endblock() ?>

    <?php startblock('extra_head') ?>
	<link rel="stylesheet" href="<?= base_url('assets/css/adminhome.css') ?>"> <!--xmlns="http://www.w3.org/1999/html"-->
    <?php endblock() ?>

    <?php startblock('banner') ?>
    <p>lucien<br><small>admin</small></p>
    <?php endblock() ?>
    <?php startblock('menu') ?>
    <ul>
        <li id="profile-picture"><a href="#"><img src="<?= base_url('assets/images/user.png')?>" alt="profile picture"></a></li>
        <li><a href="#">Home</a></li>
		<li><a href="#">Add user</a></li>
		<li><a href="#">Delete user</a></li>
        <li><a href="#">Add news</a></li>
        <li><a href="#">Logout</a></li>
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
				<tr>
					<td>christian</td>
					<td>maunga</td>
					<td>2017-01-01</td>
					<td>male</td>
					<td>christian.m@gmail.com</td>
					<td>0712000000</td>
					<td>admin</td>
				</tr>
				<tr>
					<td>kirtan</td>
					<td>patel</td>
					<td>2018-01-01</td>
					<td>male</td>
					<td>kirtan.p@gmail.com</td>
					<td>0712300000</td>
					<td>admin</td>
				</tr>
				<tr>
					<td>Bill</td>
					<td>Nyerere</td>
					<td>2019-01-01</td>
					<td>male</td>
					<td>bill.n@gmail.com</td>
					<td>0712340000</td>
					<td>admin</td>
				</tr>
				<tr>
					<td>john</td>
					<td>smith</td>
					<td>2018-01-01</td>
					<td>male</td>
					<td>j.smith@gmail.com</td>
					<td>0710000000</td>
					<td>nurse</td>
				</tr>
				<tr>
					<td>ruth</td>
					<td>trump</td>
					<td>2017-01-01</td>
					<td>female</td>
					<td>ruth.t@gmail.com</td>
					<td>0700000000</td>
					<td>doctor</td>
				</tr>
				<tr>
					<td>Adel</td>
					<td>Noble</td>
					<td>2019-05-01</td>
					<td>female</td>
					<td>adel.noble@gmail.com</td>
					<td>0720000000</td>
					<td>pharmacist</td>
				</tr>
				<tr>
					<td>Adel</td>
					<td>Noble</td>
					<td>2019-05-01</td>
					<td>female</td>
					<td>adel.noble@gmail.com</td>
					<td>0720000000</td>
					<td>pharmacist</td>
				</tr>
				<tr>
					<td>Adel</td>
					<td>Noble</td>
					<td>2019-05-01</td>
					<td>female</td>
					<td>adel.noble@gmail.com</td>
					<td>0720000000</td>
					<td>pharmacist</td>
				</tr>
				<tr>
					<td>Adel</td>
					<td>Noble</td>
					<td>2019-05-01</td>
					<td>female</td>
					<td>adel.noble@gmail.com</td>
					<td>0720000000</td>
					<td>pharmacist</td>
				</tr>
				<tr>
					<td>Adel</td>
					<td>Noble</td>
					<td>2019-05-01</td>
					<td>female</td>
					<td>adel.noble@gmail.com</td>
					<td>0720000000</td>
					<td>pharmacist</td>
				</tr>
				<tr>
					<td>Adel</td>
					<td>Noble</td>
					<td>2019-05-01</td>
					<td>female</td>
					<td>adel.noble@gmail.com</td>
					<td>0720000000</td>
					<td>pharmacist</td>
				</tr>
				<tr>
					<td>Adel</td>
					<td>Noble</td>
					<td>2019-05-01</td>
					<td>female</td>
					<td>adel.noble@gmail.com</td>
					<td>0720000000</td>
					<td>pharmacist</td>
				</tr>
				<tr>
					<td>Adel</td>
					<td>Noble</td>
					<td>2019-05-01</td>
					<td>female</td>
					<td>adel.noble@gmail.com</td>
					<td>0720000000</td>
					<td>pharmacist</td>
				</tr>
				<tr>
					<td>Adel</td>
					<td>Noble</td>
					<td>2019-05-01</td>
					<td>female</td>
					<td>adel.noble@gmail.com</td>
					<td>0720000000</td>
					<td>pharmacist</td>
				</tr>
				<tr>
					<td>Adel</td>
					<td>Noble</td>
					<td>2019-05-01</td>
					<td>female</td>
					<td>adel.noble@gmail.com</td>
					<td>0720000000</td>
					<td>pharmacist</td>
				</tr>
				<tr>
					<td>Adel</td>
					<td>Noble</td>
					<td>2019-05-01</td>
					<td>female</td>
					<td>adel.noble@gmail.com</td>
					<td>0720000000</td>
					<td>pharmacist</td>
				</tr>
				<tr>
					<td>Adel</td>
					<td>Noble</td>
					<td>2019-05-01</td>
					<td>female</td>
					<td>adel.noble@gmail.com</td>
					<td>0720000000</td>
					<td>pharmacist</td>
				</tr>
				<tr>
					<td>Adel</td>
					<td>Noble</td>
					<td>2019-05-01</td>
					<td>female</td>
					<td>adel.noble@gmail.com</td>
					<td>0720000000</td>
					<td>pharmacist</td>
				</tr>
			</table>
		</div>
    <?php endblock() ?>
<?php end_extend() ?>
