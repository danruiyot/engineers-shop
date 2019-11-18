<div class="container bg-light border">
<?php
if($this->session->flashdata('msg')=='User-deleted'){
	echo "deleted Succesfully";
}
?>
<br>
<div class="row">
	<div class="col-sm-8"><h2></b><h2><?php echo $title; ?></h2></h2></div>
	<div class="col-sm-4">
		<button type="button" class="btn float-right btn-info add-new"><a <span style="color: white;" href="<?php echo site_url('home/create/') ?>"><i class="fa fa-plus"></i> Add New</a> </button>
	</div>
</div>
<?php if ($this->session->flashdata('success')): ?>                 
            <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
        <?php elseif ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php endif; ?>
<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Location</th>
			<th>Product</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		<?php if (! empty($vendors_all)){  $i=1;?>

		<?php foreach ($vendors_all as $item): ?>

		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $item['vendor_name']; ?></td>
			<td><?php echo $item['address']; ?></td>
			<td><?php echo $item['product']; ?></td>
			<td>
				<form action="<?php echo site_url('home/delete/'.$item['v_id']) ?>" method="post" onsubmit="alert('Are you sure?')">
					<a href="<?php echo site_url('home/edit/'.$item['v_id']); ?>"><span style="color: orange;" class="fas fa-pen"></span></a>&nbsp;
					<a href="<?php echo site_url('home/view/'.$item['v_id']); ?>"><span style="color: green;" class="fas fa-eye"></span></a>
					<button name="submit" id="submit" class="btn" type="submit" value="Unsubscribe"><span style="color: crimson;" class="fas fa-trash"></span></button>
				</form>
			</td>
		</tr>
		<?php
			$i++;
		endforeach; ?>
		<?php
		}else{
			echo 'No results found';
		} ?>

		</tbody>

</table>
<ul class="pagination" style="margin:20px 0">
  <li class="page-item"><?php echo $links; ?></li>
</ul>
<p></p>
	

</div>
</div>
