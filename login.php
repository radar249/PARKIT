<?php include("db.php"); 
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="sl.css">
<body>
<div  >
	
	<div >
		<div >
			<form  action="park.php" method="GET"> 
				<h1>Log in</h1> 
				<p> 
					 Your email 
					<input  name="username" required type="text" placeholder="mymail@mail.com"/>
				</p>
				<p> 
					 Your password 
					<input  name="password" required type="password" placeholder="eg.X8df!90EO" /> 
				</p>
				<p > 
					<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
					Keep me logged in
				</p>
				<p > 
					<button type="submit" name="login"> Login</button>
				</p>
				<p >
					Not a member yet ?
					<a href="signup.php">Join us</a>
				</p>
			</form>
		</div>
</body>
</html>