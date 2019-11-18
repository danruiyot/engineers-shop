<div class="container bg-light border">
	<br>
	<div class="row">
	<div class="col-sm-8"><h2></b><h2><?php echo $title; ?></h2></h2></div>
	<div class="col-sm-4">
		<a class="btn float-right btn-info add-new" style="color: white;" href="<?php echo base_url('employee/view/') ?>"><i class="fa fa-list"></i> list</a>
	</div>
</div>

<div class="table-responsive">
<table class="table table-bordered">
<tr>
<th for="email" class="mr-sm-2">Name:</th>
<td><?php echo $item['employee_name']; ?></td>
</tr><tr>
<th for="pwd" class="mr-sm-2">Address:</th>
<td><?php echo $item['address']; ?></td>
</tr><tr>
<th for="email" class="mr-sm-2">Pincode:</th>
<td><?php echo $item['pincode']; ?></td>
</tr><tr>
<th for="email" class="mr-sm-2">Current Desination:</th>
<td><?php echo $item['current_desi']; ?></td>
</tr><tr>
<th for="pwd" class="mr-sm-2">Work Proof:</th>
<td><?php echo $item['workpprof']; ?></td>
</tr><tr>
<th for="pwd" class="mr-sm-2">Email id:</th>
<td><?php echo $item['email_id']; ?></td>
</tr><tr>
<th for="pwd" class="mr-sm-2">Mobile 1:</th>
<td><?php echo $item['mobile_1']; ?></td>
</tr><tr>
<th for="pwd" class="mr-sm-2">Mobile 2:</th>
<td><?php echo $item['mobile_2']; ?></td>
</tr><tr>
<th for="pwd" class="mr-sm-2">Current experience:</th>
<td><?php echo $item['current_ex']; ?></td>
</tr><tr>
<th for="pwd" class="mr-sm-2">Past experience:</th>
<td><?php echo $item['past_ex']; ?></td>
</tr><tr>
<th for="email" class="mr-sm-2">Whatsapp number:</th>
<td><?php echo $item['whatsapp_no']; ?></td>
</tr>
</table>
</div>
<br>
</div>