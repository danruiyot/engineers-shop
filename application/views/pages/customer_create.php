<br>
<div class="row">
	<div class="col-sm-8"><h2></b><h2><?php echo $title; ?></h2></h2></div>
	<div class="col-sm-4">
		<a class="btn float-right btn-info add-new" style="color: white;" href="<?php echo base_url('customer/view/') ?>"><i class="fa fa-list"></i> List</a>
	</div>
</div>
<div class="container border bg-light">
	
<div class="small">
<br>
<?php if ($this->session->flashdata('success')): ?>                 
            <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
        <?php elseif ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php endif; ?>
<?php echo validation_errors(); ?>

<?php echo form_open('customer/create'); ?>	
        <div class='form-div'>
			<div class='form-field-box odd' id="customer_name_field_box">
				<div class='form-display-as-box' id="customer_name_display_as_box">
					Customer name :
				</div>
				<div class='form-input-box' id="customer_name_input_box">
					<input id='field-customer_name' class='form-control' name='customer_name' type='text' value="" maxlength='45' />				</div>
				<div class='clear'></div>
			</div>
						<div class='form-field-box even' id="unit_division_field_box">
				<div class='form-display-as-box' id="unit_division_display_as_box">
					Unit division :
				</div>
				<div class='form-input-box' id="unit_division_input_box">
					<input id='field-unit_division' class='form-control' name='unit_division' type='text' value="" maxlength='45' />				</div>
				<div class='clear'></div>
			</div>
						<div class='form-field-box odd' id="work_address_field_box">
				<div class='form-display-as-box' id="work_address_display_as_box">
					Work address :
				</div>
				<div class='form-input-box' id="work_address_input_box">
					<input id='field-work_address' class='form-control' name='work_address' type='text' value="" maxlength='45' />				</div>
				<div class='clear'></div>
			</div>
						<div class='form-field-box even' id="location_field_box">
				<div class='form-display-as-box' id="location_display_as_box">
					Location :
				</div>
				<div class='form-input-box' id="location_input_box">
					<input id='field-location' class='form-control' name='location' type='text' value="" maxlength='250' />				</div>
				<div class='clear'></div>
			</div>
						<div class='form-field-box odd' id="workpin_field_box">
				<div class='form-display-as-box' id="workpin_display_as_box">
					Workpin :
				</div>
				<div class='form-input-box' id="workpin_input_box">
					<input id='field-workpin' class='form-control' name='workpin' type='text' value="" maxlength='100' />				</div>
				<div class='clear'></div>
			</div>
						<div class='form-field-box even' id="office_adress_field_box">
				<div class='form-display-as-box' id="office_adress_display_as_box">
					Office adress :
				</div>
				<div class='form-input-box' id="office_adress_input_box">
					<input id='field-office_adress' class='form-control' name='office_adress' type='text' value="" maxlength='100' />				</div>
				<div class='clear'></div>
			</div>
						<div class='form-field-box odd' id="office_pincode_field_box">
				<div class='form-display-as-box' id="office_pincode_display_as_box">
					Office pincode :
				</div>
				<div class='form-input-box' id="office_pincode_input_box">
					<input id='field-office_pincode' class='form-control' name='office_pincode' type='text' value="" maxlength='100' />				</div>
				<div class='clear'></div>
			</div>
						<div class='form-field-box even' id="contact_person_field_box">
				<div class='form-display-as-box' id="contact_person_display_as_box">
					Contact person :
				</div>
				<div class='form-input-box' id="contact_person_input_box">
					<select name="contact_person[]" class="form-control mdb-select md-form" multiple="" searchable="search here...">
						<option disabled="" selected="">Select Contact Person</option>
						<?php foreach ($contacts as $item):	?>
						<option value="<?php echo $item['contact_id']; ?>"><?php echo $item['contact_name']; ?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class='clear'></div>
			</div>
						<div class='form-field-box odd' id="department_field_box">
				<div class='form-display-as-box' id="department_display_as_box">
					Department :
				</div>
				<div class='form-input-box' id="department_input_box">
					<input id='field-department' class='form-control' name='department' type='text' value="" maxlength='100' />				</div>
				<div class='clear'></div>
			</div>
						<div class='form-field-box even' id="designation_field_box">
				<div class='form-display-as-box' id="designation_display_as_box">
					Designation :
				</div>
				<div class='form-input-box' id="designation_input_box">
					<input id='field-designation' class='form-control' name='designation' type='text' value="" maxlength='100' />				</div>
				<div class='clear'></div>
			</div>
						<div class='form-field-box odd' id="email_id_field_box">
				<div class='form-display-as-box' id="email_id_display_as_box">
					Email id :
				</div>
				<div class='form-input-box' id="email_id_input_box">
					<input id='field-email_id' class='form-control' name='email_id' type='text' value="" maxlength='100' />				</div>
				<div class='clear'></div>
			</div>
						<div class='form-field-box even' id="mobile_1_field_box">
				<div class='form-display-as-box' id="mobile_1_display_as_box">
					Mobile 1 :
				</div>
				<div class='form-input-box' id="mobile_1_input_box">
					<input id='field-mobile_1' class='form-control' name='mobile_1' type='text' value="" maxlength='100' />				</div>
				<div class='clear'></div>
			</div>
						<div class='form-field-box odd' id="mobile_2_field_box">
				<div class='form-display-as-box' id="mobile_2_display_as_box">
					Mobile 2 :
				</div>
				<div class='form-input-box' id="mobile_2_input_box">
					<input id='field-mobile_2' class='form-control' name='mobile_2' type='text' value="" maxlength='100' />				</div>
				<div class='clear'></div>
			</div>
						<div class='form-field-box even' id="whatsapp_no_field_box">
				<div class='form-display-as-box' id="whatsapp_no_display_as_box">
					Whatsapp no :
				</div>
				<div class='form-input-box' id="whatsapp_no_input_box">
					<input id='field-whatsapp_no' class='form-control' name='whatsapp_no' type='text' value="" maxlength='100' />				</div>
				<div class='clear'></div>
			</div>
		
		</div>
		
		</div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
	</form>
    </div>
		
		</div>
		<script type="text/javascript">
			$(document).ready(function () {
				$('.mdb-select')materialSelect();
				// body...
			});
		</script>