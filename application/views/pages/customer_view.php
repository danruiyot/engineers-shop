<div class="container border bg-light">
<br>
	<div class="row">
	<div class="col-sm-8"><h2></b><h2><?php echo $title; ?></h2></h2></div>
	<div class="col-sm-4">
		<a class="btn float-right btn-info add-new" style="color: white;" href="<?php echo base_url('customer/view/') ?>"><i class="fa fa-list"></i> list</a>
	</div>
</div>
	<div class="">
		<table class="table table-bordered">

			<tr>
				<th>Name</th>
				<td><?php echo $item['customer_name']; ?></td>
			</tr>
			<tr>
				<th>Work Adress</th>
				<td><?php echo $item['work_address']; ?></td>
			</tr>
			<tr>
				<th>Office address</th>
				<td><?php echo $item['office_adress']; ?></td>
			</tr>
			<tr>
				<th>Mobile 2</th>
				<td><?php echo $item['mobile_1']; ?></td>
			</tr>
			<tr>
				<th>Email 1</th>
				<td><?php echo $item['email_id']; ?></td>
			</tr>
			<tr>
				<th>Whatsapp Number</th>
				<td><?php echo $item['whatsapp_no']; ?></td>
			</tr>

		</table>
<br>
<h5>Contact Person</h5>
		<table class="table table-bordered">
			<thead>
			<tr>
				<th>Name</th>
				<th>Mobile 1</th>
				<th>Email</th>
			</tr>
			</thead>
			<tbody>
			<?php if (! empty($contacts)){?>

			<?php foreach ($contacts as $contact):  ?>
			<tr>

				<td><?php echo $contact['contact_name']; ?></td>
				<td><?php echo $contact['mobile1']; ?></td>
				<td><?php echo $contact['contact_name']; ?></td>


			</tr>
					<?php
				endforeach; ?>
				<?php
			}else{
				echo 'No results found';
			} ?>
			</tbody>
		</table>

</table>
<br>
<br>
		<div class="row">
			<div class="col-sm-6"><h2></b><h2><h5>Remarks</h5></h2></h2></div>
			<div class="col-sm-6">


					<?php echo validation_errors(); ?>

					<?php echo form_open('convo/add'); ?>
				<div class="form-row">
					<div class="col-7">
					<div class="form-group mb-2">
						<input type="text" name="customer_id" hidden value="<?php echo $item['c_id']; ?>">

						<input type="text" class="form-control" name="convo" placeholder="Remarks">
					</div>
					</div>
					<div class="col">
					<button type="submit" class="btn btn-primary mb-2"><span class="fa fa-plus">Add</span></button>
					</div>
					</div>
				</form>
				</div>
		</div>

		<table class="table table-bordered">
			<thead>
			<tr>
				<th>Date</th>
				<th>Remarks</th>
			</tr>
			</thead>
			<tbody>
			<?php if (! empty($convos)){?>

				<?php foreach ($convos as $convo):  ?>
					<tr>

						<td><?php echo $convo['dateadded_convo']; ?></td>
						<td><?php echo $convo['convo']; ?></td>


					</tr>
				<?php
				endforeach; ?>

				<?php
			}else{
				echo 'No results found';
			} ?>
			</tbody>
		</table>

		</table>

	</div>
</div>



