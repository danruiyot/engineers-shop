<div class=" container border bg-light">
<br>
<div class="row">
	<div class="col-sm-8"><h2></b><h2><?php echo $title; ?></h2></h2></div>
	<div class="col-sm-4">
		<button type="button" class="btn float-right btn-info add-new"><a style="color: white;" href="<?php echo base_url('enquiry/') ?>"><i class="fa fa-list"></i> List</a> </button>
	</div>
</div>
<hr>
<?php if ($this->session->flashdata('success')): ?>                 
            <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
        <?php elseif ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php endif; ?>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('enquiry/save'); ?>

<div class='form-field-box odd' id="customer_id_field_box">
			
            <div class="form-group">
  <label for="sel1">Customer Name:</label>
  <select name='customer_id' class="form-control" id="sel1">
  <?php if (! empty($customers)){ ?>
  <?php foreach ($customers as $customer): ?>

    <option value="<?php echo $customer['c_id']; ?>"><?php echo $customer['customer_name']; ?></option>
    <?php endforeach ?>
    <?php } ?>
  </select>
</div>
						<div class='form-field-box even' id="customer_requirements_field_box">
				<div class='form-display-as-box' id="customer_requirements_display_as_box">
					Customer requirements :
				</div>
				<div class='form-input-box' id="customer_requirements_input_box">
					<input id='field-customer_requirements' class='form-control' name='customer_requirements' type='text' value="" maxlength='535' />				</div>
				<div class='clear'></div>
			</div>
						<div class='form-field-box odd' id="product_service_field_box">
				<div class='form-display-as-box' id="product_service_display_as_box">
					Product or service :
				</div>
				<div class='form-input-box' id="product_service_input_box">
                <select class="form-control" name="product_service" id="">
                <option value="">Select Category</option>
                <option value="product_requirement">Product requirement</option>
                <option value="service_requirement">Service requirement</option>
                <option value="repair">Repair</option>
                <option value="rent">Rent </option>
                </select>
			<div class='clear'></div>
			</div>
						<div class='form-field-box even' id="product_service_name_field_box">
				<div class='form-display-as-box' id="product_service_name_display_as_box">
					Name :
				</div>
				<div class='form-input-box' id="product_service_name_input_box">
					<input id='field-product_service_name' class='form-control' name='product_service_name' type='text' value="" maxlength='45' />				</div>
				<div class='clear'></div>
			</div>
						<div class='form-field-box odd' id="quantity_field_box">
				<div class='form-display-as-box' id="quantity_display_as_box">
					Quantity :
				</div>
				<div class='form-input-box' id="quantity_input_box">
					<input id='field-quantity' name='quantity' type='text' value='' class='numeric form-control' maxlength='45' />				</div>
				<div class='clear'></div>
			</div>
						<div class='form-field-box even' id="datasheet_field_box">
				<div class='form-display-as-box' id="datasheet_display_as_box">

					Enquiry Files Files and Documents :
				</div>
				<div class='form-input-box' id="files_input_box">
					<input id='field-files' class='form-control' name='file[]' type='file' value="" multiple />				</div>
				<div class='clear'></div>
			</div>

			  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Visit manager or dealer </label>
  <select name='visit_manager_dealer'  class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
   <option selected>Choose...</option>
					    <option value="Yes">Yes</option>
					    <option value="No">No</option>
  </select>
					
				<div class='form-input-box' id="visit_designengineer_input_box">
					  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">	Visit design engineer :</label>
					  <select name='visit_designengineer'  class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
					    <option selected>Choose...</option>
					    <option value="Yes">Yes</option>
					    <option value="No">No</option>
  					</select>

				</div>
				<div class='clear'></div>
			</div>
				
						<div class='form-group ' id="enq_type_field_box">
				<div class='form-display-as-box' id="enq_type_display_as_box">
					Enq type :
				</div>
				<div class='form-group ' id="enq_type_input_box">
			<select class="form-control" name="enq_type" id="">
            <option  value="std_enq">Standard Enquiry</option>
            <option value="non_std_enq">NON Standard Enquiry</option>
            </select>
            <div class='clear'></div>
			</div>
            <br>

<input type="submit" class="btn btn-primary" name="submit" value="Submit" />
</form>
<br>
</div>
