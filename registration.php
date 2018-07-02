
<html>
<head>
  <title>Registration</title>
  	<script type="text/javascript" src="JS/registration.js"></script>
    <link rel="stylesheet" href="CSS/reg.css">

</head>
  <body>
  <div class="foot">
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
				<h1>Registration</h1>
			</div>

			<div class="login-form">
				<form method="post" action="registration.php" onsubmit="return validation()">
			<div class="control-group">
			<input type="text" class="login-field" placeholder="Donor Name"  name="dname" id="dname" onblur="userfirst()">				
			</div>
			<div id="mfname">
				
			</div>
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Department" id="dept" name="dept" onblur="lastcheck()">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div id="mlname"></div>

				<div class="control-group" >
					<p></p>
					<select id="select" name="sex">
  						<option value="">Sex</option>
 						<option value="Male">Male</option>
 						<option value="Female">Female</option>
  						<option value="Others">Others</option>		
					</select>
					
				</div>

				<div class="control-group" >
					<p></p>
					<select id="select" name="select">
  						<option value="">Blood Group</option>
 						<option value="A+">A+</option>
 						<option value="A-">A-</option>
  						<option value="B+">B+</option>
  						<option value="B-">B-</option>
 						<option value="AB+">AB+</option>
  						<option value="AB-">AB-</option>
  						<option value="O+">O+</option>
 						<option value="O-">O-</option>
					</select>
				</div>
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Contact Number" id="phone" name="phone" onblur="userPhone()">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div id="mphone"></div>

				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Address" id="address" name="address" onblur="useraddress()">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div id="maddress"></div>

				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="E-mail " id="email" name="email" onblur="usercheck()">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div id="muname"></div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="password" id="pass" name="pass" onblur="userpass()">
				</div>
				<div id="mpass"></div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="Retype Password" id="rpass" name="rpass" onblur="rPassword()">
				</div>
				<div id="mRpass"></div>


				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<input class="btn btn-primary btn-large btn-block" type="submit" name="submit" value="Register">
				</form>		
			</div>
		</div>
		<div align="center">
		<h3>BSMRSTU Online Blood Bank</h3>
		<p>&copybsmrstubloodbank.com </p>
		</div>
		</div>
</body>
</html>
<?php
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		//SESSION_start();
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db = "bloodbank";
		$tb1 = "infotable";
		$con = mysqli_connect($host, $user, $pass, $db);
		if(!$con)
		{
			die("Sorry database can not connect...");
		}
        $donorname=$_POST['dname'];
		$department=$_POST['dept'];
		$sex=$_POST['sex'];
		$bgroup=$_POST['select'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$password=md5($_POST['pass']);
		//existing account checking...
		$id_check_sql = "SELECT *
						FROM '$tb1'
						WHERE $email = '$email'
						LIMIT 1";
		/*$result_id = mysqli_query($con, $id_check_sql);
		if(mysqli_num_rows($result_id) > 0)
		{
			die("Sorry! You have already an account...");
		}*/
		
		if ($reg = mysqli_query($con, $id_check_sql)) {
			if ($index = mysqli_fetch_row($reg)) {
				if ($index>0) {
					echo "<script>alert('Sorry! You have already an account...')</script>";
				}
			}
		}

		$query = "INSERT INTO $tb1 (donorname, department,sex, bgroup, phone,address, email,password) 
				  VALUES ('$donorname', '$department', '$sex', '$bgroup', '$phone','$address', '$email','$password')";
				  
		$result1 = mysqli_query($con, $query);
	
		if($result1)
		{
			//$_SESSION["labTest_logged_in"] = 1;
			//header("Location: ".BASEURL."view_profile.php?idNumber=".$idNumber);
		    echo "<script>alert('You have successfully Registered...!!')</script>";
		}
		else
		{
			echo "<script>alert('Sorry! You have already an account...')</script>";
		}
	}
?>
