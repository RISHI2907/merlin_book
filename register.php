<?php
session_start(); ?>
<head>
	<meta charset="UTF-8">
	<title>Merlin Store</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="footer/style.css" rel="stylesheet" type="text/css" media="all" />

	<!--<script src="main.js"></script>-->
	<link rel="stylesheet" type="text/css" href="style.css">
	<style></style>
</head>
<?php

include "db.php";
if (isset($_POST["f_name"])) {

	$f_name = $_POST["f_name"];
	$l_name = $_POST["l_name"];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$mobile = $_POST['mobile'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$name = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";

if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) ||
	empty($mobile) || empty($address1) || empty($address2)){

    $message=1;
    header("Location:customer_registration.php?crmessage=$message");

		exit();
	} else {
		if(!preg_match($name,$f_name)){
			$message=2;
	    header("Location:customer_registration.php?crmessage=$message&value=$f_name");

		exit();
	}
	if(!preg_match($name,$l_name)){
		$message=3;
		header("Location:customer_registration.php?crmessage=$message&value=$l_name");

		exit();
	}
	if(!preg_match($emailValidation,$email)){
		$message=4;
		header("Location:customer_registration.php?crmessage=$message&value=$email");

		exit();
	}
	if(strlen($password) < 9 ){
		$message=5;
		$dis="Password is weak";
		header("Location:customer_registration.php?crmessage=$message&value=$dis");
		exit();
	}
	if(strlen($repassword) < 9 ){
		$message=6;
		$dis="Password is weak";
		header("Location:customer_registration.php?crmessage=$message&value=$dis");
		exit();
	}
	if($password != $repassword){
		$message=7;
		$dis="Password is not same";
		header("Location:customer_registration.php?crmessage=$message&value=$dis");
		exit();
	}
	if(!preg_match($number,$mobile)){
		$message=8;
		header("Location:customer_registration.php?crmessage=$message&value=$mobile");
		exit();
	}
	if(!(strlen($mobile) == 10)){
		$message=9;
		$dis="Mobile no must be of 10 digit";
		header("Location:customer_registration.php?crmessage=$message&value=$dis");
		exit();
	}
	//existing email address in our database
	$sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email Address is already available Try Another email address</b>
			</div>
		";
		exit();
	} else {
		$password = md5($password);
		$_SESSION["uid"] = mysqli_insert_id($con);
		$sql = "INSERT INTO `user_info`
		(`user_id`, `first_name`, `last_name`, `email`,
		`password`, `mobile`, `address1`, `address2`)
		VALUES ('$_SESSION[uid]', '$f_name', '$l_name', '$email',
		'$password', '$mobile', '$address1', '$address2')";
		$run_query = mysqli_query($con,$sql);
		$_SESSION["name"] = $f_name;
		$ip_add = getenv("REMOTE_ADDR");
		$sql2 = "SELECT MAX(user_id) AS u_id FROM user_info ";
		$run_query2 = mysqli_query($con,$sql2);
		$row2 = mysqli_fetch_array($run_query2);
		$new=$row2['u_id']+1;
		$sql1 = "UPDATE user_info SET user_id='$new' WHERE email='$email'";
		$run_query1 = mysqli_query($con,$sql1);
		//$row = mysqli_fetch_array($run_query1);
		$_SESSION['uid']=$new;
		header("Location:profile.php");	
			exit();
		}

	}

}



?>
