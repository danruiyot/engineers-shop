<div class="container bg-light">
   <br>
   <div class="row">
   <div class="col-sm-8"><h2></b><h2><?php echo $title; ?></h2></h2></div>
   <div class="col-sm-4">
      <button type="button" class="btn float-right btn-info add-new"><span style="color: white;"><a href="<?php echo base_url('customer/view/') ?>"><i class="fa fa-list"></i> list</a> </span></button>
   </div>
</div>
<?php echo validation_errors(); ?>

<?php echo form_open('customer/create/'.$item["c_id"]); ?>  
<div class="table-responsive">
  <table class="table table-bordered">
   <tr>
    <th>Name</th>
   <td><input type="text" class="form-control" name="customer_name" value="<?php echo $item['customer_name']; ?>"></td>
   </tr>
   <tr>
   <th>Unit Division</th>
   <td><input type="text" class="form-control" name="unit_division" value="<?php echo $item['unit_division']; ?>"></td>
   </tr>
   <tr>
   <th>Work adress</th>
   <td><input type="text" class="form-control" name="work_address" value="<?php echo $item['work_address']; ?>"></td>
   </tr>
   <tr>
   <th>Location</th>
   <td><input type="text" class="form-control" name="location" value="<?php echo $item['location']; ?>"></td>
   </tr>
   <tr>
   <th>Work pin</th>
   <td><input type="text" class="form-control" name="workpin" value="<?php echo $item['workpin']; ?>"></td>
   </tr>
   <tr>
   <th>Office Adress</th>
   <td><input type="text" class="form-control" name="office_adress" value="<?php echo $item['office_adress']; ?>"></td>
   </tr>
   <tr>
   <th>Office pincode</th>
   <td><input type="text" class="form-control" name="office_pincode" value="<?php echo $item['office_pincode']; ?>"></td>
   </tr>
   <tr>
   <th>Department</th>
   <td><input type="text" class="form-control" name="department" value="<?php echo $item['department']; ?>"></td>
   </tr>
   <tr>
   <th>Designation</th>
   <td><input type="text" class="form-control" name="designation" value="<?php echo $item['designation']; ?>"></td>
   </tr>
  
   <tr>
   <th>Email 1</th>
   <td><input type="text" class="form-control" name="email_id" value="<?php echo $item['email_id']; ?>"></td>
   </tr> <tr>
   <th>Mobile 1</th>
   <td><input type="text" class="form-control" name="mobile_1" value="<?php echo $item['mobile_1']; ?>"></td>
   </tr>
   <tr>
   <th>mobile 2</th>
   <td><input type="text" class="form-control" name="mobile_2" value="<?php echo $item['mobile_2']; ?>"></td>
   </tr>
   <tr>
   <th>Whatsapp number</th>
   <td><input type="text" class="form-control" name="whatsapp_no" value="<?php echo $item['whatsapp_no']; ?>"></td>
   </tr>
  </table>
  <input type="submit" name="submit" value="submit" class="btn btn-primary">
</form>
</div>
</div>