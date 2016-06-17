<?php 


$con =mysqli_connect('localhost','root','pjw28sr@','test');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$select = "SELECT * FROM users WHERE email = '$email'";
$run = mysqli_query($con,$select);

$check = mysqli_num_rows($run);

if ($check === 1) {
	echo "<h2>This is email is already registerd! </h2>";
	exit();
}else{
	$insert = "INSERT into users (name,email,password) VALUES ('$name','$email','$password')";
	$run_insert = mysqli_query($con,$insert);

	if($run_insert){
		echo "<h2>Registration successfull</h2>";
	}
}

 ?>