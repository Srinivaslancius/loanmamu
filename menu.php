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

                            <?php $getCategory = "SELECT * FROM categories WHERE status = 0 ORDER BY id ASC"; 
                                  $getCategory = $conn->query($getCategory); ?>
                                    <?php while($getCat = $getCategory->fetch_assoc()) { $cid= $getCat['id']; ?>

                            <li><a href="#" ><?php echo $getCat['category_name']; ?></a>                                
                                <?php $getServices = "SELECT * FROM services WHERE status = 0 AND category_id = '$cid' ORDER BY id DESC";  $getServices = $conn->query($getServices);  ?>
                                <ul class="sub-menu">
                                        
                                    <?php while($getServices1 = $getServices->fetch_assoc()) {  ?>
                                    <li class="active">
                                        <a href="loan_details.php?lid=<?php echo $getServices1['id']; ?>"><?php echo $getServices1['name']; ?></a>
                                    </li>
                                    <?php } ?>                                              
                               
                                </ul>
                            </li> 

                            <?php } ?>
                                                                             
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