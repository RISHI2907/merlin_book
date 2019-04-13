<?php
if($_POST['username']=='admin' && $_POST['password']=='admin')
{
  echo '<!DOCTYPE html>
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
  				<li><a href="../index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Home</a></li>
  				<li><a href="../sell/index.php"><span class="glyphicon glyphicon-modal-window"></span>&nbsp;&nbsp;Sell</a></li>
  			</ul>
  		</div>
  	</div>
  	<p><br/></p>
  	<p><br/></p>
  	<p><br/></p>
  	<div class="container-fluid">
      <div class="row">
            <div class="col-md-4"></div>
      <div class="col-md-4">
        <form action="ordersplaced.php" method="post">
         <button type="submit" class="btn btn-primary btn-lg" style="width:100%">Orders Placed</button>
        </form>
    </div>


        <div class="col-md-4"></div>


      </div>
      </div>
      </div>
      ';


}
else {
  echo "INVALID ADMIN";
}
