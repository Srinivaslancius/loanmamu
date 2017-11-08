<div class="col-md-4 col-sm-6 col-xs-12">
    <?php $getChooseData6 = getAllDataCheckActive1('content_pages','0',13);
$getChoose6 = $getChooseData6->fetch_assoc(); ?>
<?php $getChooseData7 = getAllDataCheckActive1('content_pages','0',14);
$getChoose7 = $getChooseData7->fetch_assoc(); ?>
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">
                        <div class="mb40"><i class="icon-calendar-3 icon-2x icon-default"></i></div>
                        <h2 class="capital-title"><?php echo $getChoose6['title'];?></h2>
                        <p><?php echo $getChoose6['description'];?></p>
                        <a href="contact_us.php" class="btn-link">Get Appointment</a> </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">
                        <div class="mb40"><i class="icon-phone-call icon-2x icon-default"></i></div>
                        <h2 class="capital-title">Call us at </h2>
                        <h1 class="text-big"><a href="Tel:<?php echo $getSiteSettingsData['mobile']; ?>"><?php echo $getSiteSettingsData['mobile'] ?></a> </h1>
                        <p><a href="mailto:<?php echo $getSiteSettingsData['email'];?>"><?php echo $getSiteSettingsData['email'];?></a></p>
                        <a href="contact_us.php" class="btn-link">Contact us</a> </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">
                        <div class="mb40"> <i class="icon-users icon-2x icon-default"></i></div>
                        <h2 class="capital-title"><?php echo $getChoose7['title'];?></h2>
                        <p><?php echo $getChoose7['description'];?></p>
                        <a href="contact_us.php" class="btn-link">Meet The Advisor</a> </div>
                </div>