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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Without theme</title>
</head>
<body>
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
</body>
</html>