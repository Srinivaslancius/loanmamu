<?php include_once "main_header.php"; ?>
<?php $getBannersData = getAllDataWithActiveRecent('banners');  ?>
<?php $getTestmonialsData = getAllDataWithActiveRecent('testimonials');  ?>
    <div class="slider" id="slider">
        <!-- slider -->
        <?php while ($row = $getBannersData->fetch_assoc()) { ?>
            <div class="slider-img"><img src="<?php echo $base_url . 'uploads/banner_images/'.$row['banner'] ?>" alt="Loan Mamu" class="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                              <?php echo $row['title'];?>                             
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
	<div class="rate-table">
	<div class="section-space20" style="padding-bottom:10px">
        <div class="container">
            <div class="row">
                <div class="service" id="service">
                    <div class="col-md-12 col-sm-12 col-xs-12">
					<div class="rate-counter-block">
                            <div class="icon rate-icon"> <img src="images/loane-01.svg" alt="Loan Mamu" class="icon-svg-1x"></div>
                            <div class="rate-box">
                            <h1 class="loan-rate">9.00%</h1>
                            <small class="rate-title">Credit card</small>
                        </div>
                        
					</div>	
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                       <div class="rate-counter-block">
                            <div class="icon rate-icon"> <img src="images/car1-01.svg" alt="Loan Mamu" class="icon-svg-1x"></div>
                        <div class="rate-box">
                            <h1 class="loan-rate">6.70%</h1>
                            <small class="rate-title">Car Loans</small>
                        </div>
                         </div>      
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                         <div class="rate-counter-block">
                        <div class="icon rate-icon"> <img src="images/business_loan-01.svg" alt="Loan Mamu" class="icon-svg-1x"></div>
                        <div class="rate-box">
                            <h1 class="loan-rate">8.96%</h1>
                            <small class="rate-title">Personal Loans</small>
                        </div>
                    </div>
					</div>
                     <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="rate-counter-block">
                        <div class="icon rate-icon  "> <img src="images/Mortgage_Loan-01.svg" alt="Loan Mamu" class="icon-svg-1x"></div>
                        <div class="rate-box">
                            <h1 class="loan-rate">8.96%</h1>
                            <small class="rate-title">Business Loans</small>
                        </div>
                    </div>
					</div>
                </div>
            </div>
        </div>
    </div>
	</div>
	<div class="section-space80">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>Find Loan Products We Offers</h1>
                        <p>We will match you with a loan program that meet your financial need. In short term liquidity, by striving to make funds available to them <strong>within 24 hours of application.</strong></p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="service" id="service">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="bg-white pinside40">
                            <div class="icon mb40"> <img src="images/business_loan-01.svg" alt="Loan Mamu" class="icon-svg-2x"> </div>
                            <h2><a href="#" class="title">Personal Loan</a></h2>
                            <p>Lorem ipsum dolor sit ameectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque</p>
                            <a href="#" class="btn-link">Read More</a> </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="bg-white pinside40 service-block outline mb30">
                            <div class="icon mb40"> <img src="images/mortgage.svg" alt="Loan Mamu" class="icon-svg-2x"></div>
                            <h2><a href="#" class="title">Home Loan</a></h2>
                            <p>Sed ut perspiciatis unde omnis rror sit voluptatem accusan tium dolo remque laudantium, totam rem aperiam, eaque ipsa </p>
                            <a href="#" class="btn-link">Read More</a> </div>
                    </div>
                <!--    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="bg-white pinside40 service-block outline mb30">
                            <div class="icon mb40"> <img src="images/piggy-bank.svg" alt="Loan Mamu" class="icon-svg-2x"></div>
                            <h2><a href="#" class="title">Education Loan</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elmodo ligula eget dolor. Aenean massa. Cum sociis natoque</p>
                            <a href="#" class="btn-link">Read More</a> </div>
                    </div>-->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="bg-white pinside40 service-block outline mb30">
                            <div class="icon mb40"> <img src="images/Mortgage_Loan-01.svg" alt="Loan Mamu" class="icon-svg-2x"></div>
                            <h2><a href="#" class="title">Business Loan</a></h2>
                            <p>Lorem ipsum dolor sit nean commodo ligula eget dolor simple dummyum sociis natoque.amet, consectetuer adipiscing elit. </p>
                            <a href="#" class="btn-link">Read More</a> </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="bg-white pinside40 service-block outline mb30">
                            <div class="icon mb40"> <img src="images/car1-01.svg" alt="Loan Mamu" class="icon-svg-2x"></div>
                            <h2><a href="#" class="title">Car Loan</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
                            <a href="#" class="btn-link">Read More</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white section-space80">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-xs-12">
                    <div class="mb100 text-center section-title">
                        <!-- section title start-->
                        <h1>Fast &amp; Easy Application Process.</h1>
                        <p>Suspendisse aliquet varius nunc atcibus lacus sit amet coed portaeri sque mami luctus viveed congue lobortis faucibus.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="bg-white pinside40 number-block outline mb60 bg-boxshadow">
                        <div class="circle"><span class="number">1</span></div>
                        <h3 class="number-title">Choose Loan Amount</h3>
                        <p>Suspendisse accumsan imperdue ligula dignissim sit amet vestibulum in mollis etfelis.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="bg-white pinside40 number-block outline mb60 bg-boxshadow">
                        <div class="circle"><span class="number">2</span></div>
                        <h3 class="number-title">Approved Your Loan</h3>
                        <p>Fusce tempor sstibulum varius sem nec mi luctus viverra edcongue lobortis faucibus.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="bg-white pinside40 number-block outline mb60 bg-boxshadow">
                        <div class="circle"><span class="number">3</span></div>
                        <h3 class="number-title">Get Your Cash</h3>
                        <p>Get your money in minutes simtibulm varius semnec mluctus gue lobortis faucibus.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 text-center"> <a href="#" class="btn btn-default">View Our Loans</a> </div>
            </div>
        </div>
    </div>
    <div class="section-space80">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>Why People Choose Us</h1>
                        <p>Suspendisse aliquet varius nunc atcibus lacus sit amet coed portaeri sque mami luctus viveed congue lobortis faucibus.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="bg-white bg-boxshadow">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 nopadding col-xs-12">
                                <div class="bg-white pinside60 number-block outline">
                                    <div class="mb20"><i class="icon-command  icon-4x icon-primary"></i></div>
                                    <h3>Dedicated Specialists</h3>
                                    <p>Duis eget diam quis elit erdiet alidvolutp terdum tfanissim non intwesollis eu mauris.</p>
                                    <a href="#" class="btn btn-outline mt20">Meet the team</a> </div>
                            </div>
                            <div class="col-md-4 col-sm-6 nopadding col-xs-12">
                                <div class="bg-white pinside60 number-block outline">
                                    <div class="mb20"><i class="icon-cup  icon-4x icon-primary"></i></div>
                                    <h3>Success Stories Rating</h3>
                                    <p>Integer facilisis fringilla dolor ut luctus lvinar felis miat velitliquam at fermentum orci.</p>
                                    <a href="#" class="btn btn-outline mt20">View Client Review</a> </div>
                            </div>
                            <div class="col-md-4 col-sm-12 nopadding col-xs-12">
                                <div class="bg-white pinside60 number-block outline">
                                    <div class="mb20"><i class="icon-calculator  icon-4x icon-primary"></i></div>
                                    <h3>No front Appraisal Fees!</h3>
                                    <p> Integer faisis fringilla dolor ut luctus nisi eneinar felis viverra dignissim fermentum orci.</p>
                                    <a href="#" class="btn btn-outline mt20">Why choose us</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
	 <div class="bg-default section-space80">
        <div class="container">
            <div class="row">
               <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1 class="title-white">Some of our Awesome Testimonials</h1>
                        <p>Here are a few words about us from our delighted customers</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="service" id="service">
                <?php while ($row = $getTestmonialsData->fetch_assoc()) { ?>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="testimonial-block mb30">
                        <div class="bg-white pinside30 mb20"  style="padding:30px">
                            <p class="testimonial-text"> “ <?php echo $row['description']; ?> ”</p>
                        </div>
                        <div class="testimonial-autor-box">
                            <div class="testimonial-img pull-left"> <img src="<?php echo $base_url . 'uploads/testimonial_images/'.$row['image'] ?>" alt="Loan Mamu"> </div>
                            <div class="testimonial-autor pull-left">
                                <h4 class="testimonial-name"><?php echo $row['title']; ?></h4>
                            </div>
                        </div>
                    </div>
                  </div>
                <?php } ?>                 
                </div>
            </div>
        </div>
    </div>
    <div class="section-space80 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                    <div class="mb60 text-center section-title">
                        <!-- section title-->
                        <h1>We are Here to Help You</h1>
                        <p>Our mission is to deliver reliable, latest news and opinions.</p>
                    </div>
                    <!-- /.section title-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">
                        <div class="mb40"><i class="icon-calendar-3 icon-2x icon-default"></i></div>
                        <h2 class="capital-title">Apply For Loan</h2>
                        <p>Looking to buy a car or home loan? then apply for loan now.</p>
                        <a href="#" class="btn-link">Get Appointment</a> </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">
                        <div class="mb40"><i class="icon-phone-call icon-2x icon-default"></i></div>
                        <h2 class="capital-title">Call us at </h2>
                        <h1 class="text-big">800-123-456 / 789 </h1>
                        <p>lnfo@loanadvisor.com</p>
                        <a href="#" class="btn-link">Contact us</a> </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">
                        <div class="mb40"> <i class="icon-users icon-2x icon-default"></i></div>
                        <h2 class="capital-title">Talk to Advisor</h2>
                        <p>Need to loan advise? Talk to our Loan advisors.</p>
                        <a href="#" class="btn-link">Meet The Advisor</a> </div>
                </div>
            </div>
        </div>
    </div>
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
    <!-- slider script -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/slider-carousel.js"></script>
    <script type="text/javascript" src="js/service-carousel.js"></script>
    <!-- Back to top script -->
    <script src="js/back-to-top.js" type="text/javascript"></script>

</body>
</html>
