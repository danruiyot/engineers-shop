<div class="container border bg-light">
	<br>
<h2><?php echo $title; ?></h2>
<?php if ($this->session->flashdata('success')): ?>                 
            <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
        <?php elseif ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php endif; ?>

<?php echo validation_errors(); ?>

<?php echo form_open('home/create'); ?>

<label for="email" class="mr-sm-2">vendor_name:</label>
<input type="text" class="form-control mb-2 mr-sm-2" name="vendor_name">

<label for="pwd" class="mr-sm-2">Location:</label>
<input type="text" class="form-control mb-2 mr-sm-2" name="address">

<label for="email" class="mr-sm-2">Email 1:</label>
<input type="email" class="form-control mb-2 mr-sm-2" name="mail1">

<label for="email" class="mr-sm-2">Email 2:</label>
<input type="email" class="form-control mb-2 mr-sm-2" name="mail2">

<label for="pwd" class="mr-sm-2">Mobile 1:</label>
<input type="tel" class="form-control mb-2 mr-sm-2" name="mobile1">

<label for="pwd" class="mr-sm-2">Mobile 2:</label>
<input type="tel" class="form-control mb-2 mr-sm-2" name="mobile2">

<label for="pwd" class="mr-sm-2">Mobile 3:</label>
<input type="tel" class="form-control mb-2 mr-sm-2" name="mobile3">

<label for="pwd" class="mr-sm-2">Mobile 4:</label>
<input type="tel" class="form-control mb-2 mr-sm-2" name="mobile4">

<label for="email" class="mr-sm-2">Product:</label>
<input type="text" class="form-control mb-2 mr-sm-2" name="product">

<label for="email" class="mr-sm-2">Whatsapp number:</label>
<input type="tel" class="form-control mb-2 mr-sm-2" name="whatsapp_no">

<label for="email" class="mr-sm-2">Contact Person:</label>
<input type="text" class="form-control mb-2 mr-sm-2" name="contact_person">


<input type="submit" class="btn btn-info" name="submit" value="Add New Vendor" />

</form>
</div>