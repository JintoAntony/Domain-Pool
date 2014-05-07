<?php 
if((!isset($_SESSION['user']) ) )
    {  
	echo '
	<form action="process_login.php" method="post" id="login-form" >
	<fieldset>
	<span class="text">
	<input type="text" placeholder="Username" name="username" id="username" class="text">
	</span>			
	<span class="text">
	<input type="password" placeholder="Password" name="password" id="password" class="text">
	</span> 
	<input type="submit" name="submit" id="submit" class="button">
	<br/> <br/> <span class="links"><a href="#">Forgot Password?</a><br/><a href="signup.php">Register</a></span>
	</fieldset>
	</form>';	
	}

if(isset($_SESSION['user']))
{
//code for taking employer ID form the session variable and database
//DEFINE('DATABASE_USER', 'root');
//DEFINE('DATABASE_PASSWORD','root');
//DEFINE('DATABASE_HOST', 'localhost');
//DEFINE('DATABASE_NAME', 'domainpool');
$dbc = @mysqli_connect('localhost','root','root','domainpool');
if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error()); }

$id=$_SESSION['user_id'];
$query = "select user_fname from user where user_id=$id ";     
$result = mysqli_query($dbc,$query);
if($result)
{    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		  {		  $name=$row['user_fname'];
		  }
}
   echo '
		
    <!--<li><a href="#"> Welcome '.$name.' </a> -->
        <li> <a href="logout.php">Logout</a></li>
		
	';	
//mysql_close($dbc);
	}
?>


























			
						
			
			

