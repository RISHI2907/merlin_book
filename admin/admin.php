<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Merlin Store</title>
		<link rel="stylesheet" href="../css/bootstrap.min.css"/>
		<script src="../js/jquery2.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
<body>
<!--<div class="wait overlay">
	<div class="loader"></div>
</div>-->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Merlin Store</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="../index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="../sell/index.php"><span class="glyphicon glyphicon-modal-window"></span>Sell</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>

			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading"><center>Admin Login Form</center></div>
					<div class="panel-body">
						<!--User Login Form-->
						<form action="adminlogin.php" id="login" method="post">
							<label for="user">Username</label>
							<input type="text" class="form-control" name="username" id="username" required/>
							<label for="email">Password</label>
							<input type="password" class="form-control" name="password" id="password" required/>
							<p><br/></p>
							<input type="submit" class="btn btn-success" style="float:right;" Value="Login">
							<!--If user dont have an account then he/she will click on create account button-->

						</form>
				</div>
				<div class="panel-footer"><div id="e_msg"></div></div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>
