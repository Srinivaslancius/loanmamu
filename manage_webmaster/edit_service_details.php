<?php include_once 'admin_includes/main_header.php'; ?>
<?php
$id = $_GET['sdid'];
 if (!isset($_POST['submit']))  {
            echo "fail";
    } else  {
            $service_id = $_POST['service_id'];
            $title1_value = $_POST['title1_value'];
            $title2_value = $_POST['title2_value'];
            $title3_value = $_POST['title3_value'];
            $title4_value = $_POST['title4_value'];
            $title5_value = $_POST['title5_value'];
            $free_voucher = $_POST['free_voucher'];
            $description = $_POST['description'];
            $status = $_POST['status'];
            if($_FILES["bank_logo"]["name"]!='') {
              $bank_logo = $_FILES["bank_logo"]["name"];
              $target_dir = "../uploads/service_details_images/";
              $target_file = $target_dir . basename($_FILES["bank_logo"]["name"]);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              $getImgUnlink = getImageUnlink('bank_logo','service_details','id',$id,$target_dir);
                //Send parameters for img val,tablename,clause,id,imgpath for image ubnlink from folder
              if (move_uploaded_file($_FILES["bank_logo"]["tmp_name"], $target_file)) {
                   $sql = "UPDATE `service_details` SET title1_value = '$title1_value',title2_value = '$title2_value',title3_value = '$title3_value',title4_value = '$title4_value',title5_value = '$title5_value',free_voucher='$free_voucher',bank_logo = '$bank_logo',description= '$description',status='$status' WHERE id = '$id' ";
                    if($conn->query($sql) === TRUE){
                      echo "<script type='text/javascript'>window.location='service_details.php?msg=success'</script>";
                    } else {
                      echo "<script type='text/javascript'>window.location='service_details.php?msg=fail'</script>";
                    }
                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }  else {
                $sql = "UPDATE `service_details` SET title1_value = '$title1_value',title2_value = '$title2_value',title3_value = '$title3_value',title4_value = '$title4_value',title5_value = '$title5_value',free_voucher='$free_voucher',description= '$description',status='$status' WHERE id = '$id' ";
                if($conn->query($sql) === TRUE){
                  echo "<script type='text/javascript'>window.location='service_details.php?msg=success'</script>";
                } else {
                  echo "<script type='text/javascript'>window.location='service_details.php?msg=fail'</script>";
                }
            }
          }
?>
<?php $getSubCategoriesData = getDataFromTables('service_details',$status=NULL,'id',$id,$activeStatus=NULL,$activeTop=NULL);
$getSubCategories = $getSubCategoriesData->fetch_assoc();
$getCategories = getDataFromTables('services','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);
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
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Service</label>
                    <select id="service_id" name="service_id" class="custom-select" data-error="This field is required." required onChange="getBankInfo(this.value);" disabled style="background-image:none;">
                      <option value="">Select Category</option>
                      <?php while($row = $getCategories->fetch_assoc()) {  ?>
                        <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == $getSubCategories['service_id']) { echo "selected=selected"; }?> ><?php echo $row['name']; ?></option>
                    <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                <!--this below section for ajax call -->  
				        <div id="service-details-section"></div>
                <!--ajax call end section--> 
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Free Voucher</label>
                    <input type="text" class="form-control" id="free_voucher" name="free_voucher" placeholder="Free Voucher" data-error="please enter  free voucher." value="<?php echo $getSubCategories['free_voucher'];?>" required>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Description</label>
                    <textarea name="description" class="form-control" id="description" data-error="Please enter a valid email address." required><?php echo $getSubCategories['description'];?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-4" class="control-label">Bank Logo</label>
                    <img src="<?php echo $base_url . 'uploads/service_details_images/'.$getSubCategories['bank_logo'] ?>"  id="output" height="100" width="100"/>
                    <label class="btn btn-default file-upload-btn">
                        Choose file...
                        <input id="form-control-22" class="file-upload-input" type="file" accept="image/*" name="bank_logo" id="bank_logo"  onchange="loadFile(event)"  multiple="multiple" >
                      </label>
                  </div>
                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getSubCategories['status']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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
<!-- <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script> -->
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
	getBankInfo($("#service_id").val());
    function getBankInfo(val){
		<?php
			$id = $_GET['sdid'];
		  $getQry = "SELECT * FROM service_details WHERE id ='$id' ";
		  $excQry = $conn->query($getQry);
		  $fetchDat = $excQry->fetch_assoc();
		  $title_values=array();
		  $title_values[0] = $fetchDat['title1_value'];
		  $title_values[1] = $fetchDat['title2_value'];
		  $title_values[2] = $fetchDat['title3_value'];
		  $title_values[3] = $fetchDat['title4_value'];
		  $title_values[4] = $fetchDat['title5_value'];				 
		?>
		var title_values = <?php echo json_encode($title_values); ?>;   
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
											+ '   <input type="text" class="form-control" id="form-control-'+(i+1) +'" name="title'+(i+1) +'_value" data-error="Please enter title." placeholder="title'+(i+1) +'" value="'+title_values[i]+'" required>'
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