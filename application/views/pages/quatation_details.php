<div class="w3-margin">
  <div class="border bg-light">
<div class="container " id="contact">
<div><br>
   <div class="float-center">
            <h3><?php echo $title ?></h3>
          </div>
          <hr>
<table class="table border">
<tr class="">

<tr>
             <th>Enquiry Number</th>
              <td><?php echo $row["e_id"]  ?></td></tr>
              <tr>
              <th >Visit manager or dealer?</th>
              <td ><?php echo $row["visit_manager_dealer"]  ?></td></tr>
              <tr>
              <th >Visit designer?</th>
              <td ><?php echo $row["visit_designengineer"]  ?></td></tr>
              <tr>
              <th>Date received</th>
              <td><?php echo $row["dateadded"]  ?></td></tr>
              <tr>
              <th>Type</th>
              <td><?php echo $row["enq_type"]  ?></td></tr>
   <br>
    </table>

     <form action="<?php echo site_url('quatation/send/'.$row['e_id']) ?>" method="post">
         
<input type="text" name="enquiry_id" value="<?php echo $row["e_id"]  ?>" style="display: none;"><br>
<div class="">
        <label>Date Due</label>
        <input class="form-control" type="date" name="datedue" required>
      </div>
      <div class="">
        <label>Amount Due</label>
        <input class="form-control " type="number" name="amount" required>
      </div>
      <br>
    <button type="submit" name="single" class="btn btn-outline-primary">Submit</button>

    </form>
    </tr>
  </table>
  <br>
</div>
</div>
</div>
</div>
