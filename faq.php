<?php include_once "main_header.php"; ?>
 <?php $getAllActiveFaqs = getAllDataWithActiveRecent('faqs',0); ?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">FAQ</li>
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
                        <div class="">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="section-title mb30">
                                        <h1>General Questions</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 st-accordion col-xs-12">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                        <?php $i=1; while($getAllData=$getAllActiveFaqs->fetch_assoc()) { ?>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
                                                <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>"><?php echo $getAllData['question']; ?></a> </h4>
                                            </div>
                                            <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse <?php if($i==1) { ?> in <?php } else { } ?>" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                                                <div class="panel-body"><?php echo $getAllData['answer']; ?></div>
                                            </div>
                                        </div>
                                        <?php $i++; } ?>
                                        
                                    </div>
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
    <!-- Faq Accordion -->
    <script src="js/accordion.js" type="text/javascript"></script>
    <!-- Back to top script -->
    <script src="js/back-to-top.js" type="text/javascript"></script>

</body>
</html>
