<!DOCTYPE html>

<head>

	<?php include './model/function.php';?>

    <base href="<?php echo ___page_setup__();?>" />
    <meta name="description" content="<?php meta_description($con,4); ?>">
    <meta name="keywords" content="<?php meta_keywords($con); ?>">

<!-- Basic Page Needs
================================================== -->
<title>Plan Your Tour</title>
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


<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
<?php 
        $banner_title=""; $banner_url=""; 
        $result = mysqli_query($con, "SELECT * FROM page_banner WHERE banner_type_idbanner_type ='4'  ");
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

<!-- Container -->
<div class="container">
	<div class="row">

		<!-- Content
		================================================== -->
		<div class="col-lg-8 col-md-8 padding-right-30">

			<h3 class="margin-top-0 margin-bottom-30">SEND YOUR TOUR PLAN</h3>

			<div class="row">

				<div class="col-md-6">
					<label><b style="color: red;">*</b> Full Name</label>
					<input type="text" id="name">
				</div>

				<div class="col-md-6">
					<label><b style="color: red;">*</b> Country</label>
					<input type="text" id="country">
				</div>

				<div class="col-md-6">
					<div class="input-with-icon medium-icons">
						<label><b style="color: red;">*</b> E-Mail Address</label>
						<input type="email" id="email">
						<i class="im im-icon-Mail"></i>
					</div>
				</div>

				<div class="col-md-6">
					<div class="input-with-icon medium-icons">
						<label><b style="color: red;">*</b> Phone</label>
						<input type="text" id="contact">
						<i class="im im-icon-Phone-2"></i>
					</div>
				</div>

				<div class="col-md-4">
					<label><b style="color: red;">*</b> Number of Days</label>
					<input type="text" id="days">
				</div>

				<div class="col-md-4">
					<label><b style="color: red;">*</b> Arrival Date</label>
					<input type="date" id="arrival_date">
				</div>

				<div class="col-md-4">
					<label><b style="color: red;">*</b> Departure Date</label>
					<input type="date" id="departure_date">
				</div>

				<div class="col-md-4">
					<label><b style="color: red;">*</b> Number of Adults</label>
					<input type="text" id="adults">
				</div>

				<div class="col-md-4">
					<label>Number of Child</label>
					<input type="text" id="child">
				</div>

				<div class="col-md-4">
					<label>Number of Infant</label>
					<input type="text" id="infant">
				</div>

				<div class="col-md-12">
					<label><b style="color: red;">*</b> Message</label>
					<textarea id="message1"></textarea>
				</div>

			</div>

		
			<a href="#" class="button booking-confirmation-btn margin-top-40 margin-bottom-65" id="send_btn"  onclick=" send_handcrafted();return false;">Send Now</a>

			<div class="col-lg-12">

                 <div class="alert alert-success" id="success" style="background: green;padding: 20px;color: white;display: none;">
                    <strong>Success!</strong> Your request has sent Thank you.
                </div>

                <div class="alert alert-danger" id="error" style="background: red;padding: 20px;color: white;display: none;width: 100%;">
                    <strong>Sorry !</strong> Please enter all required details.
                </div>
                        </div>
		</div>


		<!-- Sidebar
		================================================== -->
		<div class="col-lg-4 col-md-4 margin-top-0 margin-bottom-60">

			<!-- Booking Summary -->
			<div class="listing-item-container compact order-summary-widget">
				<div class="listing-item">
					<img src="images/af3.jpg" alt="airport_transfer">

					<div class="listing-item-content">
						<h3>We are at the international airport 24/7 and provide transport facilities for both arrivals and drop-offs.</h3>
						<a href="airport_transfer.web" class="button margin-top-10">Book Now</a>
					</div>
				</div>
			</div>
			<div >
				<!-- Widget -->
			<div class="widget margin-top-40">
				<h3>Got any questions?</h3>
				<div class="info-box margin-bottom-10">
					<p>Having any questions? Feel free to ask!</p>
					<a href="contact.web" class="button fullwidth margin-top-20"><i class="fa fa-envelope-o"></i> Drop Us a Line</a>
				</div>
			</div>
			<!-- Widget / End -->

			</div>
			<!-- Booking Summary / End -->

		</div>

	</div>
</div>
<!-- Container / End -->



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