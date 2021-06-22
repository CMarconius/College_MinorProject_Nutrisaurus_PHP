<?php
/**********************************************************
* Author: Mark Thomas
* Assignment: WE4.0 PHP HTML site Build and associated Backend Code, Digital Skills Academy
* Student ID: D15126861 
* Date : 2016/04/26
* Ref:  	The following are the main websites that I used to find information :
			https://www.udemy.com/	http://stackoverflow.com/	http://www.w3schools.com/	http://php.net/
***********************************************************/


	include "sqlScript.class.php";
	/* Object connected to the database */
	$Database = new sqlScript();
	
	/* Check if the submit button for the newsletter subscription has been pressed with a valid email in the textbox */
	if (isset($_POST["subscriptionEmail"])) {
		$Database->addNewSubscriber($_POST["subscriptionEmail"]);
		unset($_POST['subscriptionEmail']);
	}
	
	/* Check if the submit button for the contact form has been pressed with valid data in each texbox */
	if (isset($_POST["contactName"])) {
		$Database->addNewMessage($_POST["contactName"], $_POST["contactEmail"], $_POST["contactMessage"]);
		unset($_POST['contactName']);
		unset($_POST['contactEmail']);
		unset($_POST['contactMessage']);
	}
?>


<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Nutrisaurus home">
		<meta name="author" content="sTeam12">

		<title>Nutrisaurus About</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">
		
		<script src="jQuery/jquery-1.12.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
		
		<!-- Needed for the social media links in the footer -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<link rel="shortcut icon" type="image/png" href="img/NS-icon.ico"/>
		
	</head>

	<body>
	<!--Navbar containing buttons to give the user access to the Home Page, the About Page, and the contact form-->
		<nav id="mainNav" class="navbar navbar-default navbar-static-top">
			<div class="container nav-background-green">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a type="button" class="btn btn-success btn-lg home-button" href="index.php"><img src="img/NS-logo-small.png"></img></a>
				</div>

			<!-- Collapsable buttons which are replaced by the tripple bar icon -->	
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a class="btn btn-success btn-lg nav-button-right" href="index.php"><p class="nav-button-right">Home</p></a>
						</li>
						<li>
							<a class="btn btn-success btn-lg nav-button-right active" href="about.php"><p class="nav-button-right">About</p></a>
						</li>
						<li>
							<a data-toggle="modal" data-target="#ContactForm" class="btn btn-success btn-lg nav-button-right"><p class="nav-button-right">Contact</p></a>
						</li>
					</ul>
				</div>
			</div>
		</nav> <!-- End of Navbar -->
		
		
<!--====================== Start OF ROW 1 =================================-->

		<div data-role="content">
			<div class="container">
				<div class="row green-background">
					</br></br>
					<div class="header">
						<div class="row text-center">
							<div class="col-md-10 col-md-offset-1">
								<h2>What NutriSaurus can do for you</h2>
								<p>Set a target and achieve your goal. Your daily food diary will allow you to see what meals you have eaten and what is working for you.</p>
							</div>
						</div>
					</div>				
					<!--================================================-->
					<div class="col-md-2 col-md-offset-1">
						<div class="row">
							<div class="col-md-12"><img alt="heart icon" src="img/heart-icon.png"></div>
							<br>
							<div class="col-md-12"><h4>Create Favourites</h4></div>
							<br>
							<div class="col-md-12">
								<p>Find your favourite recipes or add your own.
								Share with your friends or the world easily.
							</div>
							<div class="col-md-12"><img alt="cloud backup icon" src="img/cloud-backup-icon.png"></div>
							<br>
							<div class="col-md-12"><h4>Cloud Backup</h4></div>
							<br>
							<div class="col-md-12">
								<p>Your profile is backed up on the cloud
								so you can access from any device, anywhere.
							</div>
						</div>				
					</div>
					<!--================================================-->
					<div class="col-md-4 col-md-offset-1">
						<div class="col-md-11 col-md-offset-1">
							<img class="glow-green-phone-pic" src="img/phone.png">
						</div>
					</div>
					
							</br>
					<!--================================================-->
					<div class="col-md-2 col-md-offset-1">
						<div class="row">
							<div class="col-md-12"><img alt="update icon" src="img/update-icon.png"></div>
							<br>
							<div class="col-md-12"><h4>Auto Update</h4></div>
							<br>
							<div class="col-md-12">
								<p>Retailer databases are automatically updated on our servers
								so they can always be accessed quickly.
							</div>
							<div class="col-md-12"><img alt="diet tracking icon" src="img/diet-tracking-icon.png"></div>
							<br>
							<div class="col-md-12"><h4>Diet Tracking</h4></div>
							<br>
							<div class="col-md-12">
								<p>Keep a detailed diary of your diet
								to see where you can improve.
							</div>
						</div>
					</div>
					
					<div class="row">
					</div>
					</br></br>
				</div>	<!--  End  Row 1 -->
				
<!--====================== END OF ROW 1 =================================-->



<!--====================== START OF ROW 2 ===============================-->
	
				<div class="row light-background">
					<div class="container">
						</br></br></br>
						<div class="col-md-4 col-md-offset-1">
							<h2>WORKS ON BIG ONES AND LITTLE ONES</h2>
							<p><strong>Designed to work fluidly on both iPhone and iPad, you will always be able to keep track of you intake no matter what device you are using</strong></p>
						</div>
						<div class="col-md-5 col-md-offset-1">
							<img class="big-little-picture" src="img/big-little.png">
						</div>		
					</div>		
					<div class="row">
					</div>
						</br></br></br>
				</div>
				
<!--====================== END OF ROW 2 =================================-->	



<!--====================== START OF ROW 3 ===============================-->

				<div class="row text-center green-background">
					<div class="container">
						</br></br></br>
						<div class="row">
							<div class="col-md-12">
								<h2>TAKE A TOUR OF YOUR NEW COMPANION</h2>
							</div>
							<div class="col-md-8 col-md-offset-2">
								<p><strong>Watch and see how NutriSaurus has benifited the lives of thousands of people.
								Listen to the stories of Lori, Rick, Karl and Beth as they have used NutriSaurus to
								create a healthy, tasty diet that caters for their every need.</strong></p>
							</div>
						</div>
							<!--================================================-->
						<div class="row">
							<div class="col-md-6 col-md-offset-3 container">
								<div class="embed-responsive embed-responsive-16by9">
							<!-- Random Youtube video about how Barcodes Work, this will later be replaced by our UXD Product Video -->
									<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/e6aR1k-ympo"></iframe>
								</div>
							</div>
						</div>				
					</div>
					
					<div class="row">
					</div>
						</br></br></br>
						
				</div>
				
<!--====================== END OF ROW 3 =================================-->



<!--====================== START OF ROW 4 ===============================-->
		<!-- The stars, quote symbols and borders around the Testimonials are just a picture with text carefully placed on top -->
			<!-- Tested and works nicely on mobile -->
				<div class="row light-background text-center">
					</br>
					<div class="container">
						<div class="row">
							<h2>TESTIMONIALS</h2>
							<h4>See what people are saying about NutriSaurus</h4>
						</div>
						</br>
						<div class="row text-left">
						<!--===== Quote 1 =====-->
							<div class="col-md-4">
								<div class="col-md-11 col-md-offset-2  testimonial-box-5-star">
									</br></br></br>
									<p>The food diary has been great in helping me manage my diabetes.
											I can actually see now what is causing spikes and have been able
											to avoid them or find a substitute with the scanner. Great App.</p>
									</br>
									<h4><strong>David Chappelle</strong></h4>
									<h6><strong>STAY-AT-HOME DAD</strong></h6>
									</br></br></br></br></br>
								</div>
							</div>
						<!--===== Quote 2 =====-->
							<div class="col-md-4">
								<div class="col-md-11 col-md-offset-1 testimonial-box-4-star">
									</br></br></br>
									<p>I love the good, clear recipes for vegetarians and how easy it is to share them.
											NutriSaurus has really helped me!!</p>
									</br></br></br>
									<h4><strong>Chloe Howl</strong></h4>
									<h6><strong>DENTAL HYGENIST</strong></h6>
									</br></br>
								</div>
									</br></br></br>
							</div>
						<!--===== Quote 3 =====-->
							<div class="col-md-4">
								<div class="col-md-11 testimonial-box-5-star">
									</br></br></br>
									<p>Having to work within a budget had been so difficult for me because I wanted to also eat healthily. Now it is so easy because I can find healthy ingredients at lower prices in my local stores. Love it!</p>
									</br>
									<h4><strong>Josh Franceschi</strong></h4>
									<h6><strong>CHARITY VOLUNTEER</strong></h6>
									</br></br></br></br></br>
								</div>
							</div>
						</div>
					</div>
				</div>
				
<!--====================== END OF ROW 4 =================================-->



<!--====================== START OF ROW 5 ===============================-->

				<div class="row" >
					<div class="container wave-divider">
						<div>
							</br></br></br></br></br>
						</div>
					</div>
				</div>
				
<!--====================== END OF ROW 5 =================================-->



<!--====================== START OF ROW 6 ===============================-->
	<!-- Accepts the users email address and posts it to a PHP object, which stores the email on the database -->
				<div class="row text-center green-background" >
					<div class="container">
						</br></br>
						<div class="row">
							<form id="subscribeForm" method="POST">
								<h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
								<div class="col-md-8 col-md-offset-2">
									<h4>Enter your email to receive weekly information about new features, new products and membership offers.</h4>
									</br>
								</div>
								<div class="col-md-12 text-center">
									<h4 id="newsletter-Signup-Error" class="redText" style="display: none">* Email not Valid *</h4>
								</div>
								<div class="col-md-5 col-md-offset-2">
										<input name="subscriptionEmail" id="subscriptionEmail" class="form-control input-lg glow-green-input" type="Email" placeholder="Enter your email">
								</div>
								
								<div class="col-md-2">
									<div class="form-group">
										<button onclick="subscribeForNewsletter()" type="button" class="btn btn-success  btn-lg glow-green-button">SIGN UP</button>
									</div>
								</div>
							</form>
								
						</div>
					</div>
					</br></br></br></br>
				</div>
				
<!--====================== END OF ROW 6 =================================-->
	
			
			
<!--====================== START OF ROW 7 - Footer ========================-->

				<div class="row text-center green-background">
					<div class="container">
						</br></br></br>
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<img class="footer-bar" src="img/footer-bar.png">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-md-offset-1">
								<p class="footer-contents">&copy All right reserved NutriSaurus 2016 sTeam 12</p>
							</div>
							
							<div class="col-md-1 col-md-offset-3">
								<a class="footer-links" data-toggle="modal" data-target="#FAQModal">FAQ</a>
							</div>
							
							<div class="col-md-1">
								<a class="footer-links" data-toggle="modal" data-target="#PrivacyPolicyModal">Privacy Policy</a>
							</div>
							
							<div class="col-md-1">
								<a class="footer-links" data-toggle="modal" data-target="#TermsServiceModal">Terms of Service</a>
							</div>
							
					<!-- The following Facebook link will one day lead to NutriSaurus' own Facebook page -->
							<div class="col-md-1">
								<div class="col-md-1">
										<a class="fa fa-facebook-square fa-2x" onclick="window.open('https://www.facebook.com/')"></a>
								</div>
								
					<!-- The following Twitter link will one day lead to NutriSaurus' own Twitter page -->
								<div class="col-md-1">
										<a class="fa fa-twitter-square fa-2x" onclick="window.open('https://www.twitter.com/')"></a>
								</div>
							</div>
						</div>
						</br>

					</div>
				</div>

				
<!--=====================--MODALS--=============================-->
		<!--================= FAQ Modal ==========================-->
				<div id="FAQModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header green-background">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 class="modal-title text-center">F.A.Q.</h3>
							</div>
							<div class="modal-body">
								<h3>1) Why do witches burn?</h3>
								<h4> Answer : Because they're made of wood.</h4>
								</br>
								<h3>2) How do we know if she's made of wood?</h3>
								<h4> Answer : Build a bridge out of her.</h4>
							</div>
							<div class="modal-footer green-background">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				
		<!--================= Privacy Policy Modal ==========================-->
				<div id="PrivacyPolicyModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header green-background">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 class="modal-title text-center">Privacy Policy</h3>
							</div>
							<div class="modal-body">
								<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed massa dui, suscipit sit amet volutpat nec, imperdiet sit amet massa. In nec dolor fringilla, pharetra eros ac, laoreet felis. Praesent maximus finibus purus et tempor. Proin dapibus metus sed malesuada semper. Sed commodo sem quis libero pretium ultricies. Donec suscipit volutpat est. Morbi facilisis tortor ac eros vestibulum, vitae imperdiet enim aliquam. Curabitur semper est sed massa laoreet, nec commodo turpis laoreet. In consectetur quam non tortor finibus auctor dapibus a justo. Phasellus vel libero sed mauris aliquam laoreet at et erat. Vivamus tellus dui, luctus in arcu sed, tempus egestas tortor.</h4>
							</div>
							<div class="modal-footer green-background">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				
		<!--================= Terms of Service Modal ==========================-->
				<div id="TermsServiceModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header green-background">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 class="modal-title text-center">Terms of Service</h3>
							</div>
							<div class="modal-body">
								<h4>Phasellus volutpat, justo in dictum fringilla, ante velit euismod dolor, ut luctus augue eros sit amet leo. Nam finibus sagittis pulvinar. Nullam ante urna, porta at neque vitae, finibus vestibulum elit. Aliquam non bibendum eros, ut gravida metus. Nullam viverra nulla a leo dignissim egestas. Morbi fermentum tortor vitae lacinia tincidunt. Aliquam pharetra auctor dignissim. In hac habitasse platea dictumst. Etiam at venenatis orci. Proin viverra, orci ac vestibulum vehicula, libero enim viverra neque, eu maximus ex tortor id risus. Duis semper tempor metus sit amet tincidunt. Fusce ut odio orci. Praesent et enim eros. Nam dapibus, nibh sed lobortis suscipit, lorem erat aliquam purus, at aliquet lectus eros vel ante.</h4>
							</div>
							<div class="modal-footer green-background">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				
		<!--================= Contact Form Modal ==========================-->
				<div id="ContactForm" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="container" id="contactForm">
							
								<div class="row green-background">
										
									<div class="container">	
										<div class="row text-center">
											<div class="col-md-3 col-md-offset-1">
												<h2>Contact Us</h2>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3 col-md-offset-1">
												<div id="contactError" class="row text-center" style="display:none">
													<h4 class="redText">* Some Input is Invalid, Please recheck *</h4>
												</div>
											</div>
										</div>
										
										<form id="userContactForm" method="POST">
												<div class="row">
													<div class="col-md-3 col-md-offset-1">
														<div class="form-group">
															<input id="contactName" name="contactName" class="form-control input-lg glow-green-input contact-Input" type="text" placeholder="Enter your Name">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3 col-md-offset-1">
														<div class="form-group">
															<input id="contactEmail" name="contactEmail" class="form-control input-lg glow-green-input contact-Input" type="text" placeholder="Enter your email">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3 col-md-offset-1">
														<div class="form-group">
														<textarea id="contactMessage" name="contactMessage" rows="4" cols="50" class="form-control input-lg glow-green-input contact-Input" type="text" placeholder="Enter your Query"></textarea>
														</div>
													</div>
												</div>
										</form>	
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button onclick="contactUs()" id="contactSubmitButton" type="button" class="btn btn-success btn-lg glow-green-button" data-dismiss="">Send Message</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

		<script src="ButtonHandler.js"></script>
</html>



















