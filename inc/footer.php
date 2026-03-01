<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="footer" class="dark">
    <!-- Main -->
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <img class="footer-logo" src="images/logo2.png" alt="">
                <br><br>
               
                    <?php if($facebook!=""){?>
    <a href="<?php echo $facebook;?>" class="padding-right-5"><i class="fa fa-facebook"></i></a>
<?php }?>
<?php if($twitter!=""){?>
    <a href="<?php echo $twitter;?>" class="padding-right-5"><i class="fa fa-twitter"></i></a>
<?php }?>
<?php if($instagram!=""){?>
    <a href="<?php echo $instagram;?>" class="padding-right-5"><i class="fa fa-instagram"></i></a>
<?php }?>

<?php if($youtube!=""){?>
    <a href="<?php echo $youtube;?>" class="padding-right-5"><i class="fa fa-youtube"></i></a>
<?php }?>
<?php if($tripadvisor!=""){?>
    <a href="<?php echo $tripadvisor;?>" class="padding-right-5"><i class="fa fa-tripadvisor"></i></a>
<?php }?>

            </div>

            <div class="col-md-3 col-sm-3 ">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="home.web">Home</a></li>
                    <li><a href="about_us.web">About Us</a></li>
                    <li><a href="tour_packages.web">Tours</a></li>
                    <li><a href="things_to_do.web">Things To Do</a></li>
                    <li><a href="plan_tour.web">Plan Your Tour</a></li>
                    <li><a href="airport_transfer.web">Airport Transfer</a></li>
                    <li><a href="contact.web">Contact Us</a></li>
                </ul>

                <div class="clearfix"></div>
            </div>      

            <div class="col-md-4  col-sm-4">
                <h4>Tour Packages</h4>
                <ul class="footer-links">
                    <li><a href="tour_packages.web">All Packages</a></li>
                                    <?php 
                    $result = mysqli_query($con, "SELECT * FROM packages WHERE package_type_idpackage_type  ='1' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idpackages=$row['idpackages'];
                                $package_title=$row['package_title'];
                                $days =$row['days'];
                                $img_alt =$row['img_alt'];
                                $package_description=$row['package_description'];
                                $package_url=$row['package_url'];
                                $enid=my_encrypt($idpackages);
                                $p_name = str_replace (" ", "-", $package_title);
                        echo ' <li ><a href="package_details.web/'.$p_name.'/'.$enid.'">'.$package_title.'</a></li>';                 
                }                  
              ?>
                </ul>

            </div>

            <div class="col-md-3 col-sm-3 ">
                <h4>Contact Us</h4>
                <div class="text-widget">
                    Address:<br>
                    <span><?php echo $address; ?></span> <br>
                    Phone:<br> <span><a href="tel:+<?php echo $contact1;?>">+<?php echo $contact1;?></a></span><br>

                    <?php if($contact2!=""){?>
        <span><a href="tel:+<?php echo $contact2;?>"> +<?php echo $contact2;?></a></span><br>
    <?php }?>
    <?php if($contact3!=""){?> 
        <span><a href="tel:+<?php echo $contact3;?>"> +<?php echo $contact3;?></a></span><br>
    <?php }?>




                    E-Mail:<br> <span><a href="mailto:<?php echo $email1;?>"><?php echo $email1;?></a></span><br>
                    <?php if($email2!=""){?>
    <span><a href="mailto:<?php echo $email2;?>"><?php echo $email2;?></a></span>
<?php }?>
                </div>

                <div class="clearfix"></div>
            </div>

        </div>
        
        <!-- Copyright -->
        <div class="row">
            <div class="col-md-12">
                <div class="copyrights">© 2021 Listeo. All Rights Reserved.</div>
            </div>
        </div>

    </div>

</div>