<?php include_once "main_header.php"; ?>
<?php
//ob_start();
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['message']))  {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['mobile'];
        $message = $_POST['message'];
        $created_at = date("Y-m-d h:i:s");
        $sql = "INSERT INTO customer_enqueries (`customer_name`,`customer_email`,`customer_mobile`,`customer_feedback`,`created_at`) VALUES ('$name','$email','$phone','$message','$created_at')";
        $conn->query($sql);
               
$dataem = $getSiteSettingsData['email'];
//$to = "srinivas@lanciussolutions.com";
$to = "$dataem";
$subject = "Contact Request Submitted by ".$name;

$message = "<html><head><title>Loanmamu </title></head>
<body>
<p>Contact Request Submitted!</p>
<h4>Name: </h4><p>".$_POST['name']."</p>
<h4>Email: </h4><p>".$_POST['email']."</p>
<h4>Mobile: </h4><p>".$_POST['mobile']."</p>
<h4>Message: </h4><p>".$_POST['message']."</p>
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
    echo  "<script>alert('Mail Sent successfully');window.location.href('contact_us.php');</script>";
}

}?>
<!DOCTYPE html>
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
        <?php $getContentData = getAllDataCheckActive1('content_pages','0',15);
$getContent = $getContentData->fetch_assoc(); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="contact-form mb60">
                            <div class=" ">
                                <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                    <div class="mb60  section-title text-center  ">
                                        <!-- section title start-->
                                        <h1><?php echo $getContent['title']; ?></h1>
                                        <p><?php echo $getContent['description']; ?></p>
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
                                                    <input id="phone" name="mobile" type="text" placeholder="Phone" class="form-control input-md" required maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)">
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="message"> </label>
                                                    <textarea class="form-control" id="message" rows="7" name="message" placeholder="Message" required></textarea>
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
                        <?php $getContentData1 = getAllDataCheckActive1('content_pages','0',16);
                        $getContent1 = $getContentData1->fetch_assoc(); ?>
                        <div class="contact-us mb60">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb60  section-title">
                                        <!-- section title start-->
                                        <h1><?php echo $getContent1['title']; ?> </h1>
                                        <p class="lead"><?php echo $getContent1['description']; ?></p>
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


