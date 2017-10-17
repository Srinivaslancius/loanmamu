<?php
ob_start();
include "manage_webmaster/admin_includes/config.php";
include "manage_webmaster/admin_includes/common_functions.php"; 
$getData = getDataFromTables('site_settings',$status=NULL,'id',1,$activeStatus=NULL,$activeTop=NULL);
$getSiteSettingsData  = $getData->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title><?php echo $getSiteSettingsData['admin_title']; ?></title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/fontello.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="css/animsition.min.css"> -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Merriweather:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- owl Carousel Css -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- <style>
		#preloader { 
			position: fixed; 
			left: 0; 
			top: 0; 
			z-index: 999; 
			width: 100%; 
			height: 100%; 
			overflow: visible; 
			background: #333 url('images/loading.gif') no-repeat center center; 
		}
	</style> -->
</head>
<?php
    $currentFile = $_SERVER["PHP_SELF"];
    $parts = Explode('/', $currentFile);
    $page_name = $parts[count($parts) - 1];
?>
<body class="animsition">
      <div id="preloader"></div>
    <div class="top-bar">
        <!-- top-bar -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 hidden-xs hidden-sm">
                    <p class="mail-text">Welcome to our Loan Mamu</p>
                </div>
                <div class="col-md-8 col-sm-12 text-right col-xs-12">
                    <div class="top-nav"><span class="top-text"><a href="Tel:<?php echo $getSiteSettingsData['mobile']; ?>"><?php echo $getSiteSettingsData['mobile'] ?></a></span> <span class="top-text"><a href="emi_calculator.php">EMI calculator</a></span> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.top-bar -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12 col-xs-6">
                    <!-- logo -->
                    <div class="logo">
                        <a href="index.php"><img src="uploads/logo/<?php echo $getSiteSettingsData['logo']; ?>" alt="Loan Mamu"></a>
                    </div>
                </div>
                <!-- logo -->
                <?php include_once "menu.php"; ?>                
            </div>
        </div>
    </div>