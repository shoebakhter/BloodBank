<!DOCTYPE html>
<html>
<head>
	<title>Search Donar</title>
	<link rel="stylesheet" type="text/css" href="CSS/searchDonar.css">
	<link rel="stylesheet" type="text/css" href="CSS/request.css">
	<link rel="stylesheet" type="text/css" href="CSS/table.css">
    <link rel="stylesheet" type="text/css" href="CSS/start.css">
    <link rel="stylesheet" type="text/css" href="start.css">
</head>
<body>
	
		
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
						<li><a href=".php" style="color:blue">About Us</a></li>
					    </ul>
					</div>

				</div>
			</div>	
		</div>
		<form method="post" action="searchDonar.php">
		<div class="search">
			
			<div class="donar">
				<div class="title"><h2 align="center">Search By Blood Group</h></div>
				<div class="task">
					<div align="center">
					<br><br>
					<select  id="select" name="sex">
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
					<br>
					<input class="btn btn-primary btn-large btn-block" type="submit" name="submit1" value="Search">
					
				</div>
			</div>
			</form>
		</div>
	<div class="result">
			<div class="title"><h1 align="center">Results:</h1></div>
			<div class="all" align="center">
				<table cellspacing='0' align="center"> 
					<tr><th>Donor name</th><th>Department</th><th>Sex</th><th>Blood Group</th><th>Contact Number</th><th>Address</th><th>E-mail</th></tr>
    				<?php
    		
						if($_SERVER["REQUEST_METHOD"] == "POST")
						{
								//SESSION_start();
								$host = "localhost";
								$user = "root";
								$pass = "";
								$db = "bloodbank";
								$tb1 = "infotable";
								//donorname, department,sex, bgroup, phone,address, email,password
								
								$con = mysqli_connect($host, $user, $pass, $db);
								if(!$con)
								{
									die("Sorry database can not connect...");
								}
								$msg=$_POST['sex'];
								$query=mysqli_query($con, "SELECT * from $tb1 WHERE bgroup='$msg'");
								$result = $query;
								while($final = mysqli_fetch_array($result)){
									echo "<tr>";
									echo "<td>".$final['donorname']."</td>";
									echo "<td>".$final['department']."</td>";
									echo "<td>".$final['sex']."</td>";
									echo "<td>".$final['bgroup']."</td>";
									echo "<td>".$final['phone']."</td>";
									echo "<td>".$final['address']."</td>";
									echo "<td>".$final['email']."</td>";
								echo "</tr>";
    						}
						}
    					
    				?>		
					</table>
			</div>	
		</div>
		<div class="foetr"></div>

	

</body>
</html>