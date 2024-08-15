<!DOCTYPE html>

<head>
  <?php include './model/function.php';?>

    <base href="<?php echo ___page_setup__();?>" />
    <meta name="description" content="<?php meta_description($con,8); ?>">
    <meta name="keywords" content="<?php meta_keywords($con); ?>">
<!-- Basic Page Needs
================================================== -->
<title>Contact Us</title>
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
	<!-- Header -->
	<?php include 'inc/header.php'; ?>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Content
================================================== -->

<!-- Map Container -->
<div class="contact-map margin-bottom-60">

	<!-- Google Maps -->
	<div id="singleListingMap-container">
		<div id="singleListingMap" data-latitude="40.70437865245596" data-longitude="-73.98674011230469" data-map-icon="im im-icon-Map2"></div>
		<a href="#" id="streetView">Street View</a>
	</div>
	<!-- Google Maps / End -->

	<!-- Office -->
	<div class="address-box-container">
		<div class="address-container" data-background-image="images/our-office.jpg">
			<div class="office-address">
				<h3>Our Office</h3>
				<ul>
					<li><?php echo $address; ?></li>
					<li>Phone +<?php echo $contact1;?></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Office / End -->

</div>
<div class="clearfix"></div>
<!-- Map Container / End -->


<!-- Container / Start -->
<div class="container">

	<div class="row">

		<!-- Contact Details -->
		<div class="col-md-4">

			<h4 class="headline margin-bottom-30">Find Us There</h4>

			<!-- Contact Details -->
			<div class="sidebar-textbox">
				<p>Collaboratively administrate channels whereas virtual. Objectively seize scalable metrics whereas proactive e-services.</p>

				<ul class="contact-details">
					<li><i class="im im-icon-Phone-2"></i> <strong>Phone:</strong> <span><a href="tel:+<?php echo $contact1;?>">+<?php echo $contact1;?></a></span></li>


					<?php if($contact2!=""){?><li> <span><a href="tel:+<?php echo $contact2;?>">+<?php echo $contact2;?></a></span></li>
                                                        <?php }?>
                                                        <?php if($contact3!=""){?> 
                                                            <li><span><a href="tel:+<?php echo $contact3;?>">+<?php echo $contact3;?></a></span></li>
                                                        <?php }?>




					<li><i class="im im-icon-Map-Marker"></i> <strong>Location:</strong> <span><?php echo $address; ?> </span></li>
					<li><i class="im im-icon-Envelope"></i> <strong>E-Mail:</strong> <span><a href="mailto:<?php echo $email1;?>"><?php echo $email1;?></a></span></li>
					<?php if($email2!=""){?>
        
        <li><span><a href="mailto:<?php echo $email2;?>"><?php echo $email2;?></a></span></li>
                                                            
<?php }?>
					
				</ul>
			</div>

		</div>

		<!-- Contact Form -->
		<div class="col-md-8">

			<section id="contact">
				<h4 class="headline margin-bottom-35">Contact Form</h4>

				<div id="contact-message"></div> 

					<form autocomplete="on">

					<div class="row">
						<div class="col-md-6">
							<div>
								<input name="name" type="text" id="name" placeholder="Your Name *" required="required" />
							</div>
						</div>

						<div class="col-md-6">
							<div>
								<input name="email" type="email" id="email" placeholder="Email Address *" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
							</div>
						</div>
					</div>

					<div>
						<input name="subject" type="text" id="subject" placeholder="Subject" />
					</div>
					
					<div>
						<textarea cols="40" rows="3" id="comments" placeholder="Message *" required="required"></textarea>
					</div>

					<input type="submit" class="submit button" value="Submit Message" id="send_btn" onclick="contact_mail(); return false;"/>

					<div class="col-lg-12">

                 <div class="alert alert-success" id="success" style="background: green;padding: 20px;color: white;display: none;">
                    <strong>Success!</strong> Your request has sent Thank you.
                </div>

                <div class="alert alert-danger" id="error" style="background: red;padding: 20px;color: white;display: none;width: 100%;">
                    <strong>Sorry !</strong> Please enter all required details.
                </div>
                        </div>

					</form>
			</section>
		</div>
		<!-- Contact Form / End -->

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

<!-- Maps -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script type="text/javascript" src="scripts/infobox.min.js"></script>
<script type="text/javascript" src="scripts/markerclusterer.js"></script>
<script type="text/javascript" src="scripts/maps.js"></script>


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