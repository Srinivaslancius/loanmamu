<?php include_once "main_header.php"; ?>
<?php
if (!isset($_POST['submit']))  {
} else  {
  
  $user_name = $_POST['user_name'];
  $user_mobile = $_POST['user_mobile'];
  $user_password = encryptPassword($_POST['user_password']);
  $user_email = $_POST['user_email'];
  $created_at = date("Y-m-d h:i:s");

    $sql = "INSERT INTO users (`user_name`,`user_mobile`,`user_password`,`user_email`,`created_at`) VALUES ('$user_name','$user_mobile','$user_password', '$user_email','$created_at')";
         if($conn->query($sql) === TRUE){
                       echo "<script type='text/javascript'>alert('Data uploaded Successfully');window.location.href='login.php'</script>";
                    } else {
                       echo "<script type='text/javascript'>window.location='register.php?msg=fail'</script>";
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
                            <li class="active">Sign Up</li>
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
                                        <h1>Sign Up</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <form class="contact-us" method="post"  >
                                        <div class=" ">
                                            <div class="row">
                                            <!-- Text input-->
                                              <div class="col-md-3 col-sm-12 col-xs-12">
                                              </div>
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    Name:<label class="sr-only control-label" for="name">Name<span class=" "> </span></label>
                                                    <input id="name" name="user_name" type="text" placeholder="Full Name" class="form-control input-md" required>
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
                                                        Mobile:<label class="sr-only control-label" for="phone">Mobile<span class=" "> </span></label>
                                                        <input  name="user_mobile" type="text" placeholder="Mobile" class="form-control input-md" required maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)" required>
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
                                                        <input type="email" pattern="[^ @]*@[^ @]*" id="email" name="user_email"  placeholder="Email" class="form-control input-md" required>
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
                                                        Password:<label class="sr-only control-label" for="email">Password<span class=" "> </span></label>
                                                        <input type="password"   name="user_password"  placeholder="Password" class="form-control input-md" required>
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



