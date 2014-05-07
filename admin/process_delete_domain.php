<?php session_start();
$domain_id=$_GET['domain_id'];


DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD','root');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'domainpool');

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);
if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error()); }

$query = "DELETE FROM sell_domain WHERE domain_id='$domain_id'";
$result = mysqli_query($dbc,$query);

if($result)
{ 

$query2 = "DELETE FROM request_domain WHERE request_domain_id='$domain_id'";
$result2 = mysqli_query($dbc,$query2);
if($result2)
{
header("location:admin_home.php");
}
}
else
{ echo "Cannot delete this Domain"; }
 
?>
