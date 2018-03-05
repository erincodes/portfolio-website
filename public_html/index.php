<!--Refer to content strategy here: https://bootcamp-coders.cnm.edu/~escott15/portfolio-website/public_html/documentation/milestone-2.php-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- FontAwesome -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

<!-- JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<title>Erin Scott's Portfolio</title>
	</head>

	<body>
		<!--Nav bar-->
		<header>
			<nav class="navbar navbar-expand-md navbar-light bg-light d-flex justify-content-end">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="#about">About</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="#testimonials">Testimonials</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="#portfolio">Portfolio</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="#contact-section">Contact</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

<!--Hero image and welcome message-->
		<section>
			<div class="container-fluid backgroundimg" >
				<div class="row-fluid">
					<div class="column">
						<div class="container pt-5">
							<h1 class="display-3 text-center font-weight-bold">Erin Scott</h1>
							<p class="lead text-center">Web Development, Marketing, and Project Management</p>
						</div>
					</div>
				</div>
			</div>
		</section>

<!--About section-->
		<section>
			<div class="container" id="about">
				<div class="row mt-5">
					<div class="column mt-5 col-md-4">
						<h2>About Erin</h2>
						<img class="img-fluid rounded-circle" src="images/erin-scott-headshot-cropped.png" alt="Erin Scott headshot" height="auto" width="250em">
					</div>
					<div class="column mt-5 col 2">
						<p>Erin helps clients craft stellar online presences for their businesses. She brings a strategic approach to web development, marketing, and project management, and excels as a liaison between technical teams & clients. Erin is a 6th generation New Mexican and is passionate about economic development in the Land of Enchantment. She has also spent significant time in Latin America and is an avid Spanish language lover. Connect with her on <a href="https://www.linkedin.com/in/erinscottabq/" target="_blank">LinkedIn</a> or on <a href="https://twitter.com/dot_of_scott/" target="_blank">Twitter.</a></p>
					</div>
				</div>
			</div>
		</section>

<!--Testimonials section-->
		<section>
			<div class="container" id="testimonials">
				<h2>Testimonials</h2>
				<div class="row">
					<div class="col p-2 m-3">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
<!--Images are 600 width x 400 height-->
									<img class="d-block w-100" src="images/testimonial-mary.png" alt="First slide">
								</div>
								<div class="carousel-item">
<!--Images are 600 width x 400 height-->
									<img class="d-block w-100" src="images/testimonial-nat.png" alt="First slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>


<!--Portfolio section-->
		<section>
			<div class="container" id="portfolio">
				<h2>Portfolio</h2>
				<p>Explore examples of Erin's past work below:</p>
				<div class="row ml-5 mr-5">
					<div class="column">
						<div class="row m-3">
							<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
								<img class="card-img-top" src="images/abq-street-art-logo.svg" alt="ABQ Street Art">
								<div class="card-body">
									<h5 class="card-title text-center">ABQ Street Art Web App</h5>
									<p class="card-text">Mobile-first web app built with the Google API as a team capstone project during the Deep Dive Coding Bootcamp.</p>
									<div class="text-center">
										<a href="https://bootcamp-coders.cnm.edu/~escott15/abq-street-art/static-ui/home-view.php" target="blank" class="btn btn-primary btn-light">View Project</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="row m-3">
							<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
								<img class="card-img-top" src="images/visitors-guide-cover-2017.png" alt="Albuquerque Visitors Guide">
								<div class="card-body">
									<h5 class="card-title text-center">Albuquerque Visitors Guide</h5>
									<p class="card-text">Project manager for 2016 and 2017 editions.</p>
									<div class="text-center">
										<a href="https://www.visitalbuquerque.org/plan-my-trip/travel-tools/guides/" target="blank" class="btn btn-primary btn-light">View Project</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="row m-3">
							<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
								<img class="card-img-top" src="images/abq-365.png" alt="ABQ 365">
								<div class="card-body">
									<h5 class="card-title text-center">ABQ 365</h5>
									<p class="card-text">Blog content editor and writer. Curated events for Albuquerque city calendar.</p>
									<div class="text-center">
										<a href="https://www.visitalbuquerque.org/abq365/" target="blank" class="btn btn-primary btn-light">View Project</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<!--Contact form section-->
		<section>
			<div class="container" id="contact-section">
				<div class="row">
					<div class="column mt-5 mb-5 pb-5 col-12">
						<h2>Contact</h2>
						<form id="contact-form" action="php/mailer.php" method="post" class="form-horizontal well">
							<div class="form-group">
								<label for="name">Name</label>
								<div class="input-group">
									<div class="input-group-addon">
									</div>
									<input type="text" class="form-control" id="contactFormName" name="contactFormName" placeholder="Your name">
								</div>
							</div>
							<div class="form-group">
								<label for="email">Email address</label>
								<div class="input-group">
									<div class="input-group-addon">
									</div>
									<input type="email" class="form-control" id="contactFormEmail" name="contactFormEmail" placeholder="Your email address">
								</div>
							</div>
							<div class="form-group">
								<label for="subject">Subject</label>
								<div class="input-group">
									<div class="input-group-addon">
									</div>
									<input type="text" class="form-control" id="contactFormSubject" name="contactFormSubject" placeholder="Email subject line">
								</div>
							</div>
							<div class="form-group">
								<label for="message">Message</label>
								<div class="input-group">
									<div class="input-group-addon">
									</div>
									<textarea class="form-control" rows="5" id="contactFormMessage" name="contactFormMessage" placeholder="Message for Erin"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="opt-in">Would you like to be added to my email newsletter list?</label>
								<div class="form-check">
									<div class="input-group-addon"></div>
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
									<label class="form-check-label" for="defaultCheck1">
										Yes, subscribe me
									</label>
								</div>

							</div>
<!--Google reCAPTCHA-->
							<div class="g-recaptcha" data-sitekey="6Lc19kcUAAAAAP5R_SiEzd-L2ir3Fjq11JQkk3ko"></div>
							<br>
<!--Submit button-->
							<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
						</form>
						<div id="output-area"></div>
					</div>
				</div>
			</div>
		</section>

<!--Bootstrap sticky footer-->
		<footer>
			<div class="container-fluid">
				<div class="sticky-footer text-center text-white bg-dark pt-2 pb-0 m-0 fixed-bottom">
					<p>
						<a href="https://github.com/erincodes/" target="_blank"><i class="fab fa-github fa-2x"></i></a>
						<a href="https://www.linkedin.com/in/erinscottabq/" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
						<a href="https://twitter.com/dot_of_scott/" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
						<br>
						Erin Scott ©2018
					</p>
				</div>
			</div>
		</footer>

	</body>
</html>
