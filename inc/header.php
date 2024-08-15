<?php include './model/DB.php';?>
  <?php 
  date_default_timezone_set('Asia/Colombo');
  $date=date("Y");
  $date2=date("Y-m-d");



        $contact1=""; $contact2=""; $address="";  $email1=""; $email2=""; $contact3="";
        $result = mysqli_query($con, "SELECT * FROM conntact_details   ");
         while ($row = mysqli_fetch_array($result)) {
            $contact1=$row['contact1'];
            $contact2=$row['contact2'];
            $contact3=$row['contact3'];
            $address=$row['address'];
            $email1=$row['email1'];
            $email2=$row['email2'];
        }
         $logo_url="";
         $result = mysqli_query($con, "SELECT * FROM logo   ");
         while ($row = mysqli_fetch_array($result)) {
            $logo_url=$row['logo_url'];
        }

        $facebook=""; $twitter=""; $instagram=""; $youtube=""; $tripadvisor="";
         $result = mysqli_query($con, "SELECT * FROM social_media   ");
         while ($row = mysqli_fetch_array($result)) {
            $facebook=$row['facebook'];
            $twitter=$row['twitter'];
            $instagram=$row['instagram'];
            $youtube=$row['youtube'];
            $tripadvisor=$row['tripadvisor'];
        }

   ?>

    <?php
  $p= ___page_url__(); 

  $pg1=""; $pg2=""; $pg3=""; $pg4=""; $pg5=""; $pg6=""; $pg7="";  
  
  if($p==1){
     $pg1='current';
  }else if($p==2){
     $pg2='current';
  }else if($p==3){
     $pg3='current';
  }else if($p==4){
     $pg4='current';
  }else if($p==5){
     $pg5='current';
  }else if($p==6){
     $pg6='current';
  }else if($p==7){
     $pg7='current';
  }
  ?>

<header id="header-container">

   <!-- Header -->
   <div id="header">
      <div class="container">
         
         <!-- Left Side Content -->
         <div class="left-side" style="width: 100%;">
            
            <!-- Logo -->
            <div id="logo">
               <a href="index.html"><img src="images/logo.png" alt=""></a>
            </div>

            <!-- Mobile Navigation -->
            <div class="mmenu-trigger">
               <button class="hamburger hamburger--collapse" type="button">
                  <span class="hamburger-box">
                     <span class="hamburger-inner"></span>
                  </span>
               </button>
            </div>

            <!-- Main Navigation -->
            <nav id="navigation" class="style-1">
               <ul id="responsive">

                  <li><a class="<?php echo $pg1; ?>" href="home.web">Home</a>
                  </li>
                  <li><a class="<?php echo $pg2; ?>" href="about_us.web">About Us</a>
                  </li>
                  <li><a class="<?php echo $pg3; ?>" href="tour_packages.web">Tours</a>
                  </li>
                  <li><a class="<?php echo $pg4; ?>" href="things_to_do.web">Things To Do</a>
                  </li>
                  <li><a class="<?php echo $pg5; ?>" href="plan_tour.web">Plan Your Tour</a>
                  </li>
                  <li><a class="<?php echo $pg6; ?>" href="airport_transfer.web">Airport Transfer</a>
                  </li>
                  <li><a class="<?php echo $pg7; ?>" href="contact.web">Contact Us</a>
                  </li>
                  
               </ul>
            </nav>
            <div class="clearfix"></div>
            <!-- Main Navigation / End -->
            
         </div>
         <!-- Left Side Content / End -->

      </div>
   </div>
   <!-- Header / End -->

</header>