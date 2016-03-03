<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="AGSS">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Acumen Global Sourcing Solution</title>
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<!--[if lt IE 8]>
	    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body class="inner-page">
	<div class="outer-wrapper">
		<div class="outer-pad">
			<?php include('includes/header.html'); ?>
			<div class="inner-wrapper">
				<div class="overlay">
					<div class="container">
						<div class="item-header">
							<span class="text-white">Contact Us</span>
						</div>
					</div>
				</div>
			</div>
			<div class="inner-content-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-6 form-wrapper">
							<div class="form">
								<form action="process3.php" method="post" enctype="multipart/form-data">
									<div class="input">
										<label class="form-label">Your full name <span class="required">*</span></label>
										<input type="text" class="form-input" />
									</div>
									<div class="input">
										<label class="form-label">Email Address <span class="required">*</span></label>
										<input type="email" class="form-input" />
									</div>
									<div class="input">
										<label class="form-label">Message</label>
										<textarea class="form-textarea" rows="5"></textarea>
									</div>
									<div class="clearfix input">
										<div class="col1 file-upload-send">
											<div class="input">
												<label class="form-label">Send Photo</label>
												<input type="file" class="form-input-upload" />
											</div>
										</div>
										<div class="col1 file-upload">
											<div class="input">
												<label class="form-label">Send Document</label>
												<input type="file" class="form-input-upload" />
											</div>
										</div>
									</div>
									<div class="input captcha">
										<div class="g-recaptcha" data-sitekey="6Le8fw8TAAAAAFBnjclcYiTwa58Cq3FiU4by_wjj"></div>
									</div>
									<div class="input-submit">
										<input type="submit" value="Submit" class="submit">
									</div>
								</form>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 contact-details-wrapper">
							<a href="#" class="download">Download our product enquiry form here!</a>
							<div class="c-address">
								<h4>London Office</h4>
								Acumen Global Sourcing Solutions<br />
								22 Studio House<br />
								Delamere Road<br />
								Cheshunt<br />
								Hertfordshire<br />
								United Kingdom<br />
								EN8 9SH
							</div>
							<div class="c-email">
								<h4>Email Us</h4>
								alex@agss.co.uk
							</div>
							<div class="c-call">
								<h4>Call us</h4>
								+44 1992 307 435
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="process">
				<div class="container">
					<p>From <span>design</span> to <span>prototyping</span> to <span>delivery</span>. </p>
					<p>We pride ourselves on</p>
					<p class="p-last"><span>Quality</span> and <span>Efficiency</span></p>
				</div>
			</div><!-- end process -->
			<div class="prefoot-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-4 quicklinks">
							<h4>Quicklinks</h4>
							<ul class="q-links">
								<li>
									<a href="#">Link 1</a>
								</li>
								<li>
									<a href="#">Link 2</a>
								</li>
								<li>
									<a href="#">Link 3</a>
								</li>
								<li>
									<a href="#">Link 4</a>
								</li>
								<li>
									<a href="#">Link 5</a>
								</li>
								<li>
									<a href="#">Link 6</a>
								</li>
								<li>
									<a href="#">Link 7</a>
								</li>
							</ul>
						</div>
						<div class="col-sm-12 col-md-4 prefoot-content">
							<h4>Lorem Ipsum</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at tempus tellus, eget imperdiet arcu. Etiam eu elit metus. Nullam a dui eu lectus feugiat fermentum non vitae nunc. Nullam quis risus efficitur odio ullamcorper ultricies.</p>
						</div>
						<div class="col-sm-12 col-md-4 contact-details">
							<h4>Contact Details</h4>
							<div class="map">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at tempus tellus, eget imperdiet arcu. Etiam eu elit metus.</p>
							</div>
							<div class="phone-num">
								<span class="phone-foot">Phone: +44 1992 307 435</span>
								<span class="fax-foot">Fax: (415) 124-5678</span>
							</div>
							<div class="support">
								<span>support@agss.com</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include('includes/footer.html'); ?>
		</div>
	</div>

<script src="js/jquery-1.11.3.js" type="text/javascript"></script>
<script src="js/modernizer.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/tab-collapse.js"></script> 
<script src="js/script.js" type="text/javascript"></script>
</body>
</html>`