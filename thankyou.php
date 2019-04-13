<?php
include('functions.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Merlin Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">


				<a href="#" class="navbar-brand">Merlin Store</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home">&nbsp;</span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window">&nbsp;</span>Product</a></li>
			</ul>
		</div>
	</div>
	</div>

	<div class="container-fluid">
		<div class="row bg1">
      <?php thankyou(); ?>
			<center><img src="product_images/thankyou.jpg" alt="New Arrivals" style="width:100%;height :98vh;background-size: contain;"></center>

		</div>
</div>
</body>
</html>
