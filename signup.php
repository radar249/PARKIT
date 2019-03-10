<?php 
include("db.php"); 
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="sl.css">
</head>
<body>
<div>
	<div >
		<div >
			<form  action="park.php" method="GET" >
				<h1> Sign up </h1> 
				<p> 
				        Your Name
					<input  name="fname" autofocus required  type="text" placeholder="Raj" value=""/> 
				</p>
				<p> 
				        Your email
					<input  name="mail" required type="email" placeholder="signup@mail.com" value=""/> 
				</p>
				<p> 
					Your password 
					<input  name="pass" required type="password" placeholder="eg. X8df!90EO" value=""/>
				</p>
				<p> 
					<button  type="submit"  name="signup" >Sign up </button>
				</p>
				<p>  
					Already a member ?
					<a href="login.php" > Go and log in </a>
				</p>
			</form>

			<?php 
			   $name=isset($_GET['fname']);
			   $mailid=isset($_GET['mail']);
			   $pass=isset($_GET['pass']);

			   $query = "INSERT INTO mail VALUES ('$name','$mailid','$pass')";
			   $data= mysqli_query($conn,$query);

			   if($data)
			   {

			   	echo "connec";
			   }

                

			?>
		</div>
</div>
</div>
</body>
</html>