<?php include_once "main_header.php";

 ?>
<?php
if (!isset($_POST['submit']))  {
}   else  {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = encryptPassword($_POST['user_password']);

    $login_details = "SELECT * FROM users WHERE user_email ='$user_email' AND user_password = '$user_password' ";
    $result = $conn->query($login_details);
         if($row = $result->fetch_assoc())
                {   
                    
                    $_SESSION['user_login_session_id'] =  $row['id'];
                    $_SESSION['user_login_session_name'] = $row['user_name'];
                    echo "<script>history.go(-2);</script>";
                } else {
                   
                    echo "<script type='text/javascript'>alert('Email or Password are Wrong !');window.location.href='login.php'</script>";
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
                            <li class="active">Sign In</li>
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
                                        <h1>Sign In</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <form class="contact-us" method="post"  >
                                        <div class=" ">
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



