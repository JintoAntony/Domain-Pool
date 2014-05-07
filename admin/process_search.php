<?php session_start();
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Online Appointment System</title>
  <link rel="stylesheet" href="css/style_admin.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  <script src="js/slides.min.jquery.js"></script>
  
</head>

<body>
	<div id="header-wrap">
		<header class="group">
			<h2><a href="" style="background: url(images/logos.png) no-repeat" title="Online Appointment System">Domain Pool</a>
			<div id="call" >
				
				<span style="position: relative;color:#49A56A;font-weight: 700;font-style: normal;font-size: 48px;
			padding: 0px 0px 5px 10px;text-shadow: 0px 1px 1px rgba(255,255,255,0.8);">Domain Pool</span>
				
			</div><!-- end call --></h2>
			<nav class="group">
				<ul>
					<li class="home"><a href="admin_home.php">Domain Management</a></li>
					<li><a href="buyer_management.php">Buyer Management</a></li>
					<li><a href="seller_management.php">Seller Management</a></li>
					<li><a href="logout.php" title="">Logout</a></li>
				</ul>
			</nav>
		</header>
	</div><!-- end header wrap -->
	
	<div id="container">
	
	<div id="option">
	
	<table width="90%" cellpadding="5" cellspacing="0" bordercolor="#ccc" style="text-align:center; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:14px;" border="1">
       <tr>
         <td width="15%" align="center" bgcolor="#F7F7F7" style="border-right:none; border-bottom:none;"><p>Sl No</p></td>
         <td width="30%" align="center" bgcolor="#F7F7F7" style="border-right:none; border-bottom:none;"><p>Domain Name</p></td>
    <!-- <td width="30%" align="center" bgcolor="#F7F7F7" style=" border-bottom:none;"><p>Validity</p></td> -->
		 <td width="15%" align="center" bgcolor="#F7F7F7" style=" border-bottom:none;"><p>Delete</p></td>
       </tr>
		
	<?php
	$domain_name=$_POST['domain_name'];
	$domain_extension=$_POST['domain_extension'];
	$conn=mysql_connect("localhost","root","root")or die("can not connect");
	mysql_select_db("domainpool",$conn) or die("can not select database");
	    $query="select * from sell_domain where domain_name = '".$domain_name."' and domain_extension = '".$domain_extension."'     ";
        $result = mysql_query($query,$conn)or die("wrong query");
		$i = 1;
        while(($row  = mysql_fetch_array($result))) 
           {
	         echo '<tr><td><span style="font-size:20px">'.$i++.')</span></td>';
			 echo '<td><span style="font-size:16px; ">'.$row['domain_name'].''.$row['domain_extension'].'   </span> </td>';
			 echo '<td>
				   <a href="process_delete_domain.php?domain_id='.$row['domain_id'].'" style="text-decoration:none; color:blue; border:none;">
				   <u>Delete</u>
				   </a>					
				   </td>
				   </tr/>';
		  }
?>	
	</table>	
	</div>		
</div> <!--! end container -->	
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>	
<footer class="group">
		<div id="footer-left">
			<p>Copyright <a href="#" class="green">spiderguts</a> </br>
			Designed by <a href="#" class="green">spiderguts</a></p>
		</div>			
		<div id="footer-right">
			<ul>
				<li><a href="#">option1</a></li>
				<li><a href="#">option2</a></li>
				<li><a href="#">option3</a></li>
				<li><a href="#">option4</a></li>
				<li><a href="#">option5</a></li>
			</ul>
		</div>
				
		
	</footer>
	
	
<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				generateNextPrev: true,	
			});
		});
</script>

</body>
</html>