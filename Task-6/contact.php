<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_internship";

$conn = mysqli_connect($host,$username,$password,$dbname);
if($_POST){


$name = $_POST['st_name'];
$gender = $_POST['st_gender'];
$dob = $_POST['st_dob'];
$email = $_POST['st_email'];
$mobile = $_POST['st_mobile'];
$pincode = $_POST['st_pincode'];
$address = $_POST['st_address'];
$password = $_POST['st_password'];
$area = $_POST['st_area'];
$bloodgroup = $_POST['st_bloodgroup'];

$q = mysqli_query($conn,
    "insert into tbl_student(st_name,st_gender,st_dob,st_email,st_mobile,st_pincode,st_address,st_password,st_area,st_bloodgroup) 
	values('$name','$gender','$dob','$email','$mobile','$pincode','$address','$password','$area','{$bloodgroup}')") or die("Error". mysqli_error($conn));

if($q){
	echo " <script>alert('Record Inserted');</script> "; 
}
}

?>




<!DOCTYPE HTML>
<html>

	<head>
		<title>Trupti's Personal Site</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--5grid--><script src="css/5grid/viewport.js"></script><!--[if lt IE 9]><script src="css/5grid/ie.js"></script><![endif]--><link rel="stylesheet" href="css/5grid/responsive.css" /><!--/5grid-->
		<link rel="stylesheet" href="css/style.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
</head>
	<body class="subpage">

		<!-- Header -->
		<?php
	      include'header.php';
	  ?>

		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="5grid">
						<div class="9u-first">

							<!-- Main Content -->
								<section>
									<header>
										<h2>You can contact me from here!</h2>
										<h3>Hey there!</h3>
									</header>
									<p>
										Myself Trupti Karamchanadani. You can contact me by writing your email in the form
										section which is displayed own there. We will contact you through this mail only.
										So, please check properly whether you have written your proper mail into this textbox or not.
									</p>
									<form method="POST" >
									    Name: <input type="text" name="st_name" id="" required/> <br><br>
										Gender: <input type="radio" name="st_gender" value="male">
												<label for="male">Male</label>
												<input type="radio"  name="st_gender" value="female">
												<label for="female">Female</label> <br><br>
										DOB: <input type="date" name="st_dob" id=""required/> <br><br>
										Email: <input type="email" name="st_email" id="" required/> <br><br>
										Mobile: <input type="number" name="st_mobile" id="" required/> <br><br>
										Pincode: <input type="number" name="st_pincode" id="" required/> <br><br>
										Address: <input type="textarea" name="st_address" row="3" required/> <br><br>
										Password: <input type="password" name="st_password" id="" required/> <br><br>
										Area: <input type="text" name="st_area" id="" required/> <br><br>
										Bloodgroup: <input type="text" name="st_bloodgroup" id="" required/> <br><br>
										<input type="submit">
									</form>
								</section>

						</div>
						<div class="3u">

							<!-- Sidebar -->
								<section>
									<header>
										<h2> <marquee behavior="" direction="right">More news</marquee></h2>
									</header>
									<ul class="link-list">
										<li><a href="#"><marquee>Trendy Technologies in WEB</marquee></a></li>
										<li><a href="#"><marquee>Trendy Technologies in APP</marquee></a></li>
										<li><a href="#"><marquee>Learn more about Data Scientsist</marquee></a></li>

									</ul>
								</section>


						</div>
					</div>
				</div>
			</div>

		<!-- Footer -->

    <?php
		require 'footer.php'
		?>
	</body>
</html>
