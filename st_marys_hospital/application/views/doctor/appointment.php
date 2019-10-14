<?php extend('doctor/home.php') ?>
<?php startblock('title') ?>
<?php endblock() ?>

<?php startblock('extra_head') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/ShowAtp.css') ?>">
<?php endblock() ?>

<?php startblock('banner') ?>
<?php get_extended_block();?>
<?php endblock() ?>

<?php startblock('menu') ?>
	<?php get_extended_block(); ?>
<?php endblock() ?>
<?php startblock('content') ?>
<div class="showapt-form">
	<?= validation_errors()?>

	<?= form_open('form') ?>
         <h2 id="upcoming">Upcoming Appointments</h2>
         <table>
             <tr>
                <th>Name</th>
                <th>Citation ID</th>
                <th>Gender</th>
                <th>Sympton</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
            <tr>
                <td>Kirtan</td>
                <td>001</td>
                <td>Male</td>
                <td>Flu and headaches</td>
                <td>29-oct-2019</td>
                <td>10:00</td>
            </tr>
            <tr>
                <td>lucien</td>
                <td>002</td>
                <td>Male</td>
                <td>Flu and headaches</td>
                <td>29-oct-2019</td>
                <td>13:00</td>
            </tr>
            <tr>
                <td>Bill</td>
                <td>23</td>
                <td>Male</td>
                <td>Flu and headaches</td>
                <td>1-nov-2019</td>
                <td>9:30</td>
            </tr>
            <tr>
                <td>Chris</td>
                <td>23</td>
                <td>Male</td>
                <td>Flu and headaches</td>
                <td>1-nov-2019</td>
                <td>9:30</td>
            </tr>
            <tr>
                <td>Chris</td>
                <td>23</td>
                <td>Male</td>
                <td>Flu and headaches</td>
                <td>1-nov-2019</td>
                <td>9:30</td>
            </tr>
            <tr>
                <td>Chris</td>
                <td>23</td>
                <td>Male</td>
                <td>Flu and headaches</td>
                <td>1-nov-2019</td>
                <td>9:30</td>
            </tr>
            <tr>
                <td>Chris</td>
                <td>23</td>
                <td>Male</td>
                <td>Flu and headaches</td>
                <td>1-nov-2019</td>
                <td>9:30</td>
            </tr>
            <tr>
                <td>Chris</td>
                <td>23</td>
                <td>Male</td>
                <td>Flu and headaches</td>
                <td>1-nov-2019</td>
                <td>9:30</td>
            </tr>
                <tr>
                    <td><a href="#">Chris</a></td>
                    </a>
                    <td>23</td>
                    <td>Male</td>
                    <td>Flu and headaches</td>
                    <td>1-nov-2019</td>
                    <td>9:30</td>
                </tr>
         </table>
	<?= form_close()?>
</div>
<?php endblock() ?>
<?php end_extend() ?>
