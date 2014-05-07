<?php

if(empty($_POST)){exit;}	
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$address=$_POST['address'];		
$state=$_POST['state'];		
$country=$_POST['country'];		
$number=$_POST['number'];		
$role=$_POST['role'];		
$validity = strtotime("+10 day");
$date= date("y-m-d");

$conn=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("domainpool",$conn) or die("can not select database");

$query = "insert into user (user_fname,user_lname,user_username,user_email,user_password,user_gender,user_address,
user_state,user_country,user_mobilenumber,user_role,user_validity) values
('{$fname}','{$lname}','{$username}','{$email}','{$password}','{$gender}','{$address}','{$state}','{$country}',
'{$number}','{$role}','{$date}');";
		
				$result = mysql_query($query,$conn); 		
				if (!$result) { 
					echo "Problem with query " . $query . "<br/>"; 
					exit(); 
				} 
				else{
					echo "Sign up completed.Please login . Thank you. <br/>";
					}
mysql_close($conn);
?>