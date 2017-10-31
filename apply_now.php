<?php include_once "main_header.php"; ?>
<?php
if (!isset($_POST['submit']))  {
  //If fail
  //echo "fail";
} else  {
  //If success
  $name = $_POST['name'];
  $experience = $_POST['experience'];
  $email = $_POST['email'];
  $resume_title = $_POST['resume_title'];
  $mobile = $_POST['mobile'];
  $fileToUpload = $_FILES["fileToUpload"]["name"];
  $created_at = date("Y-m-d h:i:s");
  if($fileToUpload!='') {

    $target_dir = "uploads/resumes/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
         $sql = "INSERT INTO posted_resumes (`name`,`experience`,`email`,`resume_title`,`mobile`,`resumes`,`created_at`) VALUES ('$name','$experience','$email', '$resume_title','$mobile', '$fileToUpload', '$created_at')";
        if($conn->query($sql) === TRUE){
          echo  "<script>alert('Message Sent successfully');window.location.href('post_resume.php');</script>";
        }else {
          echo "<script type='text/javascript'>window.location='current_openings.php?msg=fail'</script>";
        }
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
  }
}
?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li class="active">Careers</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="contact-form mb60">
                            <div class=" ">
                                <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                    <div class="mb60  section-title text-center  ">
                                        <!-- section title start-->
                                        <h1>Application form</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <form class="contact-us" method="post"  enctype="multipart/form-data">
                                        <div class=" ">
                                            <div class="row">
                                            <!-- Text input-->
                                              <div class="col-md-3 col-sm-12 col-xs-12">
                                              </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    Name:<label class="sr-only control-label" for="name">Name<span class=" "> </span></label>
                                                    <input id="name" name="name" type="text" placeholder="Full Name" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                            </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12 col-xs-12">
                                                </div>
                                                <div class="col-md-5 col-sm-12 col-xs-12">
                                                </div>
                                            </div>
                                           
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12 col-xs-12">
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        Mobile:<label class="sr-only control-label" for="phone">Mobile<span class=" "> </span></label>
                                                        <input id="mobile" name="mobile" type="text" placeholder="Mobile" class="form-control input-md" required maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-sm-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12 col-xs-12">
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        Alternative Mobile:<label class="sr-only control-label" for="phone">Alternative Mobile<span class=" "> </span></label>
                                                        <input id="mobile" name="mobile1" type="text" placeholder="Alternative Mobile" class="form-control input-md" required maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-sm-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12 col-xs-12">
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        Email:<label class="sr-only control-label" for="email">Email<span class=" "> </span></label>
                                                        <input type="email" pattern="[^ @]*@[^ @]*" id="email" name="email"  placeholder="Email" class="form-control input-md" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-sm-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="row">
                                            <!-- Text input-->
                                              <div class="col-md-3 col-sm-12 col-xs-12">
                                              </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    Address:<label class="sr-only control-label" for="name">Address<span class=" "> </span></label>
                                                    <input id="name" name="addredd" type="text" placeholder="Address" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <!-- Text input-->
                                              <div class="col-md-3 col-sm-12 col-xs-12">
                                              </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    City:<label class="sr-only control-label" for="name">City<span class=" "> </span></label>
                                                    <input id="name" name="city" type="text" placeholder="City" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <!-- Text input-->
                                              <div class="col-md-3 col-sm-12 col-xs-12">
                                              </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    Occupation:<label class="sr-only control-label" for="name"><span class=" "> </span></label>
                                                    <input id="occupation" name="occupation" type="radio" value="Salaried" class="form-control input-md" >Salaried
                                                    <input id="occupation" name="occupation" type="radio" value="Self employed" class="form-control input-md" >Self employed
                                                    <input id="occupation" name="occupation" type="radio" value="Others" class="form-control input-md">Others
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <!-- Text input-->
                                              <div class="col-md-3 col-sm-12 col-xs-12">
                                              </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    Company Name:<label class="sr-only control-label" for="name">Company Name<span class=" "> </span></label>
                                                    <input id="name" name="company_name" type="text" placeholder="Company Name" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <!-- Text input-->
                                              <div class="col-md-3 col-sm-12 col-xs-12">
                                              </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    Designation:<label class="sr-only control-label" for="name">Designation<span class=" "> </span></label>
                                                    <input id="name" name="designation" type="text" placeholder="Designation" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                            </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12 col-xs-12">
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        Monthly Income:<label class="sr-only control-label" for="phone">Monthly Income<span class=" "> </span></label>
                                                        <input id="monthly_income" name="monthly_income" type="text" placeholder="Monthly Income" class="form-control input-md"  pattern="[0-9]{10}" onkeypress="return isNumberKey(event)" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-sm-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="row">
                                            <!-- Text input-->
                                              <div class="col-md-3 col-sm-12 col-xs-12">
                                              </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    Message:<label class="sr-only control-label" for="name">Message<span class=" "> </span></label>
                                                    <textarea class="form-control" id="message" rows="4" name="message" placeholder="Message" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                            </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12 col-xs-12">
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                                </div>
                                                <div class="col-md-5 col-sm-12 col-xs-12">
                                                </div>
                                            </div>  
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.section title start-->
                        </div>
                        
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content end -->
     <div class="footer section-space50">
        <!-- footer -->
        <?php include_once "footer.php"; ?>
    </div>
    <!-- /.footer -->
    <div class="tiny-footer">
        <!-- tiny footer -->
         <?php include_once "footer_bottom.php"; ?>
    </div>
    <!-- /.tiny footer -->
    <!-- /.tiny footer -->
    <!-- back to top icon -->
    <a href="#0" class="cd-top" title="Go to top">Top</a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/menumaker.js"></script>
    <!-- animsition -->
    <script type="text/javascript" src="js/animsition.js"></script>
    <script type="text/javascript" src="js/animsition-script.js"></script>
    <!-- sticky header -->
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <!-- Back to top script -->
    <script src="js/back-to-top.js" type="text/javascript"></script>
    
</body>
</html>

<script type="text/javascript">
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
  }
</script>



