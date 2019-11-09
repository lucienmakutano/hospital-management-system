<?php extend('nurse/home.php') ?>
<?php startblock('title') ?>
<?php endblock() ?>

<?php startblock('extra_head') ?>
	<link rel="stylesheet" href="<?= base_url('assets/css/nursePatient.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/alert.css') ?>">
<?php endblock() ?>

<?php startblock('banner') ?>
<?php get_extended_block();?>
<?php endblock() ?>

<?php startblock('menu') ?>
	<?php get_extended_block(); ?>
<?php endblock() ?>


<?php startblock('content') ?>
<div class="patient-form">
    <h2>New Appointment</h2>
	<?= form_open('requests/book_appointment') ?>
        <label> Patient's citation card <br>
    		<input type="number" autocomplete="off" value="<?php echo set_value('card') ?>" name="card" >
			<?php echo form_error('card', '<div class=alert>', '</div>') ?>
    	</label>
        <label> Doctor's name <br>
			<select name="id" id="">
				<?php if (isset($doctors)): ?>
					<?php foreach ($doctors as $doctor):?>
						<option value="<?php echo $doctor->staff_id?>">
							<?php echo $doctor->fname?>&nbsp;&nbsp;<?php echo $doctor->lname?>
						</option>
					<?php endforeach?>
				<?php endif; ?>
			</select>
			<?php echo form_error('id', '<div class=alert>', '</div>') ?>
    	</label>
        <label>Appointment Date<br>
        	<input type="datetime-local" autocomplete="off" value="<?php echo set_value('date') ?>" name="date">
			<?php echo form_error('date', '<div class=alert>', '</div>') ?>
        </label>
        <label> Brief summary of the symptom <br>
    		<textarea name="symptom" autocomplete="off" value="<?php echo set_value('symptom') ?>" rows="8" cols="80"></textarea>
			<?php echo form_error('symptom', '<div class=alert>', '</div>') ?>
    	</label><br>
        <div class="">
            <input type="submit" name="btn" class="ptn-btn" value="Book appointment">
        </div>
	<?= form_close()?>
</div>
<?php endblock() ?>
<?php end_extend() ?>
