<?php include_once 'admin_includes/main_header.php'; ?>
<?php $getBannersData = getDataFromTables('service_details',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL); $i=1; ?>
     <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <a href="add_service_details.php" style="float:right">Add Service Details</a>
            <h3 class="m-t-0 m-b-5">Service Details</h3>            
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Bank Name</th>
                    <th>Bank Logo</th>
                    <th>Interest Rate Range</th>
                    <th>process Fee Range</th>
                    <th>Loan Amount</th>
                    <th>Tenture range</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getBannersData->fetch_assoc()) { ?>
                  <tr>
                     <td><?php echo $i;?></td>
                    <td><?php echo $row['bank_name'];?></td>

                    <td><img src="<?php echo $base_url . 'uploads/service_details_images/'.$row['bank_logo'] ?>" height="100" width="100"/></td>
                    <td><?php echo $row['interest_rate_range'];?></td>
                    <td><?php echo $row['process_fee_range'];?></td>
                    <td><?php echo $row['process_fee_range'];?></td>
                    <td><?php echo $row['loan_amount'];?></td>
                    <td><?php echo $row['tenture_range'];?></td>
                    <!-- <td><?php if ($row['status']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['status']." data-tbname='banners'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['status']." data-incId=".$row['id']." data-tbname='banners'>In Active</span>" ;} ?></td> -->
                    <td> <a href="edit_service_details.php?bid=<?php echo $row['id']; ?>"> <i class="zmdi zmdi-edit"></i> &nbsp; </a> <a href="delete_service_details.php?bid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-delete zmdi-hc-fw" onclick="return confirm('Are you sure you want to delete?')"></i></a></td>
                  </tr>
                  <?php  $i++; } ?>                  
                </tbody>               
              </table>
            </div>
          </div>
        </div>   
       </div>
   <?php include_once 'admin_includes/footer.php'; ?>
   <script src="js/tables-datatables.min.js"></script>