<div class=" container border bg-light">
<br>
<div class="row">
	<div class="col-sm-8"><h2></b><h2><?php echo $title; ?></h2></h2></div>
	<div class="col-sm-4">
		<button type="button" class="btn float-right btn-info add-new"><a  style="color: white;" href="<?php echo base_url('enquiry/') ?>"><i class="fa fa-list"></i> List</a> </button>
	</div>
</div>
<hr>
<?php if ($this->session->flashdata('success')): ?>                 
            <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
        <?php elseif ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php endif; ?>
<?php echo validation_errors(); ?>

<?php echo form_open('enquiry/edit/'.$items['e_id']); ?>

<div class='form-field-box odd' id="customer_id_field_box">
			

						<div class='form-field-box even' id="customer_requirements_field_box">
				<div class='form-display-as-box' id="customer_requirements_display_as_box">
					Customer requirements :
				</div>
				<div class='form-input-box' id="customer_requirements_input_box">
					<input id='field-customer_requirements' class='form-control' name='customer_requirements' type='text' value="<?php echo $items['customer_requirements']; ?>" maxlength='535' />				</div>
				<div class='clear'></div>
			</div>
						<div class='form-field-box odd' id="product_service_field_box">
				<div class='form-display-as-box' id="product_service_display_as_box">
					Product or service : <b> Current option : <?php echo $items['product_service']; ?></b>
				</div>
				<div class='form-input-box' id="product_service_input_box">
                <select class="form-control" name="product_service" id="">
                <option value="<?php echo $items['product_service']; ?>"><?php echo $items['product_service']; ?></option>
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
					<input id='field-product_service_name' class='form-control' name='product_service_name' type='text' value="<?php echo $items['product_service_name']; ?>" maxlength='45' />				</div>
				<div class='clear'></div>
			</div>
						<div class='form-field-box odd' id="quantity_field_box">
				<div class='form-display-as-box' id="quantity_display_as_box">
					Quantity :
				</div>
				<div class='form-input-box' id="quantity_input_box">
					<input id='field-quantity' name='quantity' type='text' value='<?php echo $items['quantity']; ?>' class='numeric form-control' maxlength='45' />				</div>
				<div class='clear'></div>
			</div>
					
					
				
						<div class='form-group ' id="enq_type_field_box">
				<div class='form-display-as-box' id="enq_type_display_as_box">
					Enq type : <b>Current option: <?php echo $items['enq_type']; ?></b>
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