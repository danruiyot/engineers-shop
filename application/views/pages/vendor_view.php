<div class="container bg-light border">
	<u><h3><?php echo $title; ?></h3></u>
<br>
	<div class="">
		<table class="table table-bordered">
			<tr>
				<th>Name</th>
				<td><?php echo $item['vendor_name']; ?></td>
			</tr>
			<tr>
				<th>Location</th>
				<td><?php echo $item['address']; ?></td>
			</tr>
			<tr>
				<th>Mobile 1</th>
				<td><?php echo $item['mobile1']; ?></td>
			</tr>
			<tr>
				<th>Mobile 2</th>
				<td><?php echo $item['mobile2']; ?></td>
			</tr>
			<tr>
				<th>Mobile 3</th>
				<td><?php echo $item['mobile3']; ?></td>
			</tr>
			<tr>
				<th>Email 1</th>
				<td><?php echo $item['mail1']; ?></td>
			</tr>
			<tr>
				<th>Email 2</th>
				<td><?php echo $item['mail2']; ?></td>
			</tr>
			<tr>
				<th>Whatsapp Number</th>
				<td><?php echo $item['whatsapp_no']; ?></td>
			</tr>

		</table>
<br>
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

	</div>
</div>



