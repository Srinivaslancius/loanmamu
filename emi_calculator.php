<?php include_once "main_header.php"; ?>

    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/widget.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    </head>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">EMI Calculator</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" ">
        <?php $getContentData = getAllDataCheckActive1('content_pages','0',18);
      $getContentData1 = $getContentData->fetch_assoc();?>
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white">
                        <div class="about-section pinside40">
                            <div id="ecww-widget-iframeinner">
                                 <form id="ecww-formwrapper" class="col-xs-12 col-sm-4 no-pad">
                                    <h2 id="ecww-header">EMI Calculator</h2>
                                    <div id="ecww-form">
                                       <div class="form-group">
                                          <label for="ecww-loanamount" class="control-label">Loan Amount</label> 
                                          <div class="input-group"><span class="ecww-addon input-group-addon"><span class="glyphicon glyphicon-rupee"></span></span> <input class="form-control ecww-userinput" id="ecww-loanamount" value="3,00,000" tabindex="1" placeholder="Loan Amount" type="text"> </div>
                                       </div>
                                       <div class="form-group">
                                          <label for="ecww-loaninterest" class="control-label">Interest Rate</label> 
                                          <div class="input-group"> <span class="ecww-addon input-group-addon"><span class="glyphicon glyphicon-percent"></span></span> <input class="form-control ecww-userinput" id="ecww-loaninterest" value="12" tabindex="2" placeholder="Interest Rate" type="text"> </div>
                                       </div>
                                       <div class="form-group">
                                          <label for="ecww-loanterm" class="control-label">Loan Tenure</label> 
                                          <div class="form-group">
                                             <div class="ecww-tenure-choice">
                                                <div class="btn-group" data-toggle="buttons"> <label class="btn btn-primary"> <input name="ecww-loantenure" id="ecww-loanyears" tabindex="4" autocomplete="off" type="radio">Yr </label> <label class="btn btn-primary active"> <input name="ecww-loantenure" id="ecww-loanmonths" tabindex="5" autocomplete="off" type="radio" checked="checked">Mo </label></div>
                                             </div>
                                             <div class="ecww-inline-input-group">
                                                <div class="input-group"> <span class="ecww-addon input-group-addon"><span class="glyphicon glyphicon-time"></span></span> <input class="form-control ecww-userinput" id="ecww-loanterm" value="12" tabindex="3" placeholder="Loan Tenure" type="text"> </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="clearfix"></div>
                                    </div>
                                 </form>
                             <div id="ecww-summary" class="col-xs-12 col-sm-4 no-pad">
                                <div id="ecww-monthlypayment">
                                   <h4>Loan EMI</h4>
                                   <p>₹ 26,655</p>
                                </div>
                                <div id="ecww-totalinterest">
                                   <h4>Total Interest Payable</h4>
                                   <p>₹ 19,856</p>
                                </div>
                                <div id="ecww-totalamount">
                                   <h4>Total of Payments<br>(Principal + Interest)</h4>
                                   <p>₹ 3,19,856</p>
                                </div>
                             </div>
                            </div>
                        </div>
                        <div class="section-space80 bg-white">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                                <div class="mb60 text-center section-title">
                                  <h1><?php echo $getContentData1['title']?></h1>
                                  <p><?php echo $getContentData1['description']?></p>
                                </div>
                              </div>
                            </div>
                            <div class="row" style="padding-right:25px">
                              <?php include_once "support.php"; ?>
                            </div>
                          </div>
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
    <!-- back to top icon -->
    <a href="#0" class="cd-top" title="Go to top">Top</a>
    <script src="js/emicalc-lib.js" type="text/javascript"></script><script src="js/emicalc-main.js" type="text/javascript"></script>
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
