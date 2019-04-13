<?php
include ("functions.php");
if(isset($_SESSION["uid"])){
	header("location:profile.php");
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
		<!--<meta name="viewport" content-type="width-device-width initial-scale=1">
     <link rel="stylesheet" type="text/css" href="cssstyle.css">

		<link href="footer/style.css" rel="stylesheet" type="text/css" media="all" />

		<script src="main.js"></script>-->
		<link rel="stylesheet" type="text/css" href="style.css">
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

}</style>
	</head>
<body>
<!--<div class="wait overlay">
	<div class="loader"></div>
</div>-->
<?php include("header.php") ?>
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
        <a href='index.php?cid=10'><img src="product_images/4.jpg" alt="New Arrivals" style="width:100%;height :80vh;"></a>
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
							<?php getcats();
							?>

						</li>
					</div>
				</br>
					<div id="get_category">
						<div class='nav nav-pills nav-stacked'>
							<li class='active'><a href='index.php?cid=15'><h4>Best Sellers</h4></a>


							</li>
						</div>
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
					<div class="col-md-12 col-xs-12" id="product_msg">
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
							<!--Here we get product jquery Ajax Request-->
						<!--</div>-->
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					<!--</div>
					<div class="panel-footer">&copy; 2016</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>-->
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
