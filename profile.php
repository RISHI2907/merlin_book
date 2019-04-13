<?php

include ("functions.php");
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}


if(isset($_SESSION["uid"])){
global $con;
$sql = "SELECT count(*) AS number FROM cart WHERE user_id = '$_SESSION[uid]'";
$query = mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
$number=$row['number'];
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
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only"> navigation toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Merlin Store</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home">&nbsp;</span>Home</a></li>
			<li><a href="sell/index.php"><span class="glyphicon glyphicon-modal-window">&nbsp;</span>Sell</a></li>

			</ul>
			<form class="navbar-form navbar-left" action="profile.php" method="get" style="width:45%; ">
		        <div class="form-group" style="width:80%;" >
		          <input type="text" class="form-control" style="width:100%" placeholder="Search" id="search" name="squery">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn" name="enter" value="enter"><span class="glyphicon glyphicon-search"></span></button>
		     </form>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="cart.php" id="cart_container" ><span class="glyphicon glyphicon-shopping-cart"></span>Cart
          <?php
					echo '<span class="badge">'."$number".'</span>';
          ?>
				</a>

				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user">&nbsp;</span><?php echo "Hi,".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu">
						<li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">&nbsp;</span>Cart</a></li>
						<li class="divider"></li>
						
						<li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
					</ul>
				</li>

			</ul>
		</div>
	</div>
	</div>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	      <li data-target="#myCarousel" data-slide-to="2"></li>
	    </ol>

	    <!-- Wrapper for slides -->
			<div class="carousel-inner">

	      <div class="item active">
	        <img src="product_images/2.jpg" alt="Books 1" style="width:100%;height :80vh;">
	        <div class="carousel-caption">

	          <h3>Books are a uniquely portable magic!</h3>
	        </div>
	      </div>

	      <div class="item">
	        <a href='profile.php?cid=10'><img src="product_images/4.jpg" alt="New Arrivals" style="width:100%;height :80vh;"></a>
	        <div class="carousel-caption">
	          <h3>New Arrivals</h3>

	        </div>
	      </div>

	      <div class="item">
	        <img src="product_images/3.jpg" alt="Books 2" style="width:100%;height :80vh;">
	        <div class="carousel-caption">

	          <h3>Today a reader, tomorrow a leader.</h3>
	        </div>
	      </div>

	    </div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>

		<p><br/></p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-2 col-xs-12">
					<div id="get_category">
						<div class='nav nav-pills nav-stacked'>
							<li class='active'><a href='#'><h4>Categories</h4></a>
								<?php procats();
								?>

							</li>
						</div>


					</div>
				</br>
					<div id="get_category">
						<div class='nav nav-pills nav-stacked'>
							<li class='active'><a href='profile.php?cid=15'><h4>Best Sellers</h4></a>


							</li>
						</div>
					</div>

					<!--<div class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><h4>Categories</h4></a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Categories</a></li>
					</div> -->
					<!--<div id="get_brand">
					</div>-->
					<!--<div class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><h4>Brand</h4></a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Categories</a></li>
					</div> -->

			</div>
				<div class="col-md-8 col-xs-12">
					<div class="row">
						<?php
						if(isset($_GET['prmessage']))
						{
						 echo "<div class='alert alert-danger'>";
						echo "Product is already present in the cart";

						}
						?>
						<div class="col-md-12 col-xs-12" >

						</div>
					</div>
					<div class="panel panel-info">
						<div class="panel-heading">Products</div>
						<div class="panel-body">
							<div id="get_product">


															<?php
															if(isset($_GET['enter']))
															{
																$squery=$_GET['squery'];
																setproduct($squery);
															}
															else if(isset($_GET['cid']))
															{
																if($_GET['cid']==10)
																{
																	newarrival();
																}
																else if($_GET['cid']==15)
																{
																	bestsellers();
																}
																else
																setproducts();
															}
															else {
																getproducts();
															}
															?>

	</div>
	</div>
	</div>
	</div>
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
