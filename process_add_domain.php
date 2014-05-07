<?php session_start();

if(empty($_POST)){exit;}
$user_id=$_SESSION['user_id'];
echo $_SESSION['user_name'];

$domain_name=$_POST['domain_name'];
$domain_extension=$_POST['domain_extension'];
$price=$_POST['domain_price'];

$conn=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("domainpool",$conn) or die("can not select database");

$query = "insert into sell_domain (domain_user_id,domain_name,domain_extension,domain_price) values
('{$user_id}','{$domain_name}','{$domain_extension}','{$price}');";
		
				$result = mysql_query($query,$conn); 		
				if (!$result) { 
					echo "Problem with query " . $query . "<br/>"; 
					exit(); 
				} 
				else{
					echo "Domain Added. <br/>";
					header("location:sell_domains.php");					
					}
mysql_close($conn);
?>