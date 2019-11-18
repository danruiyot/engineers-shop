<div class="container border bg-light">
	<br>
<?php if ($this->session->flashdata('success')): ?>                 
            <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
        <?php elseif ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php endif; ?>
   <div class="row">
   <div class="col-sm-8"><h2></b><h2><?php echo $title; ?></h2></h2></div>
   <div class="col-sm-4">
      <button type="button" class="btn float-right btn-info add-new"><span style="color: white;"><a href="<?php echo base_url('employee/view/') ?>"><i class="fa fa-list"></i> list</a> </span></button>
   </div>
  <hr>
 
</div>
<?php echo validation_errors(); ?>
<?php if (! empty($item)) {
	echo form_open('employee/create/'.$item['employee_id']);
}else{ ?>
<?php echo form_open('employee/create'); ?>
<?php } ?>

<label for="email" class="mr-sm-2">Name:</label>
<input type="text" class="form-control mb-2 mr-sm-2" name="employee_name" value="<?php echo $item['employee_name']; ?>">

<label for="pwd" class="mr-sm-2">Address:</label>
<input type="text" class="form-control mb-2 mr-sm-2" name="address" value="<?php echo $item['address']; ?>">

<label for="email" class="mr-sm-2">Pincode:</label>
<input type="text" class="form-control mb-2 mr-sm-2" name="pincode" value="<?php echo $item['pincode']; ?>">

<label for="email" class="mr-sm-2">Current Desination:</label>
<input type="text" class="form-control mb-2 mr-sm-2" name="current_desi" value="<?php echo $item['current_desi']; ?>">

<label for="pwd" class="mr-sm-2">Work Proof:</label>
<input type="text" class="form-control mb-2 mr-sm-2" name="workpprof" value="<?php echo $item['workpprof']; ?>">

<label for="pwd" class="mr-sm-2">Email id:</label>
<input type="email" class="form-control mb-2 mr-sm-2" name="email_id" value="<?php echo $item['email_id']; ?>">

<label for="pwd" class="mr-sm-2">Mobile 1:</label>
<input type="tel" class="form-control mb-2 mr-sm-2" name="mobile_1" value="<?php echo $item['mobile_1']; ?>">

<label for="pwd" class="mr-sm-2">Mobile 2:</label>
<input type="tel" class="form-control mb-2 mr-sm-2" name="mobile_2" value="<?php echo $item['mobile_2']; ?>">

<label for="pwd" class="mr-sm-2">Current experience:</label>
<input type="text" class="form-control mb-2 mr-sm-2" name="current_ex" value="<?php echo $item['current_ex']; ?>">

<label for="pwd" class="mr-sm-2">Past experience:</label>
<input type="text" class="form-control mb-2 mr-sm-2" name="past_ex" value="<?php echo $item['past_ex']; ?>">

<label for="email" class="mr-sm-2">Whatsapp number:</label>
<input type="tel" class="form-control mb-2 mr-sm-2" name="whatsapp_no" value="<?php echo $item['whatsapp_no']; ?>">

<input type="submit" class="btn btn-info" name="submit" value="submit" />

</form>
<br>
</div>