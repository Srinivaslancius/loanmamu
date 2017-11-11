<?php include_once "main_header.php"; error_reporting(0);?>

<?php 
$id= $_GET['lid'];
$getAllActiveServices = getIndividualDetails($id,'services','id');  

$sqlMultiple="SELECT * FROM service_details WHERE  status=0 AND service_id = '$id' ";
$getAllServiceData = $conn->query($sqlMultiple);
?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><?php echo $getAllActiveServices['name']; ?>  /  Loan Details</li>
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
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="mb60">
                                    <p class="lead">Compare Interest Rates, EMI &amp; other details and choose the best Loan.</p>
                                </div>
                            </div>
                        </div>
                        <?php $getQry = "SELECT * FROM service_details WHERE  service_id= '$id' AND status = 0";
                                  $excQry = $conn->query($getQry);
                                  $getSerId = $excQry->fetch_assoc();
                            ?>
                            <?php 
                                  $sql = "SELECT * FROM services WHERE id='$id' AND status = 0";
                                  $res = $conn->query($sql);
                                  $getData = $res->fetch_assoc();
                            ?>
                        <div class="compare-block prdct">
                            <div class="compare-row outline pinside0 padd0" style="padding-top:30px">
                                <div class="row" style="padding-bottom:-150px">
                                     <div class="col-md-2 col-sm-12 col-xs-12">
                                            <div class="text-center">
                                                    <h5><?php echo $getData['title1']?></h5>
                                                </div>                                      
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        
                                                <div class="text-center">
                                                    <h5><?php echo $getData['title2']?></h5>
                                                </div>                                          
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        
                                                <div class="text-center">                                               
                                                    <h5><?php echo $getData['title3']?></h5>
                                                </div>                                          
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-12">
                                        
                                                <div class="text-center">
                                                    
                                                    <h5><?php echo $getData['title4']?></h5>                                        
                                    </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                                                            
                                                <div class="text-center">                                               
                                                    <h5><?php echo $getData['title5']?></h5>
                                                </div>                                                                                  
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-12">
                                        <div class="rate-counter-block-one" style="border:0px">
                                        
                                      </div>
                                    </div>
                                </div>
                           </div>
                        </div>
                        <?php if($getAllServiceData->num_rows > 0) { ?>
                        <div class="compare-block mb30 prdct">
                            <div class="compare-row outline pinside30 padd0">
                                <?php $i=1; while($getAllProducts = $getAllServiceData->fetch_assoc()) { ?>
                                <div class="row brdrbtm">
                                    <div class="col-md-2 col-sm-12 col-xs-12 paddrl0">
                                        <div class="rate-counter-block-one">
                                            <div class="rate-box">
                                                <center><img src="<?php echo $base_url . 'uploads/service_details_images/'.$getAllProducts['bank_logo'] ?>" alt="Loan Mamu" height="50" width="50"><?php echo $getAllProducts['bank_name']; ?></center>
                                                <p style="text-align:center"><?php echo $getAllProducts['title1_value']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-2 col-sm-2 col-xs-12 paddrl0">
                                        <div class="rate-counter-block-one">    
                                            <div class="rate-box">
                                                <div class="text-center">
                                                    <h3 class="fees"><?php echo $getAllProducts['title2_value']; ?></h3>
                                                    <!-- <small>Process Fee Range</small> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-12 paddrl0">
                                        <div class="rate-counter-block-one">
                                            <div class="rate-box">
                                                <div class="text-center">
                                                    <h3 class="compare-rate"><?php echo $getAllProducts['title3_value']; ?></h3>
                                                    <!-- <small>Loan Amount</small> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-12 paddrl0">
                                        <div class="rate-counter-block-one">
                                            <div class="rate-box">
                                                <div class="text-center">
                                                    <h3 class="repayment"><?php echo $getAllProducts['title4_value']; ?></h3>
                                                    <!-- <small>Tenure Range</small> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-2 col-sm-2 col-xs-12 paddrl0">
                                        <div class="rate-counter-block-one">
                                            <div class="rate-box">
                                                <div class="text-center">
                                                    <h3 class="repayment"><?php echo $getAllProducts['title5_value']; ?></h3>
                                                    <!-- <small>Tenure Range</small> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-12 paddrl0">
                                        <div class="rate-counter-block-one" style="border:0px">
                                            <div class="rate-box">
                                            <center>
                                                <div class="btn-group">
                                                    <a href="javascript:void(0);" id="btn_loan" onClick="showDetails(<?php echo $i; ?>);" class="btn btn-default btn-sm btn_loan">Details</a>
                                                    <a href="apply_now.php?sid=<?php echo $getAllProducts['id']; ?>" class="btn btn-default btn-sm">Apply</a>
                                                </div>
                                            </center>
                                            </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <center><small style="color:#f90e83"><?php echo $getAllProducts['free_voucher']; ?></small></center>
                                </div>
                                </div>

                                <div class="row brdrbtm" id="details-block-<?php echo $i; ?>" style="display: none; padding: 20px;">
                                    <?php echo $getAllProducts['description']; ?>
                                </div>
                                <?php $i++; } ?>
                                
                            </div>
                        </div>  
                        <?php } else { ?>
                            <div style="text-align:center">
                                No Details Found!
                            </div>
                        <?php } ?>

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
    <script src="../../../code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/menumaker.js"></script>
    <!-- animsition -->
    <script type="text/javascript" src="js/animsition.js"></script>
    <script type="text/javascript" src="js/animsition-script.js"></script>
    <!-- sticky header -->
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <!-- Faq Accordion -->
    <script src="js/accordion.js" type="text/javascript"></script>
    
    <!-- Back to top script -->
    <script src="js/back-to-top.js" type="text/javascript"></script>
    

    <script>
        var showDetails = function(value){
                $('#details-block-'+value).toggle().addClass('animated fadeInUp');  
            };      
    </script>
</body>
</html>
