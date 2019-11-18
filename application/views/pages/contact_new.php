<div class="container border bg-light">
	<br>
<h2><?php echo $title; ?></h2>
<?php if ($this->session->flashdata('success')): ?>                 
            <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
        <?php elseif ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php endif; ?>

<?php echo validation_errors(); ?>
<?php if (! empty($item)) {
	echo form_open('contact/create/'.$item['contact_id']);
}else{ ?>
<?php echo form_open('contact/create'); ?>
<?php } ?>


<label for="email" class="mr-sm-2">Name:</label>
<input type="text" class="form-control mb-2 mr-sm-2" name="contact_name" value="<?php echo $item['contact_name']; ?>">

<label for="pwd" class="mr-sm-2">Designation:</label>
<input type="text" class="form-control mb-2 mr-sm-2" name="designation" value="<?php echo $item['designation']; ?>">

<label for="email" class="mr-sm-2">Email 1:</label>
<input type="email" class="form-control mb-2 mr-sm-2" name="mail1" value="<?php echo $item['mail1']; ?>">

<label for="email" class="mr-sm-2">Email 2:</label>
<input type="email" class="form-control mb-2 mr-sm-2" name="mail2" value="<?php echo $item['mail2']; ?>">

<label for="pwd" class="mr-sm-2">Mobile 1:</label>
<input type="tel" class="form-control mb-2 mr-sm-2" name="mobile1" value="<?php echo $item['mobile1']; ?>">

<label for="pwd" class="mr-sm-2">Mobile 2:</label>
<input type="tel" class="form-control mb-2 mr-sm-2" name="mobile2" value="<?php echo $item['mobile2']; ?>">

<label for="pwd" class="mr-sm-2">Mobile 3:</label>
<input type="tel" class="form-control mb-2 mr-sm-2" name="mobile3" value="<?php echo $item['mobile3']; ?>">

<label for="pwd" class="mr-sm-2">Mobile 4:</label>
<input type="tel" class="form-control mb-2 mr-sm-2" name="mobile4" value="<?php echo $item['mobile4']; ?>">

<label for="email" class="mr-sm-2">Whatsapp number:</label>
<input type="tel" class="form-control mb-2 mr-sm-2" name="whatsapp_no" value="<?php echo $item['whatsapp_no']; ?>">

<input type="submit" class="btn btn-info" name="submit" value="submit" />

</form>
<br>
</div>