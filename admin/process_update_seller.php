<?php session_start();


$input=$_POST['id'];

$new=$_POST['app_date'];

//echo $input;
//echo $new;

$conn=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("domainpool",$conn) or die("can not select database");

$query="select * from user where user_email = '".$input."'";
$result = mysql_query($query,$conn)or die("wrong query");

if($result)
{

$query1="update user set user_validity='$new' where user_email='$input'";
$result1=  mysql_query($query1,$conn);

header("location:seller_management.php");

}


?>