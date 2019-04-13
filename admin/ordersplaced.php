<?php

?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Merlin Store</title>
		<link rel="stylesheet" href="../css/bootstrap.min.css"/>
		<script src="../js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../style.css"/>
	</head>
	<style>
	.footer {
 		width: 100%;
	 text-align: center;
   background-color: #151515;
   color: white;
   position:fixed;
   bottom: 0px;

	 padding-left:40px;
	  padding-right:40px;
		padding-top:20px;
		padding-bottom:20px;

}
</style>
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
				<li><a href="../index.php"><span class="glyphicon glyphicon-home">&nbsp;</span>Home</a></li>
				<li><a href="../sell/index.php"><span class="glyphicon glyphicon-modal-window">&nbsp;</span>Sell</a></li>
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<!--Cart Message-->

				<div class="panel panel-primary">
					<div class="panel-heading">Placed Orders</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b><center>transaction_ID</center></b></div>
							<div class="col-md-2 col-xs-2"><b><center>Product_ID</b></div>
							<div class="col-md-2 col-xs-2"><b><center>Quantity</b></div>
							<div class="col-md-2 col-xs-2"><b><center>Amount</b></div>
							<div class="col-md-2 col-xs-2"><b><center>User_Id</b></div>
              <div class="col-md-2 col-xs-2"><b><center>Order_Date</center></b></div>


						</div>
          </div>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "merlin_books";

            // Create connection
            $con = mysqli_connect($servername, $username, $password,$db);

            // Check connection
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }

          	$total=0.00;
          	$sql = "SELECT transaction_id,product_id,qty,amount,user_id,date FROM orders NATURAL JOIN transaction ";
          	$query1 = mysqli_query($con,$sql);
          			while ($row=mysqli_fetch_array($query1)) {

                  $transaction_id=$row["transaction_id"];
          				$product_id = $row["product_id"];
          				$quantity = $row["qty"];
          				$amount = $row["amount"];
          				$user_id = $row["user_id"];
          				$date = $row["date"];
          				echo '
          					<div class="row">
          						<div class="col-md-2"><center>'.$transaction_id.'</center></div>
          						<div class="col-md-2"><center>'.$product_id.' </center></div>
          						<div class="col-md-2"><center>'.$quantity.'</center></div>
          						<div class="col-md-2"><center>Rs.'.$amount.'</center></div>
          						<div class="col-md-2"><center>'.$user_id.'</center></div>
          						<div class="col-md-2"><center>'.$date.'</center></div>
          					</div><br/>';
                  }


						?>
					<div class="panel-footer"></div>
				</div>

			<div class="col-md-2"></div>

		</div>
  </div>
</div>

		<div class="footer container-fluid">
  <div class="f1" style="float:left ; background-color:#151515">

		 100% Purchase Protection<br>
		 Privacy policy<br>
		 Terms and Conditions<br>
		 Help
    </div>

    <div class="f2" style="float:right;background-color:#151515">

			<h3 style="padding:0px;margin:0px">The	Merlin Bookstore<br></h3>
				Hall 4, <br>IIITDM Jabalpur<br>
		  	7500292838


    </div>

</div>

</body>
</html>
