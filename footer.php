  <?php $getAboutUsData = getDataFromTables('content_pages',$status=NULL,'id',1,$activeStatus=NULL,$activeTop=NULL);
      $getAboutUs = $getAboutUsData->fetch_assoc();?>
  <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="widget-text mt40">
                        <!-- widget text -->
                        <p><?php echo substr(strip_tags($getAboutUs['description']), 0,199);?>.</p>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <p class="address-text"><span><i class="icon-placeholder-3 icon-1x"></i> </span><?php echo $getSiteSettingsData['address'] ?></p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <p class="call-text"><span><i class="icon-phone-call icon-1x"></i></span><a href="Tel:<?php echo $getSiteSettingsData['mobile']; ?>"><?php echo $getSiteSettingsData['mobile'] ?></a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.widget text -->
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="widget-footer mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about_us.php">About Us</a></li>
							<li><a href="#">Services</a></li>
                            <li><a href="current_openings.php">Careers</a></li>
                            <li><a href="faq.php">Faq's</a></li>
                            <li><a href="contact_us.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="widget-footer mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="#">Car Loan</a></li>
                            <li><a href="#">Personal Loan</a></li>
                            <li><a href="#">Mortgage Loan</a></li>
                            <li><a href="#">Business Loan</a></li>
                            <li><a href="#">Home Loan</a></li>
                            <li><a href="#">Life Insurence</a></li>
							<li><a href="#">Health Insurence</a></li>
							<li><a href="#">Car Insurence</a></li>
							<li><a href="#">Mutual Funds</a></li>
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="widget-social mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="<?php echo $getSiteSettingsData['fb_link']; ?>" target="_blank"><i class="fa fa-facebook"></i>Facebook</a></li>
                            <li><a href="<?php echo $getSiteSettingsData['twitter_link']; ?>" target="_blank"><i class="fa fa-google-plus"></i>Google Plus</a></li>
                            <li><a href="<?php echo $getSiteSettingsData['gplus_link']; ?>" target="_blank"><i class="fa fa-linkedin"></i>Linked In</a></li>
                            <!-- <li><a href="#"><i class="fa fa-linkedin"></i>Youtube</a></li> -->
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
            </div>
        </div>