<!DOCTYPE html>
<head>
<?php include './model/function.php';?>

    <base href="<?php echo ___page_setup__();?>" />
    <meta name="description" content="<?php meta_description($con,2); ?>">
    <meta name="keywords" content="<?php meta_keywords($con); ?>">
<!-- Basic Page Needs
================================================== -->
<title>Tour Packages</title>
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
        $result = mysqli_query($con, "SELECT * FROM page_banner WHERE banner_type_idbanner_type ='2'  ");
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
<div class="container">
	<div class="row">
		<div class="col-md-12">



			<div class="row">

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
				<div class="col-lg-4 col-md-6">
					<a href="package_details.web/<?php echo $p_name; ?>/<?php echo $enid; ?>" class="listing-item-container compact">
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