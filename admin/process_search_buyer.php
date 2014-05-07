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
					<li><a href="admin_home.php">Domain Management</a></li>
					<li class="home"><a href="buyer_management.php">Buyer Management</a></li>
					<li><a href="seller_management.php">Seller Management</a></li>
					<li><a href="logout.php" title="">Logout</a></li>
				</ul>
			</nav>
		</header>
	</div><!-- end header wrap -->
	
	<div id="container">
	
	<div id="option">
	
	<table width="100%" cellpadding="5" cellspacing="0" bordercolor="#ccc" style="text-align:center; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:14px;" border="1">
       <tr>
         <td width="25%" align="center" bgcolor="#F7F7F7" style="border-right:none; border-bottom:none;"><p>Buyer Name</p></td>
         <td width="20%" align="center" bgcolor="#F7F7F7" style="border-right:none; border-bottom:none;"><p>Email Id</p></td>
         <td width="20%" align="center" bgcolor="#F7F7F7" style=" border-bottom:none;"><p>Contact No.</p></td>
		 <td width="20%" align="center" bgcolor="#F7F7F7" style="border-right:none; border-bottom:none;"><p>Validity</p></td>
		 <td width="15%" align="center" bgcolor="#F7F7F7" style=" border-bottom:none;"><p>Delete</p></td>
       </tr>
	
	
	<?php

	$input=$_POST['search'];
	

	$conn=mysql_connect("localhost","root","root")or die("can not connect");
	mysql_select_db("domainpool",$conn) or die("can not select database");
	
	if(isset($input))
	{	
		
	    $query="select * from user where user_email = '".$input."'";
        $result = mysql_query($query,$conn)or die("wrong query");
		
        while(($row  = mysql_fetch_array($result))) 
           {
	         
			  echo '<tr><td><span style="font-size:20px">'.$row['user_fname'].'.'.$row['user_lname'].'</span></td>';
			 echo '<td><span style="font-size:20px; float:left;">'.$row['user_email'].'</span> </td>';
			 echo '<td><span style="font-size:20px; float:left;">'.$row['user_mobilenumber'].'</span> </td>';
			 
			 echo '<td>
			  <form name="update" id="update" method="post" action="process_update_buyer.php">
			  <input type="date" name="app_date" id="app_date" value="' . date('Y-m-d') . '" min="' . date('Y-m-d') . '"/>
			  <input type="hidden" name="id" id="id" value='.$row['user_email'].'>
			  <input type="submit" name="submit" value="Update" id="submit">
			  </form></td>';
			 
			 echo '<td><a href="process_delete_buyer.php?email='.$row['user_email'].'">
			 <input type="button" name="delete" id="delete" value="Remove">
			 </a></td></tr/>';
			 
		   }
	}
	
	?>
	
	</table>
	
	
	</div>
		
</div> <!--! end container -->
	
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p> &nbsp;  </p>
<p> &nbsp;  </p>
<p> &nbsp;  </p>
<p> &nbsp;  </p>
<p> &nbsp;  </p>



	
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