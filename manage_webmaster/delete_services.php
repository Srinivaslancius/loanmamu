<?php include_once 'admin_includes/main_header.php'; ?>
<?php
 $getBannersData = getDataFromTables('services',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);  
$id = $_GET['bid'];
$qry = "DELETE FROM services WHERE id ='$id'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "<script>alert('Services Deleted Successfully');window.location.href='services.php';</script>";
} else {
   echo "<script>alert('Services Not Deleted');window.location.href='services.php';</script>";
}
?>