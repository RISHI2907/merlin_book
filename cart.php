<?php
include('functions.php');
if(isset($_GET['value']) && $_GET['value']==0)
{
	global $con;
	//$remove_id = $_GET["remove_id"];
   $remove_id=$_GET['product_id'];
	$sql = "DELETE FROM cart WHERE isbn = '$remove_id' AND user_id = '$_SESSION[uid]'";
  $query = mysqli_query($con,$sql);
}

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
	<style>
	.footer {
 		width: 100%;
	 text-align: center;
   background-color: #151515;
   color: white;

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
				<li><a href="index.php"><span class="glyphicon glyphicon-home">&nbsp;</span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window">&nbsp;</span>Sell</a></li>
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
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">

				<div>
					<?php if(isset($_GET['message']))
					{
						echo "<div class='alert alert-danger'>

						<b>Product is removed from cart</b></div>";
						//echo '<p class="message"> '.$_GET['message'].'</p>';

					} ?>
				</div>

				<div class="panel panel-primary">
					<div class="panel-heading">Cart Checkout</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b>Action</b></div>
							<div class="col-md-3 col-xs-3"><b>Product Image</b></div>
							<div class="col-md-3 col-xs-3"><b>Product Name</b></div>
							<div class="col-md-2 col-xs-2"><b>Quantity</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Price</b></div>


						</div>

            <?php
						profilecart();
						?>


						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-3"></div>
							<div class="col-md-3"></div>
							<div class="col-md-4">
								<form action="cart_process.php" method="post">
                 <button type="submit" class="btn btn-primary btn-lg" style="width:100%">Checkout</button>
						    </form>
						</div>
						</div>


						<!--<div class="row">
							<div class="col-md-2">
								<div class="btn-group">
									<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
									<a href="" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
								</div>
							</div>
							<div class="col-md-2"><img src='product_images/imges.jpg'></div>
							<div class="col-md-2">Product Name</div>
							<div class="col-md-2"><input type='text' class='form-control' value='1' ></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
						</div> -->
						<!--<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b>Total $500000</b>
							</div> -->
						</div>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>

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
