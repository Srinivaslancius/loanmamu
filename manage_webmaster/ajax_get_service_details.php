<?php
include_once('admin_includes/config.php');
include_once('admin_includes/common_functions.php');
$service_id = $_POST['service_id'];
$sql = "SELECT * FROM services WHERE id = '$service_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$title1 = $row['title1'];
$title2 = $row['title2'];
$title3 = $row['title3'];
$title4 = $row['title4'];
$title5 = $row['title5'];
if($result->num_rows != 0) {
	echo $title1.",".$title2.",".$title3.",".$title4.",".$title5;
} else {
	echo "0";
}
?>
