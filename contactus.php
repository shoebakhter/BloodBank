<!DOCTYPE html>
<html
<head>
  <title>LogIn</title>
  	<script type="text/javascript" src="JS/log.js"></script>
    <link rel="stylesheet" href="CSS/log.css">
	<script type="text/javascript">
			function message(form){
				if(form.fname.value==""){
				alert("Error!!Enter Your Full Name...!");
				form.fname.focus();
				return false;
			}
		
				else if(form.email.value==""){
				alert("Error!!Enter Your E-Mail Adress");
				form.email.focus();
				return false;
			}
			else if(form.msg.value==""){
				alert("Error!!Write Your message:");
				form.msg.focus();
				return false;
			}
			                     }
		</script>
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
				<h1>Contact Us</h1>
			</div>

			<div class="login-form">
				<form method="post" action="index.php" onsubmit="return message(this)">
				<div class="control-group">
				<input type='text' placeholder="Your Full Name "name='name' id='name' onblur="uname()" required/><br/>
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div id="mname"></div>

				<div class="control-group">
				 <input type='email' placeholder="Your E-Mail" name='email' id='email'   onblur="uemail()" required/><br/>
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<div id="mpass"></div>
				<div class="control-group">
				<input type='text' placeholder="Phone Number"name='phone' id='phone' onblur="uphone()" required/><br/>
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<div id="mpass"></div>
				<div class="control-group">
				<input
                  rows="10" cols="50" placeholder="Message Here"name='message' id='message' onblur="umessage()">

				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<div id="mpass"></div>
				<input class="btn btn-primary btn-large btn-block" type="submit" name="submit" value="Submit"required>
				</form>
				
			</div>
		</div>
	</div>
	</div>
		<div class="foetr">
		<div align="center">
		<h3>BSMRSTU Online Blood Bank</h3>
		<p>&copybsmrstubloodbank.com</p>
		</div>
		</div>
</body>
<?php
	if($_SERVER["REQUEST_METHOD"] == "POST")
	    //define("BASEURL", "http://localhost/Online-Blood-Bank-master/");
	{
		//SESSION_start();
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db = "bloodbank";
		$tb1 = "message";
		$con = mysqli_connect($host, $user, $pass, $db);
		if(!$con)
		{
			die("Sorry database can not connect...");
		}
        $name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['message'];

		$query = "INSERT INTO $tb1 ( name, email , phone , msg ) 
				  VALUES ('$name', '$email', '$phone', '$msg')";
				  
		$result1 = mysqli_query($con, $query);
	
		if($result1)
		{
			//$_SESSION["labTest_logged_in"] = 1;
			//header("Location: ".BASEURL."view_profile.php?idNumber=".$idNumber);
		  header('Location: adminindex.php');

		}
		
	}
?>
</div>
</html>