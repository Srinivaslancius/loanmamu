<?php include_once "main_header.php"; ?>
<?php $id= $_GET['sid'];
$sqlMultiple1="SELECT * FROM service_details WHERE  service_id = '$id' ";
$getAllServiceData1 = $conn->query($sqlMultiple1);
    while($getAllProducts1 = $getAllServiceData1->fetch_assoc()) { 
        $bank_name = $getAllProducts1['bank_name'];;
        $interest_rate_range = $getAllProducts1['interest_rate_range'];
        $process_fee_range = $getAllProducts1['process_fee_range'];
        $loan_amount = $getAllProducts1['loan_amount'];
        $tenture_range = $getAllProducts1['tenture_range'];
    }
?>
<?php
if (!isset($_POST['submit']))  {
} else  {
  
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $alt_mobile = $_POST['alt_mobile'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $occupation = $_POST['occupation'];
  $company_name = $_POST['company_name'];
  $designation = $_POST['designation'];
  $monthly_income = $_POST['monthly_income'];
  $message = $_POST['message'];
  $created_at = date("Y-m-d h:i:s");
    $sql = "INSERT INTO apply_now (`name`,`mobile`,`alt_mobile`,`email`,`address`,`city`,`occupation`,`company_name`,`designation`,`monthly_income`,`message`,`created_at`) VALUES ('$name','$mobile','$alt_mobile', '$email','$address', '$city','$occupation','$company_name','$designation','$monthly_income','$message','$created_at')";
        $row =$conn->query($sql);
         $dataem = $getSiteSettingsData['email'];
        //$to = "srinivas@lanciussolutions.com";
        $to = "$dataem";
        $subject = "Loan Application Form";

        $message = "<html><head><title>Loanmamu </title></head>
        <body>
        <p>Application Form</p>
        <h4>Name: </h4><p>".$_POST['name']."</p>
        <h4>Mobile: </h4><p>".$_POST['mobile']."</p>
        <h4>Alternative Mobile: </h4><p>".$_POST['alt_mobile']."</p>
        <h4>Email: </h4><p>".$_POST['email']."</p>
        <h4>Address: </h4><p>".$_POST['address']."</p>
        <h4>City: </h4><p>".$_POST['city']."</p>
        <h4>Occupation: </h4><p>".$_POST['occupation']."</p>
        <h4>Company Name: </h4><p>".$_POST['company_name']."</p>
        <h4>Designation: </h4><p>".$_POST['designation']."</p>
        <h4>Monthly Income: </h4><p>".$_POST['monthly_income']."</p>
        <h4>Message: </h4><p>".$_POST['message']."</p>
        <h4>Bank Name: </h4><p>".$bank_name."</p>
        <h4>Interest rete Range: </h4><p>".$interest_rate_range."</p>
        <h4>Process Fee range: </h4><p>".$process_fee_range."</p>
        <h4>Loan Amout: </h4><p>".$loan_amount."</p>
        <h4>Tenure Range: </h4><p>".$tenture_range."</p>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
        // $headers .= 'Cc: myboss@example.com' . "\r\n";

        if(mail($to,$subject,$message,$headers)) {
            echo  "<script>alert('Message Sent Successfully');window.location.href('apply_now.php');</script>";
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
                            <li class="active">Application form</li>
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
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    Name:<label class="sr-only control-label" for="name">Name<span class=" "> </span></label>
                                                    <input id="name" name="name" type="text" placeholder="Full Name" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                            </div>
                                            </div>
                                            <!-- Text input-->
                                            <!-- <div class="row">
                                                <div class="col-md-3 col-sm-12 col-xs-12">
                                                </div>
                                                <div class="col-md-5 col-sm-12 col-xs-12">
                                                </div>
                                            </div> -->
                                           
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12 col-xs-12">
                                                </div>
                                                <div class="col-md-5 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        Mobile:<label class="sr-only control-label" for="phone">Mobile<span class=" "> </span></label>
                                                        <input id="mobile" name="mobile" type="text" placeholder="Mobile" class="form-control input-md" required maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12 col-xs-12">
                                                </div>
                                                <div class="col-md-5 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        Alternative Mobile:<label class="sr-only control-label" for="phone">Alternative Mobile<span class=" "> </span></label>
                                                        <input id="alt_mobile" name="alt_mobile" type="text" placeholder="Alternative Mobile" class="form-control input-md" required maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12 col-xs-12">
                                                </div>
                                                <div class="col-md-5 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        Email:<label class="sr-only control-label" for="email">Email<span class=" "> </span></label>
                                                        <input type="email" pattern="[^ @]*@[^ @]*" id="email" name="email"  placeholder="Email" class="form-control input-md" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="row">
                                            <!-- Text input-->
                                              <div class="col-md-3 col-sm-12 col-xs-12">
                                              </div>
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    Address:<label class="sr-only control-label" for="name">Address<span class=" "> </span></label>
                                                    <input id="name" name="address" type="text" placeholder="Address" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <!-- Text input-->
                                              <div class="col-md-3 col-sm-12 col-xs-12">
                                              </div>
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    City:<label class="sr-only control-label" for="name">City<span class=" "> </span></label>
                                                    <input id="city" name="city" type="text" placeholder="City" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <!-- Text input-->
                                              <div class="col-md-3 col-sm-12 col-xs-12">
                                              </div>
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    Occupation:<label class="sr-only control-label" for="name"><span class=" ">Occupation:</span></label>
                                                    <div class="row">
                                                    <div class="col-sm-4">
                                                    <div class="radio">
                                                      <label>
                                                        <input type="radio" value="Salaried" name="occupation">
                                                        Salaried
                                                      </label>
                                                    </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                    <div class="radio">
                                                      <label>
                                                        <input type="radio" value="Self employed" name="occupation">
                                                        Self employed
                                                      </label>
                                                    </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                    <div class="radio">
                                                      <label>
                                                        <input type="radio" value="Others" name="occupation">
                                                        Others
                                                      </label>
                                                    </div>
                                                    </div>
                                                    
                                                    </div>                                                  
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <!-- Text input-->
                                              <div class="col-md-3 col-sm-12 col-xs-12">
                                              </div>
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    Company Name:<label class="sr-only control-label" for="name">Company Name<span class=" "> </span></label>
                                                    <input id="company_name" name="company_name" type="text" placeholder="Company Name" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <!-- Text input-->
                                              <div class="col-md-3 col-sm-12 col-xs-12">
                                              </div>
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    Designation:<label class="sr-only control-label" for="name">Designation<span class=" "> </span></label>
                                                    <input id="designation" name="designation" type="text" placeholder="Designation" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                            </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12 col-xs-12">
                                                </div>
                                                <div class="col-md-5 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        Monthly Income:<label class="sr-only control-label" for="phone">Monthly Income<span class=" "> </span></label>
                                                        <input id="monthly_income" name="monthly_income" type="text" placeholder="Monthly Income" class="form-control input-md"   >
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="row">
                                            <!-- Text input-->
                                              <div class="col-md-3 col-sm-12 col-xs-12">
                                              </div>
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    Message:<label class="sr-only control-label" for="name">Message<span class=" "> </span></label>
                                                    <textarea class="form-control" id="message" rows="4" name="message" placeholder="Message" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                            </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12 col-xs-12">
                                                </div>
                                                <div class="col-md-5 col-sm-12 col-xs-12">
                                                    <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-xs-12">
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



