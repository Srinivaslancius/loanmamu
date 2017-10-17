<?php include_once "main_header.php"; ?>
<?php $getServices = getDataFromTables('services','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
<div class="col-md-9 col-sm-12 col-xs-12">
                    <div id="navigation">
                        <!-- navigation start-->
                        <ul>
                            <li class="active"><a href="index.php">Home</a></li>
							<li><a href="about_us.php">About us</a></li>       
                            <li><a href="services.php">Services</a>
                                <ul>
                                <?php while($row = $getServices->fetch_assoc()) {  ?>
                                    <li><a href="loan_loan.php"><?php echo $row['name']; ?></a></li>
                                <?php } ?>
                                </ul>                                
                            </li>
                                                
                            <li><a href="#">Careers</a>
                                <ul>
								<li><a href="current_openings.php">Current Opening</a></li>
								
                                </ul>
                            </li>
							  <li><a href="faq.php">FAQ'S</a></li>
                            <li><a href="contact_us.php">Contact us</a></li>
                        </ul>
                    </div>
                    <!-- /.navigation start-->
                </div>