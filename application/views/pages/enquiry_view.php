<div class="container border bg-light">
	<br>
	<div class="row">
	<div class="col-sm-8"><h2></b><h2><?php echo $title; ?></h2></h2></div>
	<div class="col-sm-4">
		<button type="button" class="btn float-right btn-info add-new"><a style="color: white;" href="<?php echo base_url('enquiry/') ?>"><i class="fa fa-list"></i> List</a> </button>
	</div>
</div>
<br>
	<div class="">
		<table class="table table-bordered">
			<tr><?php foreach ($customs as $itemss): ?>
				<th>Customer name</th>
				<td><?php echo $itemss['customer_name']; ?></td>
			</tr>	<?php	endforeach; ?>
			<tr>
				<th>Customer Requirement</th>
				<td><?php echo $item['customer_requirements']; ?></td>
			</tr>
			<tr>
				<th>Product or Sevice</th>
				<td><?php echo $item['product_service']; ?></td>
			</tr>
			<tr>
				<th>Category</th>
				<td><?php echo $item['product_service_name']; ?></td>
			</tr>
			<tr>
				<th>Email 1</th>
				<td><?php echo $item['quantity']; ?></td>
			</tr>
			<tr>
				<th>Datasheet</th>
				<td><a download="" href="<?php echo base_url('assets/docs/').$item['datasheet']; ?>">Download</a></td>
			</tr>	
				<tr>
				<th>Images</th>
				<td><a download="" href="<?php echo base_url('assets/docs/').$item['files']; ?>">Download</a></td>
			</tr>
			<tr>
				<th>Is viti to manager or dealer needed?</th>
				<td><?php echo $item['visit_manager_dealer']; ?></td>
			</tr>
			<tr>
				<th>Is a visit to a design engineer needed?</th>
				<td><?php echo $item['visit_designengineer']; ?></td>
			</tr>
			<tr>
				<th>Enquiry Type</th>
				<td><?php echo $item['enq_type']; ?></td>
			</tr>
			<tr>
				<th>Date added</th>
				<td><?php echo $item['dateadded']; ?></td>
			</tr>


		</table>
<br>
	



	</div>
</div>



