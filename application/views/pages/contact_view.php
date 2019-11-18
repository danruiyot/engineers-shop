<div class="container bg-light">
   <br>
   <div class="row">
   <div class="col-sm-8"><h2></b><h2><?php echo $title; ?></h2></h2></div>
   <div class="col-sm-4">
      <button type="button" class="btn float-right btn-info add-new"><span style="color: white;"><a href="<?php echo base_url('contact/view/') ?>"><i class="fa fa-list"></i>List all</a> </span></button>
   </div>
</div>
<div class="table-responsive">
  <table class="table table-bordered">
   <tr>
   <th>Name</th>
   <td><?php echo $item['contact_name']; ?></td>
   </tr>
   <tr>
   <th>Designation</th>
   <td><?php echo $item['designation']; ?></td>
   </tr>
   <tr>
   <th>Work adress</th>
   <td><?php echo $item['address']; ?></td>
   </tr>
   <tr>
   <th>Operatuinarea</th>
   <td><?php echo $item['ops_area']; ?></td>
   </tr>
   <tr>
   <th>Email address</th>
   <td><?php echo $item['mail1']; ?></td>
   </tr>
   <tr>
   <th>Email Adress 2</th>
   <td><?php echo $item['mail2']; ?></td>
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
   <th>Mobile 4</th>
   <td><?php echo $item['mobile4']; ?></td>
   </tr>
   <tr>
   <th>Whatsapp bumber</th>
   <td><?php echo $item['whatsapp_no']; ?></td>
   </tr>
  </table>
</div>
</div>