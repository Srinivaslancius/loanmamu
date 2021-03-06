<?php include_once 'admin_includes/main_header.php'; ?>
<?php $getServicesData = getAllDataWithActiveRecent('service_details'); $i=1; ?>

      <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <a href="add_service_details.php" style="float:right">Add Services Details</a>
            <h3 class="m-t-0 m-b-5">Services Details</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>Id</th>  					
                    <th>Service Name</th>
                    <th>Logo</th>
					          <th>Title1</th>
                    <th>Title2</th>
                    <th>Title3</th>
                    <th>Title4</th>
                    <th>Title5</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getServicesData->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php $getServices = getDataFromTables('services',$status=NULL,'id',$row['service_id'],$activeStatus=NULL,$activeTop=NULL);
                      $getService = $getServices->fetch_assoc(); echo $getService['name']; ?></td>
                    <td><img src="<?php echo $base_url . 'uploads/service_details_images/'.$row['bank_logo'] ?>" height="100" width="100"/></td>
					<td><?php echo $row['title1_value'];?></td>
                    <td><?php echo $row['title2_value'];?></td>
                    <td><?php echo $row['title3_value'];?></td>
                    <td><?php echo $row['title4_value'];?></td>
                    <td><?php echo $row['title5_value'];?></td>
                    <td><?php if ($row['status']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['status']." data-tbname='service_details'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['status']." data-incId=".$row['id']." data-tbname='service_details'>In Active</span>" ;} ?></td>
                    <td> <a href="edit_service_details.php?sdid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-edit"></i></a> &nbsp; <a href="#"><i class="zmdi zmdi-eye zmdi-hc-fw" data-toggle="modal" data-target="#<?php echo $row['id']; ?>" class=""></i></a> &nbsp; <a href="delete_service_details.php?sdid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-delete zmdi-hc-fw" onclick="return confirm('Are you sure you want to delete?')"></i></a></td>
                    <!-- Open Modal Box  here -->
                    <div id="<?php echo $row['id']; ?>" class="modal fade" tabindex="-1" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content animated flipInX">
                          <div class="modal-header bg-success">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">
                                <i class="zmdi zmdi-close"></i>
                              </span>
                            </button>
                            <center><h4 class="modal-title">Services Details Information</h4></center>
                          </div>
                          <div class="modal-body" id="modal_body">
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Service Name: </div>
                              <div class="col-sm-6"><?php echo $getService['name'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Title1 Value: </div>
                              <div class="col-sm-6"><?php echo $row['title1_value'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Title2 Value: </div>
                              <div class="col-sm-6"><?php echo $row['title2_value'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Title3 Value: </div>
                              <div class="col-sm-6"><?php echo $row['title3_value'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Title4 Value: </div>
                              <div class="col-sm-6"><?php echo $row['title4_value'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Title5 Value: </div>
                              <div class="col-sm-6"><?php echo $row['title5_value'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Free Voucher: </div>
                              <div class="col-sm-6"><?php echo $row['free_voucher'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Logo: </div>
                              <div class="col-sm-6"><img src="<?php echo $base_url . 'uploads/service_details_images/'.$row['bank_logo'] ?>" height="70" width="70"/></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Status:</div>
                              <div class="col-sm-6"><?php if($row['status'] == 0 ){ echo "Active";} else{ echo "InActive";}?></div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <!--<button type="button" data-dismiss="modal" class="btn btn-success">Continue</button>-->
                            <button type="button" data-dismiss="modal" class="btn btn-success">Close</button>
                              <style>
                              #modal_body{
                                font-size:14px;
                                padding-top:30px;
                                padding-left: 0px;
                                font-family:Roboto,sans-serif;
                              }
                              </style>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- End Modal Box  here -->
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