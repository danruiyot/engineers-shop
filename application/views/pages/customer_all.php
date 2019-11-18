<br>
<div class="container bg-light border">
	<br>
<div class="row">
	<div class="col-sm-8"><h2></b><h2><?php echo $title; ?></h2></h2></div>
	<div class="col-sm-4">
		<a class="btn float-right btn-info add-new" style="color: white;" href="<?php echo base_url('customer/create/') ?>"><i class="fa fa-plus"></i> Add</a>
	</div>
</div>
<?php if ($this->session->flashdata('success')): ?>                 
            <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
        <?php elseif ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php endif; ?>
<hr>
<div class="">
	<table class="table table-striped table-bordered">
		<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Unit Division</th>
			<th>Office address</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		<?php if (! empty($customer_alls)){ $i =1; ?>

			<?php foreach ($customer_alls as $item): ?>

				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $item['customer_name']; ?></td>
					<td><?php echo $item['unit_division']; ?></td>
					<td><?php echo $item['office_adress']; ?></td>
					<td>
						<form action="<?php echo site_url('customer/delete/'.$item['c_id']) ?>" method="post" onsubmit="alert('Are you sure?')">
							<a href="<?php echo site_url('customer/edit/'.$item['c_id']); ?>"><span style="color: orange;" class="fas fa-pen"></span></a>&nbsp;
							<a href="<?php echo site_url('customer/view_single/'.$item['c_id']); ?>"><span style="color: green;" class="fas fa-eye"></span></a>
							<button name="submit" id="submit" class="btn" type="submit" value="Unsubscribe"><span style="color: crimson;" class="fas fa-trash"></span></button>
						</form>
					</td>
				</tr>
				<?php
				$i++;
			endforeach; ?>
         
           
	
		</tbody>

	</table>
	<p><?php echo $links; ?></p>
    <?php
		}else{
			echo 'No results found';
		} ?>

</div>
</div>