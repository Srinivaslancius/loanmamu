<?php include_once "main_header.php"; ?>
<?php $getServices = getDataFromTables('services','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);
?>
<div class="col-md-9 col-sm-12 col-xs-12">
    <?php 
    $currentFile = $_SERVER["PHP_SELF"];
    $parts = Explode('/', $currentFile);
    $page_name = $parts[count($parts) - 1];
?>
<style type="text/css">
.check_page {
    color:#f51f8a !important;
}
</style>
                    <div id="navigation">
                        <!-- navigation start-->
                        <ul>
                            <li class="active"><a href="index.php" <?php if($page_name == 'index.php') {  ?> class="check_page" <?php } ?>   >Home</a></li>
                            <li><a href="about_us.php" <?php if($page_name == 'about_us.php') {  ?> class="check_page" <?php } ?>>About us</a></li>   


                            <li><a href="#" <?php if($page_name == 'loan_details.php') {  ?> class="check_page" <?php } ?>>Services</a>
                                    <ul class="sub-menu">
                                    <?php $getCategory = getDataFromTables('categories','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                                    <?php while($getCat = $getCategory->fetch_assoc()) {  ?>

                                        <li>
                                            <a href="login_details.php?lid=<?php echo $getCat['id']; ?>"><?php echo $getCat['category_name']; ?></a>
                                            <?php $getServices = getDataFromTables('services','0','category_id',$getCat['id'],$activeStatus=NULL,$activeTop=NULL);  ?>
                                             <ul class="sub-menu">
                                                <?php while($getServices1 = $getServices->fetch_assoc()) {  ?>
                                                <li class="active">
                                                    <a href="loan_details.php?lid=<?php echo $getServices1['id']; ?>"><?php echo $getServices1['name']; ?></a>
                                                    
                                                    
                                                </li>
                                                <?php } ?>                                              
                                            </ul> 
                                        </li>

                                    <?php } ?>
                                        
                                    </ul>
                            </li>  
                                                   
                            <li><a href="current_openings.php" <?php if($page_name == 'post_resume.php' || $page_name == 'current_openings.php') {  ?> class="check_page" <?php } ?>>Careers</a>
                                <ul>
                                <li><a href="current_openings.php" <?php if($page_name == 'current_openings.php') {  ?> class="check_page" <?php } ?>>Current Opening</a></li>
                                <li><a href="post_resume.php" <?php if($page_name == 'post_resume.php') {  ?> class="check_page" <?php } ?>>Post Resume</a></li>
                                
                                </ul>
                            </li>
                              <li><a href="faq.php" <?php if($page_name == 'faq.php') {  ?> class="check_page" <?php } ?>>FAQ'S</a></li>
                            <li><a href="contact_us.php" <?php if($page_name == 'contact_us.php') {  ?> class="check_page" <?php } ?>>Contact us</a></li>
                        </ul>
                    </div>
                    <!-- /.navigation start-->
                </div>