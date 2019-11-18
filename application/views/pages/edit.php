<div class="container bg-light border">
<div class="row">
	<div class="col-sm-8"><h2></b><h2><?php echo $title; ?></h2></h2></div>
	<div class="col-sm-4">
		<a class="btn float-right btn-info add-new" style="color: white;" href="<?php echo base_url('customer/view/') ?>"><i class="fa fa-list"></i> list</a>
	</div>
</div>
<?php echo validation_errors(); ?>

<form action="<?php echo site_url('home/create/'.$item['v_id']) ?>" method="post" onsubmit="alert('Are you sure?')">

<label for="email" class="mr-sm-2">vendor_name:</label>
<input type="text" class="form-control mb-2 mr-sm-2" value="<?php echo $item['vendor_name']; ?>" name="vendor_name">


<label for="pwd" class="mr-sm-2">Location:</label>
<input type="text" class="form-control mb-2 mr-sm-2" value="<?php echo $item['address']; ?>" name="address">

<label for="email" class="mr-sm-2">Email 1:</label>
<input type="email" class="form-control mb-2 mr-sm-2" value="<?php echo $item['mail1']; ?>" name="mail1">

<label for="email" class="mr-sm-2">Email 2:</label>
<input type="email" class="form-control mb-2 mr-sm-2" value="<?php echo $item['mail2']; ?>" name="mail2">

<label for="pwd" class="mr-sm-2">Mobile 1:</label>
<input type="tel" class="form-control mb-2 mr-sm-2" value="<?php echo $item['mobile1']; ?>" name="mobile1">

<label for="pwd" class="mr-sm-2">Mobile 2:</label>
<input type="tel" class="form-control mb-2 mr-sm-2" value="<?php echo $item['mobile2']; ?>" name="mobile2">

<label for="pwd" class="mr-sm-2">Mobile 3:</label>
<input type="tel" class="form-control mb-2 mr-sm-2" value="<?php echo $item['mobile3']; ?>" name="mobile3">

<label for="pwd" class="mr-sm-2">Mobile 4:</label>
<input type="tel" class="form-control mb-2 mr-sm-2" value="<?php echo $item['mobile4']; ?>" name="mobile4">

<label for="email" class="mr-sm-2">Product:</label>
<input type="text" class="form-control mb-2 mr-sm-2" value="<?php echo $item['product']; ?>" name="product">

<label for="email" class="mr-sm-2">Product:</label>
<input type="tel" class="form-control mb-2 mr-sm-2" value="<?php echo $item['whatsapp_no']; ?>" name="whatsapp_no">

<label for="email" class="mr-sm-2">Product:</label>
<input type="text" class="form-control mb-2 mr-sm-2" value="<?php echo $item['contact_person']; ?>" name="contact_person">


<input type="submit" class="btn btn-info" name="submit" value="edit Vendor" />

</form>
</div>