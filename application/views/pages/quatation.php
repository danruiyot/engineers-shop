  <div class="border bg-light">
<div class="container" id="contact">
<div><br>
   <div class="row">
   <div class="col-sm-8"><h2></b><h2><?php echo $title; ?></h2></h2></div>
   <div class="col-sm-4">
      <button type="button" class="btn float-right btn-info add-new"><span style="color: white;"><a href="<?php echo base_url('quatation/quoteted/') ?>"><i class="fa fa-list"></i>List of quoted</a> </span></button>
   </div>
          <hr>
<table class="table ">
<tr class="">
<th>Enquiry Number</th>
<th >Visit manager or dealer?</th>
<th >Visit designer?</th>
<th>Date received</th>
<th>Product or service</th>
<th>Action</th>
</tr> 
<?php foreach ($enquiries as $row ):?>
<tr>
              <td><?php echo $row["e_id"]  ?></td>
              <td ><?php echo $row["visit_manager_dealer"]  ?></td>
              <td ><?php echo $row["visit_designengineer"]  ?></td>
              <td><?php echo $row["dateadded"]  ?></td>
              <td><?php echo $row["product_service"]  ?></td>
              <td><a href="<?php echo base_url('quatation/detatils/'.$row["e_id"]); ?>" class="btn btn-default" ><span class="fa fa-eye"></span></a></td>
              
              </tr>
<?php endforeach ?>

              <br>
              </table>
              <br>

</div> 
</div>
    </div>
