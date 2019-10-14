<?php extend('doctor/home.php') ?>
<?php startblock('title') ?>
<?php endblock() ?>

<?php startblock('extra_head') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/Booking.css') ?>">
<?php endblock() ?>

<?php startblock('banner') ?>
<?php get_extended_block();?>
<?php endblock() ?>

<?php startblock('menu') ?>
	<?php get_extended_block(); ?>
<?php endblock() ?>
<?php startblock('content') ?>
    <div class="prescription-form">
        <?= validation_errors() ?>
        <?= form_open('requests/new_priscription') ?>
        <label> Patient's citation card number <br>
            <input type="text" required>
        </label>
        <label> Doctor's ID <br>
            <input type="text" required>
        </label>
        <label> Prescription Details <br>
            <textarea name="name" rows="8" cols="80"></textarea>
        </label><br>
        <input type="submit" name="btn" class="ptn-btn" value="Submit">
    	<?= form_close()?>
    </div>
<?php endblock() ?>
<?php end_extend() ?>
