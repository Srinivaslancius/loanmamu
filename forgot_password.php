<?php include_once "main_header.php";

 ?>
<?php
if (!isset($_POST['submit']))  {
}   else  {
    $forgot_email = $_POST['forgot_email'];
    $sql ="SELECT * FROM users WHERE user_email = '".$_POST["forgot_email"]."' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $user_name = $row['user_name'];
    $pwd = decryptPassword($row['user_password']);
    if($result->num_rows>0){
                    $to = $_POST['forgot_email'];
                //$to = "$dataem";
                $subject = "User Forgot Password";

                $message .= "<style>
                    .body{
                width:100% !important; 
                margin:0 !important; 
                padding:0 !important; 
                -webkit-text-size-adjust:none;
                -ms-text-size-adjust:none; 
                background-color:#FFFFFF;
                font-style:normal;
                }
                .header{
                background-color:#c90000;
                color:white;
                width:100%;
                }
                .content{
                background-color:#FBFCFC;
                color:#17202A;
                width:100%;
                padding-top:15px;
                padding-bottom;15px;
                text-align:justify;
                font-size:14px;
                line-height:18px;
                font-style:normal;
                }
                h3{
                color: #c90000;}
                .footer{
                background-color:#c90000;
                color:white;
                width:100%;
                padding-top:9px;
                padding-bottom:5px;
                }
                .logo-responsive{
                max-width: 100%;
                height: auto !important;
                }
                @media screen and (min-width: 480px) {
                    .content{
                    width:50%;
                    }
                    .header{
                    width:50%;
                    }
                    .footer{
                    width:50%;
                    }
                    .logo-responsive{
                    max-width: 100%;
                    height: auto !important;
                    }
                }
                </style>";

                $message .= "<html><head><title>Loanmamu Forgot Password</title></head>
                <body>
                        <div class='container header'>
                            <div class='row'>
                                <div class='col-lg-2 col-md-2 col-sm-2'>
                                </div>
                                <div class='col-lg-8 col-md-8 col-sm-8'>
                                <center><h2>".$getSiteSettingsData['admin_title']."</h2></center>
                                </div>
                                <div class='col-lg-2 col-md-2 col-sm-2'>
                                    
                                </div>
                            </div>
                        </div>
                        <div class='container content'>
                            <h3>username and Password</h3>
                            <h4>UserName: </h4><p>".$user_name."</p>
                            <h4>Password: </h4><p>".$pwd."</p> 
                        </div>
                        <div class='container footer'>
                            
                        </div>
                    </body>
                </html>";
                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                // More headers
                $headers .= $getSiteSettingsData['email'];
                // $headers .= 'Cc: myboss@example.com' . "\r\n";
                    if(mail($to,$subject,$message,$headers)) {
                      echo  "<script>alert('Password Sent To Your Email,Please Check.');window.location.href('login.php');</script>";
                    }else{
                        echo "fail";
                    }
                }  else{
                    echo "<script>alert('Your Entered Email Not Found');</script>";
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
                            <li class="active">Forgot Password</li>
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
                                        <h1>Forgot Password</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <form class="contact-us" method="post">
                                        <div class=" ">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12 col-xs-12">
                                                </div>
                                                <div class="col-md-5 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        Email:<label class="sr-only control-label" for="email">Email<span class=" "> </span></label>
                                                        <input type="email" pattern="[^ @]*@[^ @]*" id="email" name="forgot_email"  placeholder="Email" class="form-control input-md" required>
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



