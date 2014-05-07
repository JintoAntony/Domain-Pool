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
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
 <![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page3">
<div class="tail-top2">
<!-- header -->
	<header>
		<div class="container">
		
		<h1><a href="index.html"><span>Domain</span> <span></span>Pool</a></h1>
			<div class="header-box">
				<div class="left">
					<div class="right">
						<nav>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="buy_domains.php">Buy Domains</a></li>
								<li><a href="sell_domains.php">Sell Domains</a></li>
								
								<li class="current"><a href="showcase_domain.php">Showcase Domains</a></li>
								<li><a href="solutions.php">Search Domains</a></li>
								
								<li><a href="contacts.php">Contact Us</a></li>
							</ul>
						</nav>
						
					</div>
				</div>
			</div>
		<?php  include ('includes/top.inc.php');			?>
		</div>
	</header>
<!-- content -->
	<section id="content">
		<div class="container">
			<div class="inside bot-indent">
				<div id="slogan">
					<div class="inside">
						<h2><span>Your Domain Name</span> Helps the World  to Find You</h2>
						<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
					</div>
				</div>
				
														
														
<?php

//--------------------------------If Session Was set---------------//-----------------------------------------------
if(isset($_SESSION['user']))
{



echo '

<ul class="banners wrapper">

					<li><a href="sell_domains.php">My Domains</a></li>
					<li><a href="add_domains.php">Add Domains</a></li>
				</ul>

<h2 class="extra">Available Domains</h2>
								
				<table width="100%" cellspacing="5" cellpadding="5">
                <tr>
                   <td colspan="3">&nbsp;</td>
                </tr>	

                <tr>
                    <td colspan="10"><table width="95%" cellpadding="3" cellspacing="2" style="text-align:center; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:14px;" border="1">
                        <tr>
                            <td width="20%" style="border-right:none; border-bottom:none;">Sl no.</td>
                            <td width="25%" style="border-right:none; border-bottom:none;"><p>Domain Name</p></td>
                            <td width="33%" style=" border-bottom:none;"><p>Extension</p></td>
                            <td width="22%" style=" border-bottom:none;"><p>Delete</p></td>
                        </tr>	
					
                  			  
				 <div class="box extra">
					<div class="border-right">
						<div class="border-bot">
							<div class="border-left">
								<div class="left-top-corner1">
									<div class="right-top-corner1">
										<div class="right-bot-corner">
											<div class="left-bot-corner">
												<div class="left-indent line-ver1">

';



DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD','root');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'domainpool');


$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);
if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());  }

$user_id=$_SESSION['user_id'];
$query = "select * from sell_domain where domain_user_id=$user_id";
$result = mysqli_query($dbc,$query);
$i=1;

if($result){ 
if(mysqli_affected_rows($dbc)!=0){
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
				

						echo '<tr><td>'.$i++.'</td>' ;   
		                echo '<td>'.$row['domain_name'].$row['domain_extension'].'</td>';
		                 echo '<td>'.$row['domain_price'].'</td>';		
						echo '<td>
						<a href="process_delete_domain.php?domain_id='.$row['domain_id'].'" style="text-decoration:none; color:blue; border:none;"><u>Delete</u></a>
					
						
						
						</td></tr>';							
		  }
		  }
		  }
		  
}
//-----------------------------------------------//-----------------------------------------------
if((!isset($_SESSION['user']) ) )
    {  
echo' Login Required';
   }
		  
?>

  </tr>			
                  </table>  <br/> <br/> <br/>
																	<div class="clear"></div>
															
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
			<a href="http://www.spiderguts.com" class="new_window">Website Designing</a> designed by Spiderguts.com<br>
			<a href="http://www.spiderguts.com" class="new_window">Developed</a> provided by Spidreguts.com
		</div>
	</div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>