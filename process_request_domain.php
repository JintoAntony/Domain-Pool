<?php session_start();

$domain_id=$_GET['domain_id'];
$user_id=$_GET['user_id'];


$conn=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("domainpool",$conn) or die("can not select database");

$query = "insert into request_domain (request_domain_id,request_user_id) values
('{$domain_id}','{$user_id}');";
		
				$result = mysql_query($query,$conn); 		
				if (!$result) { 
					echo "Problem with query " . $query . "<br/>"; 
					exit(); 
				} 
				else{
					echo "Domain Added. <br/>";
					
$to = "jinto1729@gmail.com";
$subject  = 'You confirmation link here';			 
$message="Your Comfirmation link \r\n";
$message.="Click on this link to activate your account \r\n";
$message.="http://jobscastle.com/confirmation.php";
$headers  = 'From: sender@gmail.com' . "\r\n" .
            'Reply-To: sender@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();	
			
if($sentmail=mail($to, $subject, $message, $headers) )
    {echo "Email has been sent to your Email ID...<br>";}
else 
{echo "Sorry,Email sending failed.Please try again.<br>"; } 
   					
					
					


  
								
					//header("location:buy_domains.php");													
					}
mysql_close($conn);
?>