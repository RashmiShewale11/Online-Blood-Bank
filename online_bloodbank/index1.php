<?php
include("config.php");
?>		
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Terrain a Real Estates and Builders Category Flat bootstrap Responsive website Template | Home :: w3layouts</title>
<!--mobile apps-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Terrain Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700,900' rel='stylesheet' type='text/css'>
<!--link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"-->
<!-- /fonts -->
<!-- css files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/pricetable.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/main.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/pogo-slider.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<!-- js files -->
<script src="js/modernizr.js"></script>
<!-- /js files -->
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<section class="top-w3ls">
	<!-- top bar -->	
	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 top-w3ls1">
					<p class="top-p1">Lorem Ipsum is simply dummy text.</p>
				</div>
				<div class="col-lg-5 col-md-5 top-w3ls2">
					<ul class="top-contacts">
						<li class="top-hover"><p><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:support@company.com">support@company.com</a></p>
						<li class="top-unhover"><p><span class="glyphicon glyphicon-phone-alt"></span> +1 515 151515</p>
					</ul>			
				</div>
			</div>
		</div>		
	</div>
	<!-- /top bar -->
	<!-- navigation -->
	<div class="navbar-wrapper">
		<div class="container">
			<nav class="navbar navbar-inverse navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html"><h1>Terrain</h1></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
                        	<?php 
							$query="select * from addmenu";
							$res=mysqli_query($con,$query);
							while($row=mysqli_fetch_array($res))
							{
							?>
							<!--<li class="active"><a href="index.html">Home</a></li>-->
							<li><a href="<?php echo $row['pagetitel']?>"><?php echo $row['menu_name']?></a></li>
							<!--<li><a href="service.html">Services</a></li>
							<li><a href="portfolio.html">Portfolio</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="typo.html">Typography</a></li>
							<li><a href="contact.html">Contact</a></li>-->
                            <?php
								
							}
							?>
						</ul>
					</div>
				</div>
			</nav>	
			<div class="search-box">
				<div id="sb-search" class="sb-search">
					<form action="#" method="post">
						<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
						<input class="sb-search-submit" type="submit" value="">
						<span class="sb-icon-search"> </span>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>	
<!-- /navigation -->
<!-- banner section -->
<div class="pogoSlider" id="js-main-slider">
<?php

$query="select * from slider";
$res=mysqli_query($con,$query) or die(mysqli_error($con));
while($row=mysqli_fetch_array($res))
{
?>

	<div class="pogoSlider-slide" data-transition="shrinkReveal" data-duration="5000"  style="background-image:url(admin/slider/<?php echo $row['img']; ?>);">
		<div class="pogoSlider-slide-element">
			<h3><?php echo $row['description']; ?></h3>
			<a href="about.html" class="link1">Read More</a>
		</div>
	</div>
    <?php
}
?>
	<!--<div class="pogoSlider-slide " data-transition="blocksReveal" data-duration="1000"  style="background-image:url(../images/1452193415.jpg)">
		<div class="pogoSlider-slide-element">
			<h3>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</h3>
			<a href="about.html" class="link1">Read More</a>
		</div>
	</div>
	<div class="pogoSlider-slide " data-transition="barRevealDown" data-duration="1000"  style="background-image:url(../images/e5b006d5f832ae5db83c2fc2bdb5a78d_large-1.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>When an unknown printer took a galley of type and scrambled it to make a type.</h3>
			<a href="about.html" class="link1">Read More</a>
		</div>
	</div>
	<div class="pogoSlider-slide " data-transition="shrinkReveal" data-duration="1000"  style="background-image:url(images/banner4.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>It has survived not only five centuries, but also the leap into electronic.</h3>
			<a href="about.html" class="link1">Read More</a>
		</div>
	</div>-->
</div>
<!-- /banner section -->
<!-- welcome section -->
<section class="welcome">
	<div class="container">	
		<div class="wel-w3ls">
			<h3 class="text-center w3layouts w3 w3l w3ls">Welcome To Our Business</h3>
			<p class="text-center w3layouts w3 w3l w3ls">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet sed tellus eu placerat. Proin interdum, ex euismod cursus cursus, mi enim sagittis nunc, sed rhoncus nunc quam a odio. Donec ac massa urna. Nullam lacinia in velit nec ornare. Donec luctus sagittis odio a mattis. Etiam tellus diam, fringilla ut facilisis sit amet, volutpat in odio. Sed a eros justo. Pellentesque ultricies, neque nec mattis sagittis, ipsum eros efficitur magna, vitae varius augue lacus vitae libero. Sed eu ante pretium nisi vehicula mattis. Fusce posuere purus sem, eget suscipit risus cursus vitae. Phasellus ac libero placerat turpis lacinia sagittis.</p>
		</div>
	</div>	
</section>
<!-- /welcome section -->
<!-- info section -->
<section class="info">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-5 info-w3ls1">
				<a class="wmBox" href="#" data-popup="https://player.vimeo.com/video/33812159?title=0&byline=0&portrait=0">
					<img src="images/info-img.jpg" alt="w3layouts" title="w3layouts" class="img-responsive">
					<div class="b-wrapper">
						<i class="fa fa-play-circle-o" aria-hidden="true"></i>
					</div>
				</a>
			</div>
			<div class="col-lg-7 col-md-7 info-w3ls2">
				<div class="info-agile">
					<h2>Quisque scelerisque turpis id nunc</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus auctor bibendum. Phasellus tincidunt nisi ut justo scelerisque sodales in eu leo. Praesent id ultrices purus. Vestibulum lacinia eros nec nisl luctus blandit. Ut quis tempus lectus. Quisque scelerisque turpis id nunc congue, sed ullamcorper mauris efficitur.</p>
				</div>
			</div>
		</div>	
	</div>
</section>
<!-- info section -->
<!-- team section -->
<section class="team">
	<div class="container">
		<h3 class="text-center agileits agileinfo wthree w3-agileits">Our Amazing Team</h3>
		<p class="text-center agileits agileinfo wthree w3-agileits">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 team-w3ls">
				<div class="grid">
					<figure class="effect-julia">
						<img src="images/team-img1.jpg" alt="w3layouts" class="img-responsive" title="w3layouts"/>
						<figcaption>
							<div>
								<ul class="social-icons2">	
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>	
							</div>
						</figcaption>			
					</figure>
				</div>
				<h4 class="text-center">Elizabeth</h4>
				<p class="team-p1">Founder</p>	
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 team-w3ls">
				<div class="grid">
					<figure class="effect-julia">
						<img src="images/team-img2.jpg" alt="w3layouts" class="img-responsive" title="w3layouts"/>
						<figcaption>
							<div>
								<ul class="social-icons2">	
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>	
							</div>
						</figcaption>			
					</figure>
				</div>
				<h4 class="text-center">Diana</h4>
				<p class="team-p1">President</p>	
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 team-w3ls">
				<div class="grid">
					<figure class="effect-julia">
						<img src="images/team-img3.jpg" alt="w3layouts" class="img-responsive" title="w3layouts"/>
						<figcaption>
							<div>
								<ul class="social-icons2">	
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>	
							</div>
						</figcaption>			
					</figure>
				</div>
				<h4 class="text-center">Max Payne</h4>
				<p class="team-p1">Secretary</p>	
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 team-w3ls">
				<div class="grid">
					<figure class="effect-julia">
						<img src="images/team-img4.jpg" alt="w3layouts" class="img-responsive" title="w3layouts"/>
						<figcaption>
							<div>
								<ul class="social-icons2">	
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>	
							</div>
						</figcaption>			
					</figure>
				</div>
				<h4 class="text-center">Johnny Blaze</h4>
				<p class="team-p1">Manager</p>				
			</div>
		</div>	
	</div>
</section>
<!-- /team section -->
<!-- pricing section -->
<section class="price">
	<div class="container">
		<h3 class="text-center agileits-w3layouts agile w3-agile">Our Prices</h3>
		<p class="text-center agileits-w3layouts agile w3-agile">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		<div class="cd-pricing-container cd-has-margins">
			<div class="cd-pricing-switcher">
				<p class="fieldset">
					<input type="radio" name="duration-2" value="monthly" id="monthly-2" checked>
					<label for="monthly-2">Monthly</label>
					<input type="radio" name="duration-2" value="yearly" id="yearly-2">
					<label for="yearly-2">Yearly</label>
					<span class="cd-switch"></span>
				</p>
			</div> <!-- .cd-pricing-switcher -->
			<ul class="cd-pricing-list cd-bounce-invert">
				<li class="col-lg-4 col-md-4 col-sm-12">
					<div class="price-w3ls">
						<ul class="cd-pricing-wrapper">
							<li data-type="monthly" class="is-visible">
								<header class="cd-pricing-header">
									<h3>Basic</h3>
									<ul class="stars">
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
									</ul>
									<div class="cd-price">
										<span class="cd-currency">$</span>
										<span class="cd-value">30</span>
									</div>
									<p class="dur">Per <span>Month</span></p>
								</header> <!-- .cd-pricing-header -->

								<div class="cd-pricing-body">
									<ul class="cd-pricing-features">
										<li><em>1</em> Land</li>
										<li><em>1</em> Plot</li>
										<li><em>1</em> Apartment</li>
										<li><em>1</em> Terrace</li>
										<li><em>1</em> Condominium</li>
										<li><em>1</em> Duplex</li>
									</ul>
								</div> <!-- .cd-pricing-body -->
								<footer class="cd-pricing-footer">
									<a class="cd-select popup-with-zoom-anim" href="#small-dialog">Buy</a>
								</footer>  <!-- .cd-pricing-footer -->
							</li>
							<li data-type="yearly" class="is-hidden">
								<header class="cd-pricing-header">
									<h3>Basic</h3>
									<ul class="stars">
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
									</ul>
									<div class="cd-price">
										<span class="cd-currency">$</span>
										<span class="cd-value">320</span>
									</div>
									<p class="dur">Per <span>Year</span></p>
								</header> <!-- .cd-pricing-header -->
								<div class="cd-pricing-body">
									<ul class="cd-pricing-features">
										<li><em>1</em> Land</li>
										<li><em>1</em> Plot</li>
										<li><em>1</em> Apartment</li>
										<li><em>1</em> Terrace</li>
										<li><em>1</em> Condominium</li>
										<li><em>1</em> Duplex</li>
									</ul>
								</div> <!-- .cd-pricing-body -->
								<footer class="cd-pricing-footer">
									<a class="cd-select popup-with-zoom-anim" href="#small-dialog">Buy</a>
								</footer>  <!-- .cd-pricing-footer -->
							</li>
						</ul> <!-- .cd-pricing-wrapper -->
					</div>
				</li>
				<li class="col-lg-4 col-md-4 col-sm-12">
					<div class="price-w3ls">
						<ul class="cd-pricing-wrapper">
							<li data-type="monthly" class="is-visible">
								<header class="cd-pricing-header">
									<h3>Popular</h3>
									<ul class="stars">
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
									</ul>	
									<div class="cd-price">
										<span class="cd-currency">$</span>
										<span class="cd-value">60</span>
									</div>
									<p class="dur">Per <span>Month</span></p>
								</header> <!-- .cd-pricing-header -->
								<div class="cd-pricing-body">
									<ul class="cd-pricing-features">
										<li><em>7</em> Land</li>
										<li><em>7</em> Plot</li>
										<li><em>7</em> Apartment</li>
										<li><em>7</em> Terrace</li>
										<li><em>7</em> Condominium</li>
										<li><em>7</em> Duplex</li>
									</ul>
								</div> <!-- .cd-pricing-body -->
								<footer class="cd-pricing-footer">
									<a class="cd-select popup-with-zoom-anim" href="#small-dialog">Buy</a>
								</footer>  <!-- .cd-pricing-footer -->
							</li>
							<li data-type="yearly" class="is-hidden">
								<header class="cd-pricing-header">
									<h3>Popular</h3>
									<ul class="stars">
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
									</ul>
									<div class="cd-price">
										<span class="cd-currency">$</span>
										<span class="cd-value">630</span>
									</div>
									<p class="dur">Per <span>Year</span></p>
								</header> <!-- .cd-pricing-header -->
								<div class="cd-pricing-body">
									<ul class="cd-pricing-features">
										<li><em>7</em> Land</li>
										<li><em>7</em> Plot</li>
										<li><em>7</em> Apartment</li>
										<li><em>7</em> Terrace</li>
										<li><em>7</em> Condominium</li>
										<li><em>7</em> Duplex</li>
									</ul>
								</div> <!-- .cd-pricing-body -->
								<footer class="cd-pricing-footer">
									<a class="cd-select popup-with-zoom-anim" href="#small-dialog">Buy</a>
								</footer>  <!-- .cd-pricing-footer -->
							</li>
						</ul> <!-- .cd-pricing-wrapper -->
					</div>
				</li>
				<li class="col-lg-4 col-md-4 col-sm-12">
					<div class="price-w3ls">
						<ul class="cd-pricing-wrapper">
							<li data-type="monthly" class="is-visible">
								<header class="cd-pricing-header">
									<h3>Premier</h3>
									<ul class="stars">
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
									</ul>
									<div class="cd-price">
										<span class="cd-currency">$</span>
										<span class="cd-value">90</span>
									</div>
									<p class="dur">Per <span>Month</span></p>
								</header> <!-- .cd-pricing-header -->
								<div class="cd-pricing-body">
									<ul class="cd-pricing-features">
										<li><em>5</em> Land</li>
										<li><em>5</em> Plot</li>
										<li><em>5</em> Apartment</li>
										<li><em>5</em> Terrace</li>
										<li><em>5</em> Condominium</li>
										<li><em>5</em> Duplex</li>
									</ul>
								</div> <!-- .cd-pricing-body -->
								<footer class="cd-pricing-footer">
									<a class="cd-select popup-with-zoom-anim" href="#small-dialog">Buy</a>
								</footer>  <!-- .cd-pricing-footer -->
							</li>
							<li data-type="yearly" class="is-hidden">
								<header class="cd-pricing-header">
									<h3>Premier</h3>
									<ul class="stars">
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
									</ul>
									<div class="cd-price">
										<span class="cd-currency">$</span>
										<span class="cd-value">950</span>
									</div>
									<p class="dur">Per <span>Year</span></p>
								</header> <!-- .cd-pricing-header -->
								<div class="cd-pricing-body">
									<ul class="cd-pricing-features">
										<li><em>5</em> Land</li>
										<li><em>5</em> Plot</li>
										<li><em>5</em> Apartment</li>
										<li><em>5</em> Terrace</li>
										<li><em>5</em> Condominium</li>
										<li><em>5</em> Duplex</li>
									</ul>
								</div> <!-- .cd-pricing-body -->
								<footer class="cd-pricing-footer">
									<a class="cd-select popup-with-zoom-anim" href="#small-dialog">Buy</a>
								</footer>  <!-- .cd-pricing-footer -->
							</li>
						</ul> <!-- .cd-pricing-wrapper -->
					</div>
				</li>
			</ul> <!-- .cd-pricing-list -->
		</div> <!-- .cd-pricing-container -->
	</div>
	<!--pop-up-grid -->
			<div id="popup">
				<div id="small-dialog" class="mfp-hide">
					<div class="pop_up">
						<div class="payment-online-form-left">
							<form action="#" method="post">
								<h4><span class="shipping"> </span>Shipping Details</h4>
								<ul>
									<li><input class="text-box-dark" type="text" name="name" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"></li>
									<li><input class="text-box-dark" type="text" name="name" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></li>
								</ul>
								<ul>
									<li><input class="text-box-dark" type="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></li>
									<li><input class="text-box-dark" type="text" name="phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></li>
								</ul>
								<ul>
									<li><input class="text-box-dark" type="text" name="address" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></li>
									<li><input class="text-box-dark" type="text" name="pincode" value="Pin Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pin Code';}"></li>
								</ul>
								<div class="clear-fix"></div>
								<h4 class="paymenthead"><span class="payment"></span>Payment Details</h4>
								<div class="clear-fix"></div>
								<ul class="payment-type">
									<li><span class="col_checkbox">
											<input id="3" class="css-checkbox1" type="checkbox">
											<label for="3" class="css-label1"></label>
											<a class="visa" href="#"></a>
										</span>												
									</li>
									<li>
										<span class="col_checkbox">
											<input id="4" class="css-checkbox2" type="checkbox">
											<label for="4" class="css-label2"></label>
											<a class="paypal" href="#"></a>
										</span>
									</li>
								</ul>
								<ul>
									<li><input class="text-box-dark" type="text" name="number" value="Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Card Number';}"></li>
									<li><input class="text-box-dark" type="text" name="name" value="Name on card" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name on card';}"></li>
								</ul>
								<ul>
									<li><input class="text-box-light hasDatepicker" name="date" type="text" id="datepicker" value="Expiration Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expiration Date';}"><em class="pay-date"> </em></li>
									<li><input class="text-box-dark" type="text" name="number" value="Security Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Security Code';}"></li>
								</ul>
								<ul class="payment-sendbtns">
									<li><input type="reset" value="Reset"></li>
									<li><input type="submit" value="Submit"></li>
								</ul>
								<div class="clear-fix"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		<!--pop-up-grid-->
</section>
<!-- /pricing section -->
<!-- subscribe section -->
<section class="subs">
	<div class="container">
		<h3>Subcribe to Our news letter to latest news and offers</h3>
		<form action="#" method="post">
			<div class="col-lg-10 col-md-10 col-sm-7 subs-w3ls1">
				<div class="form-group1">
					<input class="form-control" id="email" name="email" placeholder="Enter Your Email Address" type="email" required>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-5 subs-w3ls2">
				<div class="form-group2">
					<button class="btn btn-outline btn-lg" type="submit">Subscribe</button>
				</div>
			</div>
			<div class="clearfix"></div>
		</form>	
	</div>
</section>
<!-- /subscribe section -->
<!-- map section -->
<div class="map">
	<iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d380510.6741687111!2d-88.01234121699822!3d41.83390417061058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1455598377120" style="border:0" allowfullscreen></iframe>
</div>
<!-- /map section -->
<!-- footer section -->
<section class="footer"> 
	<a href="#myPage" title="To Top" class="top">
		<span class="glyphicon glyphicon-chevron-up"></span>
	</a>
	<a href="index.html" class="logo">Terrain</a>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 footer-w3ls1">
				<ul class="footer-links1 cl-effect-4">
					<li><a href="about.html">About</a></li>
					<li><a href="service.html">Services</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
				</ul>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 footer-w3ls2">
				<ul class="footer-links2 cl-effect-4">
					<li><a href="blog.html">Blog</a></li>
					<li><a href="typo.html">Typography</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
		</div>
		<ul class="social-icons1">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
			<li><a href="#"><i class="fa fa-youtube"></i></a></li>
		</ul>
		<p class="copyright">&copy; 2016 Terrain. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
	</div>
</section>
<!-- /footer section -->
<!-- back to top -->
<a href="#0" class="cd-top">Top</a>
<!-- /back to top -->
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>

<!-- scroll to top -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $("section.footer a[href='#myPage']").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
})
</script>
<!-- /scroll to top -->
<script src="js/pricetable.js"></script>
<script src="js/wmBox.js"></script>
<script src="js/info.js"></script>
<!-- js for pricing table pop up -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	 <script>
		$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
<!-- /js for pricing table pop up -->
<!-- js for back to top -->
<script src="js/top.js"></script>
<!-- /js for back to top -->
<!-- js for search button -->
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script>
	new UISearch( document.getElementById( 'sb-search' ) );
</script>
<!-- /js for search button -->
<script src="js/jquery.pogo-slider.min.js"></script>
<script src="js/main.js"></script>
<!-- /js files -->
</body>
</html>