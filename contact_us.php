<?php include_once "main_header.php"; ?>
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
                                                    <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required>
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
                                <div class="col-md-4 col-xs-12">
                                    <div class="bg-boxshadow pinside60 outline text-center mb30">
                                        <div class="mb40"><i class="icon-briefcase icon-2x icon-default"></i></div>
                                        <h2 class="capital-title">Branch Office</h2>
                                        <p><?php echo $getSiteSettingsData['address'] ?></p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <div class="bg-boxshadow pinside60 outline text-center mb30">
                                        <div class="mb40"><i class="icon-phone-call icon-2x icon-default"></i></div>
                                        <h2 class="capital-title">Call us at </h2>
                                        <h1 class="text-big"><a href="Tel:<?php echo $getSiteSettingsData['mobile']; ?>"><?php echo $getSiteSettingsData['mobile'] ?></a> </h1>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <div class="bg-boxshadow pinside60 outline text-center mb30">
                                        <div class="mb40"> <i class="icon-letter icon-2x icon-default"></i></div>
                                        <h2 class="capital-title">Email Address</h2>
                                        <center><p><a href="mailto:<?php echo $getSiteSettingsData['email'];?>"><?php echo $getSiteSettingsData['email'];?></a></p></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="map">
						 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243647.316983494!2d78.26795745698291!3d17.41229980019287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99daeaebd2c7%3A0xae93b78392bafbc2!2sHyderabad%2C+Telangana!5e0!3m2!1sen!2sin!4v1507031550328" width="100%" height="420" frameborder="0" style="border:0" allowfullscreen></iframe> 
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
