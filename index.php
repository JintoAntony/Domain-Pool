<?php session_start();
?>

<html lang="en">
<head>
<title>Domain Pool</title>
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
								
								<li><a href="showcase_domains.php">Showcase Domains</a></li>
								<li><a href="solutions.php">Search Domains</a></li>
								
							<li><a href="contacts.php">Contact Us</a></li>
							</ul>
						</nav>
						
					</div>
				</div>
			</div>
		</div>	
<?php 
include('includes/top.inc.php');
?>			
			


</header>
<!-- content -->
	<section id="content">
		<div class="container">
			<div id="faded">
				<ul class="slides">
					<li><img src="images/slide-title1.gif"><a href="buy_domains.php"><span><span>Learn More</span></span></a></li>
					<li><img src="images/slide-title4.gif"><a href="sell_domains.php"><span><span>Learn More</span></span></a></li>
					<li><img src="images/slide-title3.gif"><a href="showcase_domains.php"><span><span>Learn More</span></span></a></li>
					<li><img src="images/slide-title2.gif"><a href="index.php"><span><span>Learn More</span></span></a></li>
				</ul>
				<ul class="pagination">
					<li><a href="buy_domains.php" rel="0"><span>Buy Domains</span><small>Get more information</small></a></li>
					<li><a href="sell_domains.php" rel="1"><span>Sell Domains</span><small>Get more information</small></a></li>
					<li><a href="showcase_domains.php" rel="2"><span>Show Domains</span><small>Get more information</small></a></li>
					<li><a href="index.php" rel="3"><span>Domains</span><small>Get more information</small></a></li>
				</ul>
			</div>
			<div class="inside">
				<div class="wrapper row-1">
					<div class="box col-1 maxheight">
						<div class="border-right maxheight">
							<div class="border-bot maxheight">
								<div class="border-left maxheight">
									<div class="left-top-corner maxheight">
										<div class="right-top-corner maxheight">
											<div class="right-bot-corner maxheight">
												<div class="left-bot-corner maxheight">
													<div class="inner">
														<h3>All Domains</h3>
														<ul class="info-list">
														
														
<?php 
DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD','root');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'domainpool');
$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);
if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());  }

$query1 = "select * from sell_domain limit 5";
$result1 = mysqli_query($dbc,$query1);
	
while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC))
{   
echo     '         		  
		<li><span>'.$row1['domain_name'].''.$row1['domain_extension'].'</span>'.$row1['domain_price'].'</li>		  
       ';
}
?>														
														
															

															</ul>
														<span class="price">$100 Starts</span>
														<div class="aligncenter"><a href="#" class="link1"><span><span>Learn More</span></span></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box col-2 maxheight">
						<div class="border-right maxheight">
							<div class="border-bot maxheight">
								<div class="border-left maxheight">
									<div class="left-top-corner maxheight">
										<div class="right-top-corner maxheight">
											<div class="right-bot-corner maxheight">
												<div class="left-bot-corner maxheight">
													<div class="inner">
														<h3>Showcase</h3>
														<ul class="info-list">
														
														
<?php 

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);
if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());  }

$query1 = "select * from showcase_domain limit 5";
$result1 = mysqli_query($dbc,$query1);
	
while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC))
{   
echo     '         		  
		<li><span>'.$row1['showcase_domain_name'].''.$row1['showcase_domain_extension'].'</span>'.$row1['showcase_domain_price'].'</li>		  
       ';
}
?>															
																
														</ul>
														<span class="price">$100 Starts</span>
														<div class="aligncenter"><a href="#" class="link1"><span><span>Learn More</span></span></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box col-3 maxheight">
						<div class="border-right maxheight">
							<div class="border-bot maxheight">
								<div class="border-left maxheight">
									<div class="left-top-corner maxheight">
										<div class="right-top-corner maxheight">
											<div class="right-bot-corner maxheight">
												<div class="left-bot-corner maxheight">
													<div class="inner">
														<h3>Recent</h3>
														<ul class="info-list">
																																									
<?php 

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);
if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());  }

$query1 = "select * from sell_domain limit 5";
$result1 = mysqli_query($dbc,$query1);
	
while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC))
{   
echo     '         		  
		<li><span>'.$row1['domain_name'].''.$row1['domain_extension'].'</span>'.$row1['domain_price'].'</li>		  
       ';
}
?>																																										
														</ul>
														<span class="price">$100 Starts</span>
														<div class="aligncenter"><a href="#" class="link1"><span><span>Learn More</span></span></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box col-4 maxheight">
						<div class="border-right maxheight">
							<div class="border-bot maxheight">
								<div class="border-left maxheight">
									<div class="left-top-corner maxheight">
										<div class="right-top-corner maxheight">
											<div class="right-bot-corner maxheight">
												<div class="left-bot-corner maxheight">
													<div class="inner">
														<h3>Selled</h3>
														<ul class="info-list">
<?php 

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);
if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());  }

$query1 = "select * from sell_domain limit 5";
$result1 = mysqli_query($dbc,$query1);
	
while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC))
{   
echo     '         		  
		<li><span>'.$row1['domain_name'].''.$row1['domain_extension'].'</span>'.$row1['domain_price'].'</li>		  
       ';
}
?>															
															
														</ul>
														<span class="price">$100 Starts</span>
														<div class="aligncenter"><a href="#" class="link1"><span><span>Learn More</span></span></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="inside1">
					<div class="wrap row-2">
						<article class="col-1">
							<h2>Solutions</h2>
							<ul class="solutions">
								<li><img src="images/icon1.gif"><p>Quickly and easily Buy Domains</p><a href="buy_domains.php"><b>Read More</b></a></li>
								<li><img src="images/icon2.gif"><p>Quickly and easily Sell Domains</p><a href="sell_domains.php"><b>Read More</b></a></li>
								<li><img src="images/icon3.gif"><p>24/7 Real Person Customer Support</p><a href="contacts.php"><b>Read More</b></a></li>
								<li><img src="images/icon4.gif"><p>Showcase Domains @attractive prices</p><a href="showcase_domains.php"><b>Read More</b></a></li>
							</ul>
						</article>
						<article class="col-2">
<!--						<h2>Register Domain Name</h2>
							<form action="" id="domain-form">
								<div class="img-box"><img src="images/1page-img.jpg">
									<div class="extra-wrap">
										<fieldset>
											<span class="text">
												<input type="text" value="enter domain name" onFocus="if(this.value=='enter domain name'){this.value=''}" onBlur="if(this.value==''){this.value='enter domain name'}">
											</span>
											<ul class="checkboxes wrapper">
												<li><input type="checkbox"><label>.mx</label></li>
												<li><input type="checkbox"><label>.net</label></li>
												<li><input type="checkbox"><label>.com</label></li>
												<li><input type="checkbox"><label>.eu</label></li>
												<li class="alt"><input type="checkbox"><label>.us.com</label></li>
												<li><input type="checkbox"><label>.us.com</label></li>
												<li><input type="checkbox"><label>.info</label></li>
												<li><input type="checkbox"><label>.mobi</label></li>
												<li><input type="checkbox"><label>.co.uk</label></li>
												<li class="alt"><input type="checkbox"><label>.tv</label></li>
											</ul>
										</fieldset>
									</div>
								</div>
								-->
								
								<div class="wrapper">
									<a href="#" class="link2 fleft" onClick="document.getElementById('domain-form').submit()"><span><span>Check  Domain</span></span></a>
									<ul class="links fleft">
								<!--	<li><a href="#">Renew a domain</a></li>
										<li><a href="#">Transfer a domain</a></li> -->
										<li><a href="http://whois.net/"><span>WHOIS</span></a></li>
									</ul>
								</div>
					<!--		</form>-->
							
							</br>
							<h2>Your Domain Name Helps the World  to Find You</h2>
							<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet.</p>
							<p>Voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
							<a href="#" class="link2"><span><span>Read More</span></span></a>
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
								<li><a href="#">My Upgrades</a></li>
								<li><a href="#">Account Settings</a></li>
								<li><a href="#">Customer Information</a></li>
						
							</ul>
							<ul class="list col-2">
								<li>Shopping</li>
								<li><a href="#">Offer Disclaimers</a></li>
								<li><a href="#">Domain Search</a></li>								
							</ul>
							<ul class="list col-3">
								<li>Resources</li>
								<li><a href="#">About us</a></li>
								<li><a href="#">Company Info</a></li>								
								<li><a href="#">What's New</a></li>
								<li><a href="#">Connect with Us</a></li>
								<li><a href="#">FAQ's</a></li>
							</ul>
							<ul class="list col-4">
								<li>Help and Support</li>
								<li><a href="#">Support &amp; Sales</a></li>
								<li><a href="#">Billing Support</a></li>
								<li><a href="#">Email Our Support Team</a></li>
								<li><a href="#">Report Spam</a></li>
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
			<a href="http://www.spiderguts.com" class="new_window">Website Designing</a> designed by Spiderguts.com<br>
			<a href="http://www.spiderguts.com" class="new_window">Developed</a> provided by Spidreguts.com
		</div>
	</div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>