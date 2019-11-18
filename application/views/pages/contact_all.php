<div class="container bg-light border">
	<br>
<?php
if($this->session->flashdata('msg')=='User-deleted'){
	echo "deleted Succesfully";
}
?>

<?php if ($this->session->flashdata('success')): ?>                 
            <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
        <?php elseif ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php endif; ?>
<br>
<div class="row">
	<div class="col-sm-8"><h2></b><h2><?php echo $title; ?></h2></h2></div>
	<div class="col-sm-4">
		<button type="button" class="btn float-right btn-info add-new"><a style="color: white;" href="<?php echo site_url('contact/create/') ?>"><i class="fa fa-plus"></i> Add New</a> </button>
	</div>
</div>
<hr>
<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile number</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		<?php if (! empty($contacts_all)){ $i = 1;?>

			<?php foreach ($contacts_all as $item):  ?>

				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $item['contact_name']; ?></td>
					<td><?php echo $item['mail1']; ?></td>
					<td><?php echo $item['mobile1']; ?></td>
					<td>
						<form action="<?php echo site_url('contact/delete/'.$item['contact_id']) ?>" method="post" onsubmit="alert('Are you sure?')">
							<a href="<?php echo site_url('contact/edit/'.$item['contact_id']); ?>"><span style="color: orange;" class="fas fa-pen"></span></a>&nbsp;
							<a href="<?php echo site_url('contact/view_single/'.$item['contact_id']); ?>"><span style="color: green;" class="fas fa-eye"></span></a>
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
	<?php echo $links; ?>
</div>
</div>