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

<script type="text/javascript">
function onKeyPressBlockNumbers(e)
{
	var key = window.event ? e.keyCode : e.which;
	var keychar = String.fromCharCode(key);
	reg = /\d/;
	return !reg.test(keychar);
}


 function onlyNumbers(event) {
        var e = event || evt; // for trans-browser compatibility
        var charCode = e.which || e.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
        return true;
    }

</script>

<script type="text/javascript">

function validateForm()
{

 //First name verification
 var x=document.forms["signup"]["fname"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out");
  document.signup.fname.focus(); 
  return false;
  } 
  
  
  var x=document.forms["signup"]["lname"].value;
if (x==null || x=="")
  {
  alert("Last name must be filled out");
  document.signup.lname.focus();  
  return false;
  } 
  

var x=document.forms["signup"]["username"].value;
if (x==null || x=="")
  {
  alert("Username must be filled out");
  document.signup.username.focus();  
  return false;
  } 
  

//Email Verification	
var x=document.forms["signup"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  document.signup.email.focus();
  return false;
  }
  

if(document.signup.confirmemail.value == "")
{
alert('Please input Confirm Email');
document.signup.confirmemail.focus();     
return false;
}   


if(document.signup.email.value != document.signup.confirmemail.value)
{
alert('Confirm Email Not Match');
document.signup.confirmemail.focus();     
return false;
}  

  
//Password and Confirm password Verification 
if(document.signup.password.value == "")
{
alert('Please input Password');
document.signup.password.focus();    
return false;
}  

/*var textBox = document.getElementById("password");
var textLength = textBox.value.length;
if(textLength < 6)
{
    
    alert('Please input Password length more than 6 character');
	document.signup.password.focus();
	return false;
}*/

if(document.signup.confirmpassword.value == "")
{
alert('Please input Confirm Password');
document.signup.confirmpassword.focus();     
return false;
}  
 
if(document.signup.password.value != document.signup.confirmpassword.value)
{
alert('Confirm Password Not Match');
document.signup.confirmpassword.focus();     
return false;
}   

/*  
var x=document.forms["signup"]["gender"].value;
if (x==null || x=="")
  {
  alert("Gender not mentioned");
  document.signup.gender.focus(); 
  return false;
  } */
  
  
   var x=document.forms["signup"]["address"].value;
if (x==null || x=="")
  {
  alert("Address must be filled out");
  document.signup.address.focus(); 
  return false;
  } 
  
  
  var x=document.forms["signup"]["state"].value;
if (x==null || x=="")
  {
  alert("State must be filled out");
  document.signup.state.focus();  
  return false;
  } 
  
 //City verification
 var x=document.forms["signup"]["country"].value;
if (x==null || x=="")
  {
  alert("Country must be filled out");
  document.signup.country.focus();  
  return false;
  } 
  
     	
  //Basic Education verification
 var x=document.forms["signup"]["number"].value;
if (x==null || x=="-1")
  {
  alert("Enter your phone number");
  document.signup.number.focus(); 
  return false;
  } 
 
  
//Experience verification
 var x=document.forms["signup"]["role"].value;
if (x==null || x=="-1")
  {
  alert("Select you Role");
  document.signup.role.focus();  
  return false;
  } 
	  
	  
/*if ( ( form.gender[0].checked == false ) && ( form.gender[1].checked == false ) ) 
{
alert ( "Please choose your Gender: Male or Female" ); 
return false;
}	  */
	  
/*
if (document.jobseeker_registration.check.checked == false)
{ 
alert('Please Agree');
return false;
}*/
}

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
								<li><a href="sell_domains.php">Park Domains</a></li>
								<li><a href="showcase_domains.php">Showcase Domains</a></li>
								<li><a href="solutions.php">Search Domains</a></li>
								<li><a href="support.php">About Us</a></li>
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
					<div class="wrap">
						<article class="col-2">
							<h2>Sign Up</h2>
							<form id="signup" name="signup" action="process_signup.php" method="post" onsubmit="return validateForm();" enctype="multipart/form-data">
								<fieldset>
									
									<div class="field text"><label>First Name</label>
									<input type="text" id="fname" name="fname" class="text" onkeypress="return onKeyPressBlockNumbers(event);"></div>
									
									<div class="field text"><label>Last Name</label>
									<input type="text" id="lname" name="lname" class="text" onkeypress="return onKeyPressBlockNumbers(event);"></div>
									
									<div class="field text"><label>User Name</label>
									<input type="text" id="username" name="username" class="text"></div>
									
									<div class="field text"><label>E-mail Id</label>
									<input type="email" id="email" name="email" class="text"></div>
								
									<div class="field text"><label>Confirm E-mail Id</label>
									<input type="email" id="confirmemail" name="confirm_email" class="text"></div>
									
									<div class="field text"><label>Password</label>
									<input type="password" id="password" name="password" class="text"></div>
									
									<div class="field text"><label>Confirm Password</label>
									<input type="password" id="confirmpassword" name="confirmpassword" class="text"></div>
									
									
									<div class="field text"><label>Gender</label>
									
									
									 <input type="radio" name="gender" value="Male"> &nbsp;&nbsp; Male &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
									 <input type="radio" name="gender" value="Female"> &nbsp;&nbsp;Female</div>
                                    
								 
									
									<div class="field"><label>Address</label>
									<textarea name="address" id="address" class="textarea"></textarea></div><p></p>
							
									
									<div class="field text"><label>State</label>
									<input type="text" id="state" name="state" class="text"></div>
									
									<div class="field text"><label>Country</label>
									<!--<input type="text" id="country" name="country"></div> -->
									
									<select id="country" name="country">
									<option value="" selected="selected">--Select--</option>
								    <option value="Afghanistan">Afghanistan</option>
									<option value="Albania">Albania</option>
									<option value="Algeria">Algeria</option>
									<option value="American Samoa">American Samoa</option>
									<option value="Angola">Angola</option>
									<option value="Argentina">Argentina</option>
									<option value="Armenia">Armenia</option>
									<option value="Australia">Australia</option>
									<option value="Austria">Austria</option>
									<option value="Azerbaijan">Azerbaijan</option>
									<option value="Bahamas">Bahamas</option>
									<option value="Bahrain">Bahrain</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="Barbados">Barbados</option>
									<option value="Belarus">Belarus</option>
									<option value="Belgium">Belgium</option>
									<option value="Botswana">Botswana</option>
									<option value="Brazil">Brazil</option>
									<option value="Cameroon">Cameroon</option>
									<option value="Canada">Canada</option>
									<option value="Chile">Chile</option>
									<option value="China">China</option>
									<option value="Colombia">Colombia</option>
									<option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
									<option value="Cuba">Cuba</option>
									<option value="Czech Republic">Czech Republic</option>
									<option value="Denmark">Denmark</option>
									<option value="Finland">Finland</option>
									<option value="France">France</option>
									<option value="Georgia">Georgia</option>
									<option value="Germany">Germany</option>
									<option value="Ghana">Ghana</option>
									<option value="Greece">Greece</option>
									<option value="Hungary">Hungary</option>
									<option value="Iceland">Iceland</option>
									<option value="India">India</option>
									<option value="Indonesia">Indonesia</option>
									<option value="Iran">Iran</option>
									<option value="Iraq">Iraq</option>
									<option value="Ireland">Ireland</option>
									<option value="Italy">Italy</option>
									<option value="Ivory Coast">Ivory Coast</option>
									<option value="Jamaica">Jamaica</option>
									<option value="Japan">Japan</option>
									<option value="Korea (North)">Korea (North)</option>
									<option value="Korea (South)">Korea (South)</option>
									<option value="Kuwait">Kuwait</option>
									<option value="Malaysia">Malaysia</option>
									<option value="Maldives">Maldives</option>
									<option value="Namibia">Namibia</option>
									<option value="Nepal">Nepal</option>
									<option value="Netherlands">Netherlands</option>
									<option value="Oman">Oman</option>
									<option value="Pakistan">Pakistan</option>
									<option value="Portugal">Portugal</option>
									<option value="Qatar">Qatar</option>
									<option value="Romania">Romania</option>
									<option value="Russia">Russia</option>
									<option value="Saudi Arabia">Saudi Arabia</option>
									<option value="Singapore">Singapore</option>
									<option value="South Africa">South Africa</option>
									<option value="Spain">Spain</option>
									<option value="Sri Lanka">Sri Lanka</option>
									<option value="Sudan">Sudan</option>
									<option value="Swaziland">Swaziland</option>
									<option value="Sweden">Sweden</option>
									<option value="Switzerland">Switzerland</option>
									<option value="Thailand">Thailand</option>
									<option value="USA">USA</option>
									<option value="Uganda">Uganda</option>
									<option value="Ukraine">Ukraine</option>
									<option value="United Arab Emirates">United Arab Emirates</option>
									<option value="United Kingdom (UK)">United Kingdom (UK)</option>
									<option value="Uruguay">Uruguay</option>
									<option value="Vietnam">Vietnam</option>
									<option value="Greenland">Greenland</option>
									<option value="Bhutan">Bhutan</option>
										 </select>  </div>
									
									<div class="field text"><label>Telephone Number</label>
									<input type="text" id="number" name="number" class="text" onkeypress="return onlyNumbers(event);" maxlength="15"></div>
									
									<div class="field text"><label>Role</label>
									<select id="role" name="role">
									  <option value="" selected="selected">--Select--</option>
                                      <option value="Buyer">Buyer</option>
                                      <option value="Seller">Seller</option>
									</select> </div>
									
									<div id="button" style="float:right;">
									<!--<a href="#" class="link4" onClick="document.getElementById('contacts-form').reset()"><span><span>Clear</span></span></a><a href="#" class="link2" onClick="document.getElementById('contacts-form').submit()"><span><span>Send</span></span></a> -->
									<input type="submit" name="submit" id="submit" style="width:100px; ">
									
									</div>
									
								</fieldset>
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