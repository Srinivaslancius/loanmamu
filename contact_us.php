<?php include_once "main_header.php"; ?>

<?php error_reporting(1);   
$statusMsg = '';
$msgClass = '';
    if(isset($_POST['submit'])){
        // Get the submitted form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        
        // Check whether submitted data is not empty
        if(!empty($email) && !empty($name) && !empty($phone) && !empty($inquiry)){
            
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                $statusMsg = 'Please enter your valid email.';
                $msgClass = 'errordiv';
            }else{
                // Recipient email
                $toEmail = 'srinivas@lanciussolutions.com';
                $emailSubject = 'Contact Request Submitted by '.$name;
                $htmlContent = '<h2>Contact Request Submitted</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Subject</h4><p>'.$phone.'</p>
                    <h4>Message</h4><p>'.$message.'</p>';
                
                // Set content-type header for sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                // Additional headers
                $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

                
                // Send email
                if(mail($toEmail,$emailSubject,$htmlContent)){
                    $statusMsg = 'Your contact request has been submitted successfully !';
                    $msgClass = 'succdiv';
                }else{
               
                    $statusMsg = 'Your contact request submission failed, please try again.';
                    $msgClass = 'errordiv';
                }
            }
        }else{
            $statusMsg = 'Please fill all the fields.';
            $msgClass = 'errordiv';
        }
    } ?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Contact us</li>
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
                                        <h1>Get In Touch</h1>
                                        <p>Reach out to us &amp; we will respond as soon as we can.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <form class="contact-us" method="post" action="">
                                        <div class=" ">
                                            <!-- Text input-->
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="name">name<span class=" "> </span></label>
                                                    <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="email">Email<span class=" "> </span></label>
                                                    <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="phone">Phone<span class=" "> </span></label>
                                                    <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)">
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="message"> </label>
                                                    <textarea class="form-control" id="message" rows="7" name="message" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <div class="col-md-12 col-xs-12">
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.section title start-->
                        </div>
                        <div class="contact-us mb60">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb60  section-title">
                                        <!-- section title start-->
                                        <h1>We are here to help you </h1>
                                        <p class="lead">Various versions have evolved over the years sometimes by accident sometimes on purpose injected humour and the like.</p>
                                    </div>
                                    <!-- /.section title start-->
                                </div>
                            </div>
                            <div class="row">
                                <?php include_once "support.php"; ?>
                            </div>
                        </div>
                    <!-- <div class="container"> -->
                        <div class="row">                               
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                <script src="https://maps.google.com/maps/api/js?key=AIzaSyA04qekzxWtnZq6KLkabMN_4abcJt9nCDk" type="text/javascript"></script>
                       
                                <div id="map" style="display:block; height: 350px;"></div>                               
                            <script src="http://maps.google.com/maps/api/js?key=AIzaSyAPMSKaLcB-6I-M3LXAcwHu3H8apyhciRQ"
                                type="text/javascript"></script>
                             <script type="text/javascript">
                            var locations = [
                              ['lancius it solutions', 17.445913, 78.381229],
                              
                            ];

                            var map = new google.maps.Map(document.getElementById('map'), {
                              zoom: 15,
                              center: new google.maps.LatLng(17.448293, 78.391485),
                              mapTypeId: google.maps.MapTypeId.ROADMAP
                            });

                            var infowindow = new google.maps.InfoWindow();

                            var marker, i;

                            for (i = 0; i < locations.length; i++) {  
                              marker = new google.maps.Marker({
                                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                                map: map
                              });

                              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                return function() {
                                  infowindow.setContent(locations[i][0]);
                                  infowindow.open(map, marker);
                                }
                              })(marker, i));
                            }
                          </script>
                                   
                            </div>
                        </div>
                   <!--  </div> -->
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
