<!DOCTYPE html>
<head>
<?php include './model/function.php';?>

    <base href="<?php echo ___page_setup__();?>" />
    <meta name="description" content="<?php meta_description($con,1); ?>">
    <meta name="keywords" content="<?php meta_keywords($con); ?>">
<!-- Basic Page Needs
================================================== -->
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/main-color.css" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php include 'inc/header.php'; ?>
<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Slider
================================================== -->

<!-- Revolution Slider -->
<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">

<!-- 5.0.7 auto mode -->
	<div id="rev_slider_4_1" class="rev_slider home fullwidthabanner" style="display:none;" data-version="5.0.7">
		<ul>

			<!-- Slide  -->
			<?php 
               $count=0;
               $result = mysqli_query($con, "SELECT * FROM slider   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $img_url=$row['url'];
                                $count++;
                  
            ?>

			<li data-index="rs-1" data-transition="fade" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

				<!-- Background -->
				<img src="admin/<?php echo $img_url;?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0">

				<!-- Caption-->
				<div class="tp-caption custom-caption-2 tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
					id="slide-1-layer-2" 
					data-x="['left','left','left','left']"
					data-hoffset="['0','40','40','40']"
					data-y="['middle','middle','middle','middle']" data-voffset="['0']" 
					data-width="['640','640', 640','420','320']"
					data-height="auto"
					data-whitespace="nowrap"
					data-transform_idle="o:1;"	
					data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" 
					data-transform_out="" 
					data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" 
					data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
					data-start="1000" 
					data-responsive_offset="on">

					<!-- Caption Content -->
					<div class="R_title margin-bottom-15"
					id="slide-2-layer-1"
					data-x="['left','center','center','center']"
					data-hoffset="['0','0','40','0']"
					data-y="['middle','middle','middle','middle']"
					data-voffset="['-40','-40','-20','-80']"
					data-fontsize="['42','36', '32','36','22']"
					data-lineheight="['70','60','60','45','35']"
					data-width="['640','640', 640','420','320']"
					data-height="none" data-whitespace="normal"
					data-transform_idle="o:1;"
					data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;"
					data-transform_out="opacity:0;s:300;"
					data-start="600"
					data-splitin="none"
					data-splitout="none"
					data-basealign="slide"
					data-responsive_offset="off"
					data-responsive="off"
					style="z-index: 6; color: #fff; letter-spacing: 0px; font-weight: 600; ">Discover City Gems</div>

					<div class="caption-text">Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures.</div>
					<a href="#" class="button medium">Get Started</a>
				</div>

			</li>
<?php } ?>
			<!-- Slide  -->
			<!-- <li data-index="rs-2" data-transition="fade" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

				<img src="images/slider-bg-02.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="112" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0"> 

				
				<div class="tp-caption centered custom-caption-2 tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
					id="slide-2-layer-2" 
					data-x="['center','center','center','center']" data-hoffset="['0']" 
					data-y="['middle','middle','middle','middle']" data-voffset="['0']" 
					data-width="['640','640', 640','420','320']"
					data-height="auto"
					data-whitespace="nowrap"
					data-transform_idle="o:1;"	
					data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" 
					data-transform_out="" 
					data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" 
					data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
					data-start="1000" 
					data-responsive_offset="on">

					<div class="R_title margin-bottom-15"
					id="slide-2-layer-3"
					data-x="['center','center','center','center']"
					data-hoffset="['0','0','0','0']"
					data-y="['middle','middle','middle','middle']"
					data-voffset="['-40','-40','-20','-80']"
					data-fontsize="['42','36', '32','36','22']"
					data-lineheight="['70','60','60','45','35']"
					data-width="['640','640', 640','420','320']"
					data-height="none" data-whitespace="normal"
					data-transform_idle="o:1;"
					data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;"
					data-transform_out="opacity:0;s:300;"
					data-start="600"
					data-splitin="none"
					data-splitout="none"
					data-basealign="slide"
					data-responsive_offset="off"
					data-responsive="off"
					style="z-index: 6; color: #fff; letter-spacing: 0px; font-weight: 600; ">Streamline Your Business</div>

					<div class="caption-text">Proactively envisioned multimedia based on expertise cross-media growth strategies. Pontificate installed base portals after maintainable products.</div>
					<a href="#" class="button medium">Read More</a>
				</div>

			</li> -->

		</ul>
		<div class="tp-static-layers"></div>

	</div>
</div>
<!-- Revolution Slider / End -->


<!-- Content
================================================== -->
<section class="fullwidth padding-top-75 padding-bottom-70">
<div class="container">

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="headline centered headline-extra-spacing">
				<strong class="headline-with-separator">Why Choose Us</strong>
				<span class="margin-top-25">We make the best for all our customers. These are our services... </span>
			</h3>
		</div>
	</div>

	<div class="row icons-container">
		<!-- Stage -->
		<?php
                  $count=0; 
                  $result = mysqli_query($con, "SELECT * FROM why_choose ");
                    while ($row = mysqli_fetch_array($result)) {
                      $title=$row['title'];
                      $description=$row['description'];
                      $image_url=$row['image_url'];
                
              ?>
		<div class="col-md-4">
			<div class="icon-box-2 with-line" style="height: 450px;">
				<!-- <i class="im im-icon-Map2"></i> -->
				<i><img src="admin/<?php echo $image_url; ?>" alt="why-choose-us" style="width:50px; height: 50px;"></i>
				<h3><?php echo $title; ?></h3>
				<p><?php echo $description; ?></p>
			</div>
		</div>
<?php } ?>
		
	</div>

</div>
</section>
<!-- Fullwidth Section -->
<section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">

	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-45">
					Tour Packages
					<span>Discover top-rated Round Tours</span>
				</h3>
			</div>

			<div class="col-md-12">
				<div class="simple-slick-carousel dots-nav">

					<!-- Listing Item -->
					<?php 
                    $result = mysqli_query($con, "SELECT * FROM packages WHERE package_type_idpackage_type  ='1'");
                            while ($row = mysqli_fetch_array($result)) {
                                $idpackages=$row['idpackages'];
                                $package_title=$row['package_title'];
                                $days =$row['days'];
                                $img_alt =$row['img_alt'];
                                $package_description=$row['package_description'];
                                $package_url=$row['package_url'];
                                $enid=my_encrypt($idpackages);
                                $p_name = str_replace (" ", "-", $package_title);                                

              ?>
					<div class="carousel-item">
						<a href="tour_packages.web" class="listing-item-container compact">
							<div class="listing-item">
								<img src="admin/<?php echo $package_url; ?>" alt="<?php echo $img_alt; ?>">

								<div class="listing-item-content">
									
									<h3><?php echo $package_title ?></h3>
									<span><?php echo $days ?></span>
								</div>
								
							</div>
						</a>
					</div>
					<?php } ?>
					<!-- Listing Item / End -->
				</div>
				
			</div>

		</div>
	</div>

</section>
<!-- Fullwidth Section / End -->

<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered margin-top-75">
				Things To Do
				<span>Enjoy<i> Your </i>Vacation</span>
			</h3>
		</div>

	</div>
</div>


<!-- Categories Carousel -->
<div class="fullwidth-carousel-container margin-top-25">
	<div class="fullwidth-slick-carousel category-carousel">

		<!-- Item -->
		<?php 
               
                  $result = mysqli_query($con, "SELECT * FROM things_to_do   ");
                      while ($row = mysqli_fetch_array($result)) {
                          $title=$row['title'];
                          $description=$row['description'];
                          $img_url=$row['img_url'];
                          $img_alt=$row['img_alt'];                           
                    

            ?>
		<div class="fw-carousel-item">
			<div class="category-box-container">
				<a href="things_to_do.web" class="category-box" data-background-image="admin/<?php echo $img_url; ?>">
					<div class="category-box-content">
						<h3><?php echo $title ?></h3>
						
					</div>
					
				</a>
			</div>
		</div>

		<?php } ?>


	</div>
</div>
<!-- Categories Carousel / End -->

<section class="fullwidth taxonomy-gallery-container margin-top-70 padding-top-75 padding-bottom-70" data-background-color="#f9f9f9">

	<!-- Info Section -->
	<div class="container">
		<div class="row">
			<div class="col-md-6">

				<!-- Infobox -->
				<div class="taxonomy-gallery-text">
					<h2>Plan Your Tour</h2>
					<p style="font-size: 14px;">On this website we have introduced some of the unique tour plans for your holiday in Sri Lanka. Tour plans that meet clients' requirements. But if you want to create your own tour plan, then our "Plan Your Tour" option is the ideal platform for you. You can let us know all the relevant details, which will be helpful for us. Places you want to visit, activities you want to do, your meal plan, and most importantly, your budget for this holiday plan. This valuable information will help us to create and arrange a good tour plan.</p>
					<a href="plan_tour.web" class="button margin-top-25">Plan Tour</a>
				</div>
				<!-- Infobox / End -->

			</div>
		</div>
	</div>
	<!-- Info Section / End -->

	<div class="gallery-wrap">
		<a href="#" class="item">
			<h3>Hikkaduwa Coral Reef</h3>
			<img src="images/pyt6.jpg" alt="Hikkaduwa Coral Reef">
		</a>

		<a href="#" class="item">
			<h3>Sun rising in Ella</h3>
			<img src="images/pyt22.jpg" alt="Sun rising in Ella">
		</a>

		<a href="#" class="item">
			<h3>Yala National Park</h3>
			<img src="images/pyt4.jpg" alt="Yala National Park">
		</a>

		<a href="#" class="item">
			<h3>Mirissa Beach</h3>
			<img src="images/pyt3.jpg" alt="Mirissa Beach">
		</a>
	</div>


</section>

<section class="fullwidth border-top padding-bottom-80 padding-top-80 margin-top-80">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="boxed-photo-banner">
					<!-- Infobox -->
					<div class="boxed-photo-banner-text">
						<h2>Airport Transfer</h2>
						<p>We are at the international airport 24/7 and provide transport facilities for both arrivals and drop-offs. You can simply book your vehicle from the below mentioned booking form and our team will get in touch with you.</p>
                                <p>Our company's customer handling representative will meet you at the airport arrival lobby and assist you to your transport vehicle. He will guide you to the relevant destination safely.</p>
                                <p>Well experienced tourist chauffeurs, luxury private vehicles, and fully insured passenger cover with safe and secure guidelines will apply to all our vehicles.</p>
						<a href="airport_transfer.web" class="button margin-top-25">Book Now</a>
					</div>
					<!-- Infobox / End -->
					<img src="images/atp3.jpg" alt="airport transfer">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="fullwidth border-top margin-top-40 margin-bottom-0 padding-top-60 padding-bottom-65" data-background-color="#f9f9f9">
	<!-- Logo Carousel -->
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-40 margin-top-10">Happy Clients <span>Your satisfaction is our asset ...</span></h3>
			</div>
			
			<!-- Carousel -->
			<div class="col-md-12">
				<div class="logo-slick-carousel dot-navigation">
					<?php 
                $result = mysqli_query($con, "SELECT * FROM clients  ");
                    while ($row = mysqli_fetch_array($result)) {
                        $client_url=$row['client_url'];
                        $img_alt=$row['img_alt'];

              ?>
					<div class="item">
						<img src="admin/<?php echo $client_url; ?>" alt="admin/<?php echo $img_alt; ?>">
					</div>
					<?php } ?>
					
				</div>
			</div>
			<!-- Carousel / End -->

		</div>
	</div>
	<!-- Logo Carousel / End -->
</section>

<section class="fullwidth padding-top-75 padding-bottom-30" data-background-color="#fff">
	<!-- Info Section -->
	<div class="container">

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h3 class="headline centered headline-extra-spacing">
					<strong class="headline-with-separator">What Our Clients Say</strong>
					<span class="margin-top-25">We collect reviews from our clients so you can get an honest opinion of what an experience with our services are really like!</span>
				</h3>
			</div>
		</div>

	</div>
	<!-- Info Section / End -->

	<!-- Categories Carousel -->
	<div class="fullwidth-carousel-container margin-top-20 no-dots">
		<div class="testimonial-carousel testimonials">

			<!-- Item -->
			<?php
                  $count=0; 
                  $result = mysqli_query($con, "SELECT * FROM testimonial WHERE is_display='1'   ");
                    while ($row = mysqli_fetch_array($result)) {
                      $name=$row['name'];
                      $country=$row['country'];
                      $review=$row['review'];
                      $image_url   = $row['customer_url'];

              ?>
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial"><?php echo $review; ?></div>
				</div>
				<div class="testimonial-author">
					<img src="admin/<?php echo $image_url; ?>" alt="happy client">
					<h4><?php echo $name; ?> <span><?php echo $country; ?></span></h4>
				</div>
			</div>
			<?php } ?>
			
		</div>
	</div>
	<!-- Categories Carousel / End -->

</section>

<!-- Footer
================================================== -->
<?php include 'inc/footer.php'; ?>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


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




<!-- REVOLUTION SLIDER SCRIPT -->
<script type="text/javascript" src="scripts/themepunch.tools.min.js"></script>
<script type="text/javascript" src="scripts/themepunch.revolution.min.js"></script>

<script type="text/javascript">
	var tpj=jQuery;			
	var revapi4;
	tpj(document).ready(function() {
		if(tpj("#rev_slider_4_1").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_4_1");
		}else{
			revapi4 = tpj("#rev_slider_4_1").show().revolution({
				sliderType:"standard",
				jsFileLocation:"scripts/",
				sliderLayout:"auto",
				dottedOverlay:"none",
				delay:9000,
				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					onHoverStop:"on",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					}
					,
					arrows: {
						style:"zeus",
						enable:true,
						hide_onmobile:true,
						hide_under:600,
						hide_onleave:true,
						hide_delay:200,
						hide_delay_mobile:1200,
						tmp:'<div class="tp-title-wrap"></div>',
						left: {
							h_align:"left",
							v_align:"center",
							h_offset:40,
							v_offset:0
						},
						right: {
							h_align:"right",
							v_align:"center",
							h_offset:40,
							v_offset:0
						}
					}
					,
					bullets: {
				enable:false,
				hide_onmobile:true,
				hide_under:600,
				style:"hermes",
				hide_onleave:true,
				hide_delay:200,
				hide_delay_mobile:1200,
				direction:"horizontal",
				h_align:"center",
				v_align:"bottom",
				h_offset:0,
				v_offset:32,
				space:5,
				tmp:''
					}
				},
				viewPort: {
					enable:true,
					outof:"pause",
					visible_area:"80%"
			},
			responsiveLevels:[1200,992,768,480],
			visibilityLevels:[1200,992,768,480],
			gridwidth:[1180,1024,778,480],
			gridheight:[640,500,400,300],
			lazyType:"none",
			parallax: {
				type:"mouse",
				origo:"slidercenter",
				speed:2000,
				levels:[2,3,4,5,6,7,12,16,10,25,47,48,49,50,51,55],
				type:"mouse",
			},
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
		}
	});	/*ready*/
</script>	


<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
	(Load Extensions only on Local File Systems ! 
	The following part can be removed on Server for On Demand Loading) -->	
<script type="text/javascript" src="scripts/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="scripts/extensions/revolution.extension.video.min.js"></script>




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