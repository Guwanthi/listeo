<!DOCTYPE html>
<head>
<?php include './model/function.php';?>

    <base href="<?php echo ___page_setup__();?>" />
    <meta name="description" content="<?php meta_description($con,1); ?>">
    <meta name="keywords" content="<?php meta_keywords($con); ?>">
<!-- Basic Page Needs
================================================== -->
<title>About Us</title>
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


<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
<?php 
        $banner_title=""; $banner_url=""; 
        $result = mysqli_query($con, "SELECT * FROM page_banner WHERE banner_type_idbanner_type ='1'  ");
                            while ($row = mysqli_fetch_array($result)) {
                                $banner_title=$row['banner_title'];
                                $banner_url=$row['banner_url'];
        }
        ?>
				<h2><?php echo $banner_title; ?></h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="home.web">Home</a></li>
						<li><?php echo $banner_title; ?></li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<?php 
         $about_title=""; $about_description=""; $about_img="";
         $result = mysqli_query($con, "SELECT * FROM about ");
         while ($row = mysqli_fetch_array($result)) {
            $about_title=$row['about_title'];
            $about_description=$row['about_description'];
            $about_img =$row['about_img'];
            $img1_alt =$row['img1_alt'];
         }

    ?>
<div class="container margin-top-80 margin-bottom-80">
	<div class="row">
		<div class="col-md-12">
			<h3 class="headline margin-top-0 margin-bottom-40">
				<strong class="headline-with-separator"><?php echo $about_title;?></strong>
			</h3>
			
		</div>
		<div class="col-md-6">
			<a href="#" class="icon-box-v3">
				
				<div class="ibv3-content">
					
					<p><?php echo $about_description;?></p>
				</div>
			</a>
			
		</div>
		<div class="col-md-6">
			<div class="svg-alignment">
				<img src="admin/<?php echo $about_img;?>" style="width: 80%;" alt="<?php echo $img1_alt;?>">
			</div>
		</div>
	</div>
</div>

<!-- Info Section -->
<section class="fullwidth padding-top-75 padding-bottom-70" data-background-color="#f9f9f9">
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
<!-- Info Section / End -->

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

<!-- Google Autocomplete -->
<script>
  function initAutocomplete() {
    var input = document.getElementById('autocomplete-input');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
      var place = autocomplete.getPlace();
      if (!place.geometry) {
        return;
      }
    });

	if ($('.main-search-input-item')[0]) {
	    setTimeout(function(){ 
	        $(".pac-container").prependTo("#autocomplete-container");
	    }, 300);
	}
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;callback=initAutocomplete"></script>

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