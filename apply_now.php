<?php include_once "main_header.php"; ?>
<?php $getAboutUsData = getDataFromTables('content_pages',$status=NULL,'id',1,$activeStatus=NULL,$activeTop=NULL);
      $getAboutUs = $getAboutUsData->fetch_assoc();?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Coming Soon</li>
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
                    <div class="wrapper-content bg-white">
                        <div class="about-section pinside40">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-8 col-sm-12">
                                    <div class="text-center section-space50">
                                        <h1>Coming Soon</h1>
                                        <p style="text-align:justify"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="section-space80 bg-white">
							<div class="container">
								<div class="row">
									<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
										<div class="mb60 text-center section-title">
											<h1>We are Here to Help You</h1>
											<p>Our mission is to deliver reliable, latest news and opinions.</p>
										</div>
									</div>
								</div>
								<div class="row" style="padding-right:25px">
									<?php include_once "support.php"; ?>
								</div>
							</div>
						</div> -->
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
