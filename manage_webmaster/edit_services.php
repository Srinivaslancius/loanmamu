<?php include_once 'admin_includes/main_header.php'; ?>
<?php
$id = $_GET['uid'];
 if (!isset($_POST['submit']))  {
            echo "fail";
    } else  {
            $name = $_POST['name'];
            $title1 = $_POST['title1'];
            $title2 = $_POST['title2'];
            $title3 = $_POST['title3'];
            $title4 = $_POST['title4'];
            $title5 = $_POST['title5'];
            $description = $_POST['description'];
            $category_id = $_POST['category_id'];
            $service_percentage = $_POST['service_percentage'];
            $status = $_POST['status'];
            if($_FILES["fileToUpload"]["name"]!='') {
              $fileToUpload = $_FILES["fileToUpload"]["name"];
              $target_dir = "../uploads/service_images/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              $getImgUnlink = getImageUnlink('image','services','id',$id,$target_dir);
                //Send parameters for img val,tablename,clause,id,imgpath for image ubnlink from folder
              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                   $sql = "UPDATE `services` SET name = '$name',title1='$title1',title2='$title2',title3='$title3',title4='$title4',title5='$title5',description = '$description',category_id='$category_id', image = '$fileToUpload', service_percentage = '$service_percentage',status='$status' WHERE id = '$id' ";
                    if($conn->query($sql) === TRUE){
                      echo "<script type='text/javascript'>window.location='services.php?msg=success'</script>";
                    } else {
                      echo "<script type='text/javascript'>window.location='services.php?msg=fail'</script>";
                    }
                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }  else {
                $sql = "UPDATE `services` SET name = '$name',title1='$title1',title2='$title2',title3='$title3',title4='$title4',title5='$title5',description = '$description', category_id='$category_id',service_percentage = '$service_percentage',status='$status' WHERE id = '$id' ";
                if($conn->query($sql) === TRUE){
                  echo "<script type='text/javascript'>window.location='services.php?msg=success'</script>";
                } else {
                  echo "<script type='text/javascript'>window.location='services.php?msg=fail'</script>";
                }
            }
          }
?>
<div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Services</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <?php $getServices = getDataFromTables('services',$status=NULL,'id',$id,$activeStatus=NULL,$activeTop=NULL);
              $getServices1 = $getServices->fetch_assoc(); ?>
              <?php $getCategories = getDataFromTables('categories','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your Category</label>
                    <select id="form-control-3" name="category_id" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Category</option>
                      <?php while($row = $getCategories->fetch_assoc()) {  ?>
                        <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == $getServices1['category_id']) { echo "selected=selected"; }?> ><?php echo $row['category_name']; ?></option>
                    <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Service Name</label>
                    <input type="text" class="form-control" id="form-control-2" name="name" required value="<?php echo $getServices1['name'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Title1</label>
                    <input type="text" class="form-control" id="form-control-2" name="title1" placeholder="Title1" data-error="Please enter bank title." required value="<?php echo $getServices1['title1'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Title2</label>
                    <input type="text" class="form-control" id="form-control-2" name="title2" placeholder="Title2" data-error="Please enter interest title." required value="<?php echo $getServices1['title2'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Title3</label>
                    <input type="text" class="form-control" id="form-control-2" name="title3" placeholder="Title3" data-error="Please enter Process Fee Title." required value="<?php echo $getServices1['title3'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Title4</label>
                    <input type="text" class="form-control" id="form-control-2" name="title4" placeholder="Title4" data-error="Please enter Loan Amount Title." required value="<?php echo $getServices1['title4'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Title5</label>
                    <input type="text" class="form-control" id="form-control-2" name="title5" placeholder="Title5" data-error="Please enter Tenure Title." required value="<?php echo $getServices1['title5'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Description</label>
                    <textarea name="description" class="form-control" id="description" data-error="Please enter a valid Description ." required><?php echo $getServices1['description'];?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-4" class="control-label">Image</label>
                    <img src="<?php echo $base_url . 'uploads/service_images/'.$getServices1['image'] ?>"  id="output" height="100" width="100"/>
                    <label class="btn btn-default file-upload-btn">
                        Choose file...
                        <input id="form-control-22" class="file-upload-input" type="file" accept="image/*" name="fileToUpload" id="fileToUpload"  onchange="loadFile(event)"  multiple="multiple" >
                      </label>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Service Percentage</label>
                    <textarea name="service_percentage" class="form-control" id="description" data-error="Please enter Service Percentage ." required><?php echo $getServices1['service_percentage'];?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getServices1['status']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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