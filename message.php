<!DOCTYPE html>
<html>
<head>
	<title>Search Donar</title>
	<link rel="stylesheet" type="text/css" href="CSS/searchDonar.css">
	<link rel="stylesheet" type="text/css" href="CSS/table.css">
	<link rel="stylesheet" href="CSS/reg.css">
</head>
<body align="center">
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
						<li><a href="message.php" style="color:blue">View Message</a>
						</li>
						<li><a href="index.php" style="color:blue">Log Out</a></li>
					
					    </ul>
					</div>

				</div>
			</div>	
		</div>
		<div class="result">
			<div class="title"><h1 align="center">Results:</h1></div>
			<div class="all" align="center">
				<table cellspacing='0' align="center"> 
					<tr><th>User name</th><th>E-Mail</th><th>Contact Number</th><th>Message</th></tr>
    				<?php
    		
						//if($_SERVER["REQUEST_METHOD"] == "POST")
						
								//SESSION_start();
								$host = "localhost";
								$user = "root";
								$pass = "";
								$db = "bloodbank";
								$tb1 = "message";
								//donorname, department,sex, bgroup, phone,address, email,password
								
								$con = mysqli_connect($host, $user, $pass, $db);
								if(!$con)
								{
									die("Sorry database can not connect...");
								}
								$query=mysqli_query($con, "SELECT * from $tb1");
								$result = $query;
								while($final = mysqli_fetch_array($result)){
									echo "<tr>";
									echo "<td>".$final['name']."</td>";
									echo "<td>".$final['email']."</td>";
									echo "<td>".$final['phone']."</td>";
									echo "<td>".$final['msg']."</td>";
								echo "</tr>";
    						}
    					
    				?>		
					</table>
			</div>	
		</div>
		<div class="foetr"></div>
</body>
</html>