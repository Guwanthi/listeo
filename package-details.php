<!DOCTYPE html>

<head>
<?php include './model/function.php';?>

    <base href="<?php echo ___page_setup__();?>" />
    <meta name="description" content="<?php meta_description($con,2); ?>">
    <meta name="keywords" content="<?php meta_keywords($con); ?>">
<!-- Basic Page Needs
================================================== -->
<title>Package Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/main-color.css" id="colors">
<script type="text/javascript" src="js/js.js"></script>
</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php include 'inc/header.php'; ?>
<div class="clearfix"></div>
<!-- Header Container / End -->

<?php 

        $id=0;
        if(isset($_GET['id'])){
             $id=my_decrypt($_GET['id']);

        }

        

        $package_title=""; $days=""; $package_description=""; $included=""; $excluded=""; $package_type_idpackage_type=0;
        $special_offers=""; $tour_banner_url=""; $ptid=0;
        $result = mysqli_query($con, "SELECT * FROM packages WHERE idpackages='$id'  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $idpackages=$row['idpackages'];
                                $package_title=$row['package_title'];
                                $ptid=$row['package_type_idpackage_type'];
                                $days =$row['days'];
                                $included =$row['included'];
                                $excluded =$row['excluded'];
                                $tour_banner_url =$row['banner_url'];
                                $special_offers =$row['special_offers'];
                                $package_type_idpackage_type   =$row['package_type_idpackage_type'];
                                $package_description=$row['package_description'];
         }

         $ptype="";
        $result = mysqli_query($con, "SELECT * FROM package_type WHERE idpackage_type ='$ptid'  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $ptype=$row['ptype'];
        }

        ?>

               <?php 
        $banner_title=""; $banner_url=""; 
        $result = mysqli_query($con, "SELECT * FROM page_banner WHERE banner_type_idbanner_type ='2'  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $banner_title=$row['banner_title'];
                                $banner_url=$row['banner_url'];
        }
        ?>

<!-- Slider
================================================== -->
<div class="listing-slider mfp-gallery-container margin-bottom-0">
	<?php      
                $result = mysqli_query($con, "SELECT * FROM package_slider WHERE packages_idpackages='$id'");
                    while ($row = mysqli_fetch_array($result)) {
                      $pslider_url=$row['pslider_url'];
                      $ps_img_alt=$row['ps_img_alt'];
                                       
                                         
                ?>
	<a href="admin/<?php echo $pslider_url;?>" data-background-image="admin/<?php echo $pslider_url;?>" class="item mfp-gallery" title="Title 1"></a>
	<?php } ?>
	
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row sticky-wrapper">
		<div class="col-lg-8 col-md-8 padding-right-30">

			<!-- Titlebar -->
			<div id="titlebar" class="listing-titlebar">
				<div class="listing-titlebar-title">
					<h2><?php echo $package_title; ?></h2>
					<span>
						<a href="#listing-location" class="listing-address">
							<?php echo $days ?>
						</a>
					</span>
					
				</div>
			</div>

			<!-- Listing Nav -->
			<div id="listing-nav" class="listing-nav-container">
				<ul class="listing-nav">
					<li><a href="#listing-overview" class="active">Description</a></li>
					<li><a href="#listing-pricing-list">Included</a></li>
					<li><a href="#listing-location">Excluded</a></li>
					<li><a href="#listing-reviews">Tour Itinerary</a></li>
					
				</ul>
			</div>
			
			<!-- Overview -->
			<div id="listing-overview" class="listing-section">

				<!-- Description -->

				<p>
					<?php echo $package_description ?>
				</p>
				
			</div>


			<!-- Food Menu -->
			<div id="listing-pricing-list" class="listing-section">
				<h3 class="listing-desc-headline">Included</h3>
				<ul class=" checkboxes ">
					<li><?php echo  $included ?></li>					
				</ul>
			</div>
			<!-- Food Menu / End -->

		
			<!-- Location -->
			<div id="listing-location" class="listing-section">
				<h3 class="listing-desc-headline">Excluded</h3>
				<ul class=" checkboxes ">
					<li><?php echo  $excluded ?></li>					
				</ul>
			</div>
				
			<!-- Reviews -->
			<div id="listing-reviews" class="listing-section">
				<h3 class="listing-desc-headline margin-top-75 margin-bottom-20">Tour Itinerary</h3>

				
				<div class="clearfix"></div>

				

				<div class="col-lg-12 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					
					<ul>
						<?php 
                                            
          $result = mysqli_query($con, "SELECT * FROM itinerary WHERE  packages_idpackages='$id'  ");
              while ($row = mysqli_fetch_array($result)) {
                $place=$row['place'];
                $day=$row['day'];
                $itinerary_description =$row['itinerary_description'];
                $itinerary_url =$row['itinerary_url'];
                $img_alt =$row['img_alt'];
                                                         
                                          
          ?>

						<li>
							<div class="list-box-listing">
								<div>
									<img src="admin/<?php echo $itinerary_url;?>" alt="<?php echo $img_alt;?>" style="width:150px; height: 100px;"></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3><?php echo $day;?></h3>
										<p><?php echo $itinerary_description; ?></p>
										
									</div>
								</div>
							</div>
							
						</li>

<?php } ?>
					</ul>
				</div>
			</div>
			</div>



		</div>


		<!-- Sidebar
		================================================== -->
		<div class="col-lg-4 col-md-4 margin-top-75 sticky">


			<!-- Book Now -->
			<div id="booking-widget-anchor" class="boxed-widget booking-widget margin-top-0">
				<h3><i class="fa fa-calendar-check-o "></i> Booking</h3>
				<div class="row with-forms  margin-top-0">

					<!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
					<div class="col-lg-12">
						<input type="text" id="name" placeholder="Full Name">
					</div>

					<div class="col-lg-12">
						<input type="email" id="email" placeholder="Email">
					</div>

					<div class="col-lg-12">
						<input type="text" id="country" placeholder="Country">
					</div>

					<div class="col-lg-12">						
						<textarea id="message1" placeholder="Message"></textarea>
						<input type="hidden" value="<?php echo $package_title;?>" id="mtype">
					</div>


				</div>
				
				<!-- Book Now -->
				<button class="button book-now fullwidth margin-top-5" id="send_btn" onclick="tour_mail(); return false;">Book Now</button>

				<div class="col-md-12">

                 <div class="alert alert-success" id="success" style="background: green;padding: 20px;color: white;display: none;">
                    <strong>Success!</strong> Your request has sent Thank you.
                </div>

                <div class="alert alert-danger" id="error" style="background: red;padding: 20px;color: white;display: none;width: 100%;">
                    <strong>Sorry !</strong> Please enter all details.
                </div>
                                        </div>

			</div>
			<!-- Book Now / End -->

		</div>
		<!-- Sidebar / End -->

	</div>
</div>


<!-- Footer
================================================== -->
<?php include 'inc/footer.php'; ?>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

<!-- Booking Sticky Footer -->
<div class="booking-sticky-footer">
	<div class="container">
		<div class="bsf-left">
			<h4>Starting from $29</h4>
			<div class="star-rating" data-rating="5">
				<div class="rating-counter"></div>
			</div>
		</div>
		<div class="bsf-right">
			<a href="#booking-widget-anchor" class="button">Book Now</a>
		</div>
	</div>
</div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="scripts/jquery-migrate-3.3.2.min.js"></script>
<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>

<!-- Maps -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script type="text/javascript" src="scripts/infobox.min.js"></script>
<script type="text/javascript" src="scripts/markerclusterer.js"></script>
<script type="text/javascript" src="scripts/maps.js"></script>	

<!-- Booking Widget - Quantity Buttons -->
<script src="scripts/quantityButtons.js"></script>

<!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
<script src="scripts/moment.min.js"></script>
<script src="scripts/daterangepicker.js"></script>
<script>
// Calendar Init
$(function() {
	$('#date-picker').daterangepicker({
		"opens": "left",
		singleDatePicker: true,

		// Disabling Date Ranges
		isInvalidDate: function(date) {
		// Disabling Date Range
		var disabled_start = moment('09/02/2018', 'MM/DD/YYYY');
		var disabled_end = moment('09/06/2018', 'MM/DD/YYYY');
		return date.isAfter(disabled_start) && date.isBefore(disabled_end);

		// Disabling Single Day
		// if (date.format('MM/DD/YYYY') == '08/08/2018') {
		//     return true; 
		// }
		}
	});
});

// Calendar animation
$('#date-picker').on('showCalendar.daterangepicker', function(ev, picker) {
	$('.daterangepicker').addClass('calendar-animated');
});
$('#date-picker').on('show.daterangepicker', function(ev, picker) {
	$('.daterangepicker').addClass('calendar-visible');
	$('.daterangepicker').removeClass('calendar-hidden');
});
$('#date-picker').on('hide.daterangepicker', function(ev, picker) {
	$('.daterangepicker').removeClass('calendar-visible');
	$('.daterangepicker').addClass('calendar-hidden');
});
</script>


<!-- Replacing dropdown placeholder with selected time slot -->
<script>
$(".time-slot").each(function() {
	var timeSlot = $(this);
	$(this).find('input').on('change',function() {
		var timeSlotVal = timeSlot.find('strong').text();

		$('.panel-dropdown.time-slots-dropdown a').html(timeSlotVal);
		$('.panel-dropdown').removeClass('active');
	});
});
</script>


<!-- Style Switcher
================================================== -->
<script src="scripts/switcher.js"></script>

<div id="style-switcher">
	<h2>Color Switcher <a href="#"><i class="sl sl-icon-settings"></i></a></h2>
	
	<div>
		<ul class="colors" id="color1">
			<li><a href="#" class="main" title="Main"></a></li>
			<li><a href="#" class="blue" title="Blue"></a></li>
			<li><a href="#" class="green" title="Green"></a></li>
			<li><a href="#" class="orange" title="Orange"></a></li>
			<li><a href="#" class="navy" title="Navy"></a></li>
			<li><a href="#" class="yellow" title="Yellow"></a></li>
			<li><a href="#" class="peach" title="Peach"></a></li>
			<li><a href="#" class="beige" title="Beige"></a></li>
			<li><a href="#" class="purple" title="Purple"></a></li>
			<li><a href="#" class="celadon" title="Celadon"></a></li>
			<li><a href="#" class="red" title="Red"></a></li>
			<li><a href="#" class="brown" title="Brown"></a></li>
			<li><a href="#" class="cherry" title="Cherry"></a></li>
			<li><a href="#" class="cyan" title="Cyan"></a></li>
			<li><a href="#" class="gray" title="Gray"></a></li>
			<li><a href="#" class="olive" title="Olive"></a></li>
		</ul>
	</div>
		
</div>
<!-- Style Switcher / End -->


</body>
</html>