<!DOCTYPE html>
<html>
<head>
  <title>LogIn</title>
  <script type="text/javascript" src="JS/log.js"></script>
    <link rel="stylesheet" href="CSS/log.css">
</head>
  <body>
  <div class="footer">
	<div class="header">
			<div class="logo"></div>
			<div class="banner">
				<div class="pic">
					<h1 align="cente"><b>BSMRSTU</b></h1>
					<h2 align="cente">Online Blood Bank</h2>
				</div>
				<div class="menu">
					<div class="div1">
						<ul id="navmenu">
						<li><a href="index.php"  style="color:blue">Home</a></li>
						<li><a href="searchDonar.php" style="color:blue">Search Blood</a>
						</li>
						<li><a href="registration.php" style="color:blue">Register</a></li>
						<li><a href="#" style="color:blue">Log in</a>
						    <ul class="sub1">
							<li><a href="userlogin.php" style="color:blue">User</a></li>
							<li><a href="adminlogin.php" style="color:blue">Admin</a></li>
						    </ul>
						</li>
						<li><a href="contactus.php" style="color:blue">Contact Us</a></li>
						<li><a href="aboutus.php" style="color:blue">About Us</a></li>
					    </ul>
					</div>

				</div>
			</div>	
		</div>

	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Admin Login</h1>
			</div>

			<div class="login-form">
				<form method="post" action="" onsubmit="return validation()">
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="username" id="name" name="name" onblur="username()" required>
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div id="mname"></div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="password" id="pass" name="pass" onblur="userpass()" required>
				
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<div id="mpass"></div>
				<input class="btn btn-primary btn-large btn-block" type="submit" name="submit" value="Login">
				</form>
			</div>
		</div>
	</div>
	</div>
		<div class="foetr">
		<div align="center">
		<h3>BSMRSTU Online Blood Bank</h3>
		<p>&copybsmrstubloodbank.com </p>
		</div>
		</div>
</body>
<?php
	//SESSION_start();
	
	define("BASEURL", "http://localhost/labTest/");
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db = "bloodbank";
		$tb1 = "admin";
		$tb2 = "profilepic";
		
		$con = mysqli_connect($host, $user, $pass, $db);
		if(!$con)
		{
			die("Sorry database can not connect...");
		}
		
		$name = $_POST["name"];
		$pass = $_POST["pass"];
		
		$id_check_sql = "SELECT *
					FROM $tb1
					WHERE name = '$name' AND pass = '$pass'
					LIMIT 1";
		$result_id = mysqli_query($con, $id_check_sql);
		if(mysqli_num_rows($result_id))
		{
			//$_SESSION["labTest_logged_in"] = 1;
			//header("Location: ".BASEURL."message.php");
			  header('Location: adminindex.php'); 
			  //require_once 'message.php';
			  //echo "shjhg";
		}
		else
		{
			echo "<script>alert('Your ID number or password is incorrect...');</script>";
		}
	}
?>
</html>