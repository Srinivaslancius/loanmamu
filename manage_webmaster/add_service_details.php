<?php include_once 'admin_includes/main_header.php'; ?>
<?php
if (!isset($_POST['submit']))  {
  //If fail
  echo "fail";
} else  {
  //If success
  $service_id = $_POST['service_id'];
  //$bank_name = $_POST['bank_name'];
  $title1_value = $_POST['title1_value'];
  $title2_value = $_POST['title2_value'];
  $title3_value = $_POST['title3_value'];
  $title4_value = $_POST['title4_value'];
  $title5_value = $_POST['title5_value'];
  $free_voucher = $_POST['free_voucher'];
  $description = $_POST['description'];
  $bank_logo = $_FILES["bank_logo"]["name"];
   $status = $_POST['status'];
  $created_at = date("Y-m-d h:i:s"); 
  
  if($bank_logo!='') {

    $target_dir = "../uploads/service_details_images/";
    $target_file = $target_dir . basename($_FILES["bank_logo"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
    if (move_uploaded_file($_FILES["bank_logo"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO service_details (`service_id`, `title1_value`,`title2_value`,`title3_value`,`title4_value`,`title5_value`,`free_voucher`, `bank_logo`,`description`,`created_at`, `status`) VALUES ('$service_id', '$title1_value','$title2_value','$title3_value','$title4_value','$title5_value','$free_voucher','$bank_logo', '$description','$created_at', '$status')";
      
        if($conn->query($sql) === TRUE){
          echo "<script type='text/javascript'>window.location='service_details.php?msg=success'</script>";
        }else {
          echo "<script type='text/javascript'>window.location='service_details.php?msg=fail'</script>";
        }
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
  }
}
?>
      <div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Service Details</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="POST" enctype="multipart/form-data">
                  <?php $getCategories = getDataFromTables('services','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your Service</label>
                    <select  id="service_id" name="service_id" class="custom-select" data-error="This field is required." required onChange="getBankInfo(this.value);">
                      <option value="">Select Service</option>
                      <?php while($row = $getCategories->fetch_assoc()) {  ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                      <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div id="service-details-section"></div>
				          <!-- <div class="form-group">
                    <label for="form-control-2" class="control-label">Bank Name</label>
                    <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Bank Name" data-error="please enter  bank name." required>
                    <div class="help-block with-errors"></div>
                  </div> -->
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Free Voucher</label>
                    <input type="text" class="form-control" id="free_voucher" name="free_voucher" placeholder="Free Voucher" data-error="please enter  free voucher." required>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Description</label>
                    <textarea name="description" class="form-control" id="description" placeholder="Description" data-error="Please enter Description." required></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-4" class="control-label">Logo</label>
                    <img id="output" height="100" width="100"/>
                    <label class="btn btn-default file-upload-btn">
                      Choose file...
                        <input id="form-control-22" class="file-upload-input" type="file" accept="image/*" name="bank_logo" id="bank_logo"  onchange="loadFile(event)"  multiple="multiple" required >
                      </label>
                  </div>
                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
                      <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  
                  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
<?php include_once 'admin_includes/footer.php'; ?>
<!-- Below script for ck editor -->
<script src="//cdn.ckeditor.com/4.7.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>
<style type="text/css">
    .cke_top, .cke_contents, .cke_bottom {
        border: 1px solid #333;
    }
</style>
<script type="text/javascript">
    function getBankInfo(val){
      var service_id = $("#service_id").val();
	  $('#service-details-section .form-group').remove();
      if(service_id!='' ) {
        $.ajax({
            type:"post",
            url:"ajax_get_service_details.php",
            data:'service_id='+val,
            success:function(value){
              if(value == 0) {
                alert("Data Not Exists!");
              } else {
				if (value.search(",,,") == -1) {
					var data = value.split(",");
					for (var i=0; i<data.length; i++) {
						var group = '<div class="form-group">'
										+ '   <label id="title'+(i+1) +'"  ></label>'
										+ '   <input type="text" class="form-control" id="form-control-'+(i+1) +'" name="title'+(i+1) +'_value" data-error="Please enter title." placeholder="title'+(i+1) +'" required>'
									+ '</div>'
						$('#service-details-section').append(group);			
						$('#title'+(i+1)).text(data[i]);
					}
				} else {
					alert("Data Not Exists!");
				}  
              }
            }
          });
      }
    }        
</script>