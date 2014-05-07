<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Home - Home Page | Hosting - Free Website Template from Templates.com</title>
<meta name="description" content="Place your description here">
<meta name="keywords" content="put, your, keyword, here">
<meta name="author" content="Templates.com - website templates provider">
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/maxheight.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/jquery.faded.js"></script>
<script type="text/javascript" src="js/jquery.jqtransform.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
	$(function(){
		$("#faded").faded({
			speed: 500,
			crossfade: true,
			autoplay: 10000,
			autopagination:false
		});
		
		$('#domain-form').jqTransform({imgPath:'jqtransformplugin/img/'});
	});
</script>
<!--[if lt IE 7]>
<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page1" onLoad="new ElementMaxHeight();">
<div class="tail-top">
<!-- header -->
	<header>
		<div class="container">
		<h1><a href="index.html"><span>Domain</span> <span></span>Pool</a></h1>
		<div class="header-box">
				<div class="left">
					<div class="right">
						<nav>
							<ul>
								<li class="current"><a href="index.php">Home</a></li>
								<li><a href="buy_domains.php">Buy Domains</a></li>
								<li><a href="sell_domains.php">Sell Domains</a></li>
								<li><a href="parkdomains.php">Park Domains</a></li>
								<li><a href="showcase_domains.php">Showcase Domains</a></li>
								<li><a href="solutions.php">Search Domains</a></li>
								<li><a href="support.php">About Us</a></li>
							<li><a href="contacts.php">Contact Us</a></li>
							</ul>
						</nav>
						
					</div>
				</div>
			</div>
			
			<?php  include ('includes/top.inc.php');	?>
			
		</div>
	</header>
<!-- content -->
	<section id="content">
		<div class="container">
			<div id="faded">
				<ul class="slides">
					<li><img src="images/slide-title1.gif"><a href="#"><span><span>Learn More</span></span></a></li>
					<li><img src="images/slide-title4.gif"><a href="#"><span><span>Learn More</span></span></a></li>
					<li><img src="images/slide-title3.gif"><a href="#"><span><span>Learn More</span></span></a></li>
					<li><img src="images/slide-title2.gif"><a href="#"><span><span>Learn More</span></span></a></li>
				</ul>
				<ul class="pagination">
					<li><a href="#" rel="0"><span>Web Hosting</span><small>Get more information</small></a></li>
					<li><a href="#" rel="1"><span>Broadband</span><small>Get more information</small></a></li>
					<li><a href="#" rel="2"><span>Email Hosting</span><small>Get more information</small></a></li>
					<li><a href="#" rel="3"><span>Dedicated</span><small>Get more information</small></a></li>
				</ul>
			</div>
			<div class="inside">
				
				<div class="inside1">
					<div class="wrap row-2">
						<!--<article class="col-1">
							<h2>Solutions</h2>
							<ul class="solutions">
								<li><img src="images/icon1.gif"><p>Quickly and easily create a Web Page</p><a href="#"><b>Read More</b></a></li>
								<li><img src="images/icon2.gif"><p>Share documents any time, any where</p><a href="#"><b>Read More</b></a></li>
								<li><img src="images/icon3.gif"><p>24/7 Real Person Customer Support</p><a href="#"><b>Read More</b></a></li>
								<li><img src="images/icon4.gif"><p>Online Account Management Tools</p><a href="#"><b>Read More</b></a></li>
							</ul>
						</article> -->
						<article class="col-2">
							<h2>Add Domain</h2>
							<form action="process_add_domain.php" id="adddomain" name="adddomain" method="post">
								<!-- <div class="img-box"><img src="images/1page-img.jpg"> -->
									
									<br/> <br/>
									
									<div class="extra-wrap">
										
											Enter Domain Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
											&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
											&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
											&nbsp;  Enter Extension &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
											&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
											&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
											&nbsp; Enter Price<br/><br/>
											
											<input type="text" placeholder="Enter domain name" name="domain_name" id="domain_name" class="texts"> &nbsp; 
											
											 <select id="domain_extension" name="domain_extension" class="textareas">
									         <option value="" selected="selected">--Select--</option>
								             <option value=".in">.in</option>
									         <option value=".com">.com</option>
									         <option value=".ac.in">.ac.in</option>
									         <option value=".org">.org</option>
									         <option value=".co.uk">.co.uk</option>
									         <option value="Argentina">.mx</option>
									         <option value="Armenia">.net</option>
									         <option value="Australia">.eu</option>
									         <option value="Austria">.info</option>
									         <option value="Azerbaijan">.mobi</option>
									         <option value="Bahamas">.us</option>
									        </select>
											 &nbsp; 
											 <input type="text" placeholder="Enter Price" name="domain_price" id="domain_price" class="texts">
											 
									</div>
									
									<br/><br/>
									
									<div id="button" style="float:left;">
									<!--<a href="#" class="link4" onClick="document.getElementById('contacts-form').reset()"><span><span>Clear</span></span></a><a href="#" class="link2" onClick="document.getElementById('contacts-form').submit()"><span><span>Send</span></span></a> -->
									<input type="submit" name="submit" id="submit" style="width:100px; ">
									</div>
									
								
								<!--  <div class="wrapper">
									<a href="#" class="link2 fleft" onClick="document.getElementById('domain-form').submit()"><span><span>Check  Domain</span></span></a>
									<ul class="links fleft">
										<li><a href="#">Renew a domain</a></li>
										<li><a href="#">Transfer a domain</a></li>
										<li><a href="#">WHOIS</a></li>
									</ul>
								</div>  -->
							</form>
						</article>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- aside -->
<aside>
	<div class="container">
		<div class="inside">
			<div class="line-ver1">
				<div class="line-ver2">
					<div class="line-ver3">
						<div class="wrapper line-ver4">
							<ul class="list col-1">
								<li>Account Manager</li>
								<li><a href="#">My Account</a></li>
								<li><a href="#">My Renewals</a></li>
								<li><a href="#">My Upgrades</a></li>
								<li><a href="#">Account Settings</a></li>
								<li><a href="#">Customer Information</a></li>
								<li><a href="#">Order History</a></li>
							</ul>
							<ul class="list col-2">
								<li>Shopping</li>
								<li><a href="#">Offer Disclaimers</a></li>
								<li><a href="#">Domain Search</a></li>
								<li><a href="#">Product Catalog</a></li>
								<li><a href="#">Producr Advisor</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Mobile</a></li>
							</ul>
							<ul class="list col-3">
								<li>Resources</li>
								<li><a href="#">Webmail</a></li>
								<li><a href="#">WHOIS search</a></li>
								<li><a href="#">ICANN Confirmation</a></li>
								<li><a href="#">Affiliates</a></li>
								<li><a href="#">Connect with Us</a></li>
								<li><a href="#">Gadgets / Widgets</a></li>
							</ul>
							<ul class="list col-4">
								<li>Help and Support</li>
								<li><a href="#">Support &amp; Sales</a></li>
								<li><a href="#">Billing Support</a></li>
								<li><a href="#">Email Our Support Team</a></li>
								<li><a href="#">FAQ’s</a></li>
								<li><a href="#">User’s Guides</a></li>
								<li><a href="#">Report Spam</a></li>
							</ul>
							<ul class="list col-5">
								<li>About</li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Security Center</a></li>
								<li><a href="#">Company Info</a></li>
								<li><a href="#">News Center</a></li>
								<li><a href="#">Customer Testimonials</a></li>
								<li><a href="#">What’s New</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</aside>
<!-- footer -->
<footer>
	<div class="container">
		<div class="inside">
			<a href="http://www.templatemonster.com" class="new_window">Website template</a> designed by TemplateMonster.com<br>
			<a href="http://www.templates.com/product/3d-models/" class="new_window">3D Models</a> provided by Templates.com
		</div>
	</div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>