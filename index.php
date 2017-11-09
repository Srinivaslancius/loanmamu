
<?php include_once "main_header.php"; ?>
<?php $getBannersData = getAllDataCheckActive('banners',0);  ?>
<?php $getTestmonialsData = getAllDataCheckActive('testimonials',0);  ?>
<?php $getServicesData = getAllDataCheckActive('services',0);  ?>
<?php $getServicesData1 = getAllDataCheckActive('services',0);  ?>

    <div class="slider" id="slider">
        <!-- slider -->
        <?php while ($row = $getBannersData->fetch_assoc()) { ?>
        <div class="slider-img"><img src="<?php echo $base_url . 'uploads/banner_images/'.$row['banner'] ?>" alt="Loan Mamu" class="" style="width:1349px; height:426px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-captions" style="color:#FFFFFF">
                                <?php echo $row['title']; ?>
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
                    <?php while ($row = $getServicesData1->fetch_assoc()) { ?>
                    <div class="col-md-12 col-sm-12 col-xs-12">
					<div class="rate-counter-block">
                            <div class="icon rate-icon"> <img src="<?php echo $base_url . 'uploads/service_images/'.$row['image'] ?>" alt="Loan Mamu" class="icon-svg-1x"></div>
                            <div class="rate-box">
                            <h1 class="loan-rate"><?php echo $row['service_percentage']; ?></h1>
                            <small class="rate-title"><?php echo $row['name']; ?></small>
                        </div>
					</div>	
                    </div> 
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
	</div>
    <?php $getChooseData1 = getAllDataCheckActive1('content_pages','0',8);
$getChoose1 = $getChooseData1->fetch_assoc(); ?>
	<div class="section-space80">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1><?php echo $getChoose1['title'];?></h1>
                        <p><?php echo $getChoose1['description'];?></p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="service" id="service">
                    <?php while ($row = $getServicesData->fetch_assoc()) { ?>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="bg-white pinside40">
                            <div class="icon mb40"> <img src="<?php echo $base_url . 'uploads/service_images/'.$row['image'] ?>" alt="Loan Mamu" class="icon-svg-2x"> </div>
                            <h2><a href="#" class="title"><?php echo $row['name']; ?></a></h2>
                            <p><?php echo $row['description']; ?></p>
                            <a href="loan_details.php?lid=<?php echo $row['id']; ?>" class="btn-link">Read More</a> </div>
                    </div>
                    
                
                    
                    
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php $getChooseData2 = getAllDataCheckActive1('content_pages','0',9);
$getChoose2 = $getChooseData2->fetch_assoc(); ?>
    <div class="bg-white section-space80">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-xs-12">
                    <div class="mb100 text-center section-title">
                        <!-- section title start-->
                        <h1><?php echo $getChoose2['title'];?></h1>
                        <p><?php echo $getChoose2['description'];?></p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <?php $getChooseData = getAllDataCheckActive1('content_pages','0',3); ?>
            

            <div class="row">
                <?php if($getChoose = $getChooseData->fetch_assoc()) { ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="bg-white pinside40 number-block outline mb60 bg-boxshadow">
                        <div class="circle"><span class="number">1</span></div>
                        <h3 class="number-title"><?php echo $getChoose['title'] ?></h3>
                        <p><?php echo $getChoose['description'] ?></p>
                    </div>
                </div>
                <?php } ?>
                <?php $getApprovedData = getAllDataCheckActive1('content_pages','0',4); 
                if($getApprove = $getApprovedData->fetch_assoc()) { ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="bg-white pinside40 number-block outline mb60 bg-boxshadow">
                        <div class="circle"><span class="number">2</span></div>
                        <h3 class="number-title"><?php echo $getApprove['title'] ?></h3>
                        <p><?php echo $getApprove['description'] ?>.</p>
                    </div>
                </div>
                <?php } ?>
                <?php $getYourCash = getAllDataCheckActive1('content_pages','0',5);
                if($getCash = $getYourCash->fetch_assoc()) { ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="bg-white pinside40 number-block outline mb60 bg-boxshadow">
                        <div class="circle"><span class="number">3</span></div>
                        <h3 class="number-title"><?php echo $getCash['title'] ?></h3>
                        <p><?php echo $getCash['description'] ?>.</p>
                    </div>
                </div>
                <?php } ?>
            </div>
            
        </div>
    </div>
 
	<?php $getChooseData3 = getAllDataCheckActive1('content_pages','0',10);
$getChoose3 = $getChooseData3->fetch_assoc(); ?>
	 <div class="bg-default section-space80">
        <div class="container">
            <div class="row">
               <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1 class="title-white"><?php echo $getChoose3['title'];?></h1>
                        <p><?php echo $getChoose3['description'];?></p>
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
                            <p class="testimonial-text"><?php echo $row['description']; ?></p>
                        </div>
                        <div class="testimonial-autor-box">
                            <div class="testimonial-img pull-left"> <img src="<?php echo $base_url . 'uploads/testimonial_images/'.$row['image'] ?>" alt="Loan Mamu" style="width:71px; height:72px;"> </div>
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
    <?php $getChooseData4 = getAllDataCheckActive1('content_pages','0',11);
$getChoose4 = $getChooseData4->fetch_assoc(); ?>
    <div class="section-space80 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                    <div class="mb60 text-center section-title">
                        <!-- section title-->
                        <h1><?php echo $getChoose4['title'];?></h1>
                        <p><?php echo $getChoose4['description'];?></p>
                    </div>
                    <!-- /.section title-->
                </div>
            </div>
            <div class="row">
                <?php include_once "support.php"; ?>
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
