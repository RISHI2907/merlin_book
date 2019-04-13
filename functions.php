<?php

include ("db.php");
if(!isset($_session['uid']))
{
session_start();
}


function thankyou()
{
	global $con;
	$sql = "SELECT user_id,isbn,qty,price FROM cart WHERE user_id='$_SESSION[uid]' ";
	$query = mysqli_query($con,$sql);
  $tid=rand(10976,99999);

	$sql2 = "INSERT INTO transaction VALUES ($tid,$_SESSION[uid],CURDATE())";
	$query2 = mysqli_query($con,$sql2);
	while($row=mysqli_fetch_array($query)) {
		$id= $row["user_id"];
		$iscbn = $row["isbn"];
		$qty = $row["qty"];
		$price = $row["price"];
		$sql1 = "INSERT INTO orders VALUES ($tid,$iscbn,$qty,$price)";
		$query1 = mysqli_query($con,$sql1);


		}



}





function userinfo()
{
	global $con;
	$sql = "SELECT first_name,last_name,mobile,address1,address2 FROM user_info WHERE user_id='$_SESSION[uid]'";
	$query = mysqli_query($con,$sql);

	//if (isset($_POST["checkOutDetails"])) {
		if (mysqli_num_rows($query) > 0) {
				while ($row=mysqli_fetch_array($query)) {
					$first_name = ucwords($row["first_name"]);
					$last_name = ucwords($row["last_name"]);
					$mobile = $row["mobile"];
					$address1 = ucwords($row["address1"]);
					$address2 = ucwords($row["address2"]);

					echo
						"<div class='row'>
									";
										echo '
								<div class="col-md-3">'.$first_name.' '.$last_name.'</div>
								<div class="col-md-5">'.$address1.' '.$address2.'</div>
								<div class="col-md-4">'.$mobile.'</div>

							</div><br/>';
				}

}
}

function profilecart()
{
	$total=0;
	global $con;
	$sql = "SELECT b.isbn_no,b.title,b.price,b.picture,c.user_id,c.qty FROM cart c,books_info b WHERE c.isbn=b.isbn_no AND c.user_id='$_SESSION[uid]'";
	$query = mysqli_query($con,$sql);

	//if (isset($_POST["checkOutDetails"])) {
	if (mysqli_num_rows($query) > 0) {
		$message=1;


		$n=0;
		while ($row=mysqli_fetch_array($query)) {
			$n++;
			$product_id = $row["isbn_no"];
			$product_title = strtoupper($row["title"]);
			$product_price = $row["price"];
			$total=$total+$product_price;
			$product_image = $row["picture"];
			$cart_item_id = $row["user_id"];
			$qty = $row["qty"];


					echo
						"<div class='row'>
								<div class='col-md-2'>
									<div class='btn-group'>
										<a href='cart.php?value=0 &product_id=$product_id &message=$message' class='btn btn-danger remove'><span class='glyphicon glyphicon-trash'></span></a>

									";




									echo '</div>
								</div>
								<input type="hidden" name="product_id[]" value="'.$product_id.'"/>
								<input type="hidden" name="" value="'.$cart_item_id.'"/>
								<div class="col-md-3"><img class="img-responsive" src='.$product_image.'></div>
								<div class="col-md-3">'.$product_title.'</div>
								<div class="col-md-2"><input type="text" class="form-control qty" value="'.$qty.'" ></div>
								<div class="col-md-2"><input type="text" class="form-control price" value="'.$product_price.'" readonly="readonly"></div>

							</div><br/>';
				}
				echo '
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-3"></div>
						<div class="col-md-3"></div>
						<div class="col-md-2">Total</div>
						<div class="col-md-2">Rs.'.$total.'</div>
					</div><br/>';






			}
	}

	function profilecartfinal()
	{
		$total=0;
		global $con;
		$sql = "SELECT b.isbn_no,b.title,b.price,b.picture,c.user_id,c.qty FROM cart c,books_info b WHERE c.isbn=b.isbn_no AND c.user_id='$_SESSION[uid]'";
		$query = mysqli_query($con,$sql);

		//if (isset($_POST["checkOutDetails"])) {
			if (mysqli_num_rows($query) > 0) {
				$message=1;


					$n=0;
					while ($row=mysqli_fetch_array($query)) {
						$n++;
						$product_id = $row["isbn_no"];
						$product_title = strtoupper($row["title"]);
						$product_price = $row["price"];
	          $total=$total+$product_price;
						$product_image = $row["picture"];
						$cart_item_id = $row["user_id"];
						$qty = $row["qty"];

						echo
							"<div class='row'>
									<div class='col-md-1'>
										</div>
										";
										echo '
									<input type="hidden" name="product_id[]" value="'.$product_id.'"/>
									<input type="hidden" name="" value="'.$cart_item_id.'"/>
									<div class="col-md-2">
									<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-10"><img class="img-responsive" src='.$product_image.' "></div>
									<div class="col-md-1"></div>
									</div></div>
									<div class="col-md-4">'.$product_title.'</div>
									<div class="col-md-2"><input type="text" class="form-control qty" value="'.$qty.'" readonly="readonly"></div>
									<div class="col-md-2"><input type="text" class="form-control price" value="'.$product_price.'" readonly="readonly"></div>
									<div class="col-md-1">
										</div>
								</div><br/>';
					}
					echo '
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-3"></div>
							<div class="col-md-3"></div>
							<div class="col-md-2">Total</div>
							<div class="col-md-2">Rs.'.$total.'</div>
						</div><br/>';






				}
		}





function maincart(){
	global $con;
	$total=0.00;
	//if (isset($_POST["Common"])) {
	$sql = "SELECT b.isbn_no,b.title,b.price,b.picture/*,b.id,b.qty*/ FROM cart c,books_info b WHERE c.isbn=b.isbn_no AND c.user_id='$_SESSION[uid]'";
	$query = mysqli_query($con,$sql);
	//if (isset($_POST["getCartItem"])) {
		//display cart item in dropdown menu
		if (mysqli_num_rows($query) > 0) {
			$n=0;
			while ($row=mysqli_fetch_array($query)) {
				$n++;
				$product_id = $row["isbn_no"];
				$product_title = $row["title"];
				$product_price = $row["price"];
				$total=$total+$product_price;
				$product_image = $row["picture"];
				//$cart_item_id = $row["id"];
				$qty = 1;//$row["qty"];
				echo '
					<div class="row">
						<div class="col-md-2">'.$n.'</div>
						<div class="col-md-3"><img class="img-responsive" height="100" width="100" src='.$product_image.' /></div>
						<div class="col-md-3">'.$product_title.'</div>
						<div class="col-md-2">'.$qty.'</div>
						<div class="col-md-2">Rs.'.(float)$product_price.'</div>
					</div><br/>';

			}
			echo '
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-3"></div>
					<div class="col-md-3"></div>
					<div class="col-md-2">Total</div>
					<div class="col-md-2">Rs.'.$total.'</div>
				</div><br/>';

				echo'<a style="float:right;" href="cart.php" class="btn btn-warning">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></span></a>';
			  exit();
		//}
	}
}

function newarrival(){

		global $con;
	//	if(!isset($_POST["getProduct"]))
		$product_query = "SELECT * FROM books_info, new_arrivals where new_arrivals.isbn_no=books_info.isbn_no";
	  $run_query = mysqli_query($con,$product_query);
		if(mysqli_num_rows($run_query) > 0){
			while($row = mysqli_fetch_array($run_query)){
				$pro_no    = $row['isbn_no'];
				$pro_title   = strtoupper($row['title']);
				$pro_author = $row['author'];
				$pro_publisher = $row['publisher'];
				$pro_language = $row['language'];
				$pro_edition = $row['edition'];
				$pro_pages = $row['pages'];
				$pro_rating = $row['rating'];
				$pro_price = $row['price'];
				$pro_picture = $row['picture'];
				echo '
					<div class="col-md-4">';


					echo"
								<div class='panel panel-info'>
									<div class='panel-heading'><center><h6>$pro_title</h6></center></div>
									<div class='panel-body'>
										<center><img src='$pro_picture' style='width:80%; height:250px;'/></center>
									</div>
									<div class='panel-heading'>Rs.$pro_price<br/>Rating:$pro_rating
									<form action='product.php' method='post'>
										<button  style='float:right;' id='product' class='btn btn-danger btn-xs' name='tocart' value='$pro_no' >AddToCart</button>
									</form>
									</div>
								</div>

							</div>
				";
			}
		}

}



function bestsellers(){

		global $con;
	//	if(!isset($_POST["getProduct"]))
		$product_query = "SELECT * FROM books_info, bestseller where bestseller.isbn_no=books_info.isbn_no";
	  $run_query = mysqli_query($con,$product_query);
		if(mysqli_num_rows($run_query) > 0){
			while($row = mysqli_fetch_array($run_query)){
				$pro_no    = $row['isbn_no'];
				$pro_title   = strtoupper($row['title']);
				$pro_author = $row['author'];
				$pro_publisher = $row['publisher'];
				$pro_language = $row['language'];
				$pro_edition = $row['edition'];
				$pro_pages = $row['pages'];
				$pro_rating = $row['rating'];
				$pro_price = $row['price'];
				$pro_picture = $row['picture'];
				echo '
					<div class="col-md-4">';


					echo"
								<div class='panel panel-info'>
									<div class='panel-heading'><center><h6>$pro_title</h6></center></div>
									<div class='panel-body'>
										<center><img src='$pro_picture' style='width:80%; height:250px;'/></center>
									</div>
									<div class='panel-heading'>Rs.$pro_price<br/>Rating:$pro_rating
									<form action='product.php' method='post'>
										<button  style='float:right;' id='product' class='btn btn-danger btn-xs' name='tocart' value='$pro_no' >AddToCart</button>
									</form>
									</div>
								</div>

							</div>
				";
			}
		}

}


function getcats(){

	global $con;

	$category_query = "SELECT * FROM categories";
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));

	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cid = $row["cat_id"];
			$cat_name = strtoupper($row["cat_title"]);
			echo "
					<li><a class='category' href='index.php?cid=$cid'>$cat_name</a></li>
			";
		}

	}
}

function procats(){

	global $con;

	$category_query = "SELECT * FROM categories";
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));

	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cid = $row["cat_id"];
			$cat_name = strtoupper($row["cat_title"]);
			echo "
					<li><a class='category' href='profile.php?cid=$cid'>$cat_name</a></li>
			";
		}
		
	}
}

function getproducts()
{
	global $con;
//	if(!isset($_POST["getProduct"]))

	$limit = 9;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
	$product_query = "SELECT * FROM books_info LIMIT $start,$limit";
  $run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_no    = $row['isbn_no'];
			$pro_title   = strtoupper($row['title']);
			$pro_author = $row['author'];
			$pro_publisher = $row['publisher'];
			$pro_language = $row['language'];
			$pro_edition = $row['edition'];
			$pro_pages = $row['pages'];
			$pro_rating = $row['rating'];
			$pro_price = $row['price'];
			$pro_picture = $row['picture'];
			echo '
				<div class="col-md-4">';


				echo"
							<div class='panel panel-info'>
								<div class='panel-heading'><center><h6>$pro_title</h6></center></div>
								<div class='panel-body'>
									<center><img src='$pro_picture' style='width:80%; height:250px;'/></center>
								</div>
								<div class='panel-heading'>Rs.$pro_price<br/>Rating:$pro_rating
								<form action='product.php' method='post'>
									<button  style='float:right;' id='product' class='btn btn-danger btn-xs' name='tocart' value='$pro_no' >AddToCart</button>
								</form>
								</div>
							</div>

						</div>
			";
		}
	}
}



function setproducts()
{
	global $con;
	$limit = 9;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
	$cid=$_GET['cid'];
	$product_query1="SELECT cat_title FROM categories WHERE cat_id='$cid'";
  $run_query1 = mysqli_query($con,$product_query1);
	$row1 = mysqli_fetch_array($run_query1);
	$cmp=$row1['cat_title'];
	$product_query = "SELECT * FROM books_info WHERE genre='$cmp' LIMIT $start,$limit";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_no    = $row['isbn_no'];
			$pro_title   = strtoupper($row['title']);
			$pro_author = $row['author'];
			$pro_publisher = $row['publisher'];
			$pro_language = $row['language'];
			$pro_edition = $row['edition'];
			$pro_pages = $row['pages'];
			$pro_rating = $row['rating'];
			$pro_price = $row['price'];
			$pro_picture = $row['picture'];
			echo '
				<div class="col-md-4">';


				echo"
							<div class='panel panel-info'>
								<div class='panel-heading'><center><h6>$pro_title</h6></center></div>
								<div class='panel-body'>
									<center><img src='$pro_picture' style='width:80%; height:250px;'/></center>
								</div>
								<div class='panel-heading'>Rs.$pro_price<br/>Rating:$pro_rating
								<form action='product.php' method='post'>
									<button  style='float:right;' id='product' class='btn btn-danger btn-xs' name='tocart' value='$pro_no' >AddToCart</button>
								</form>
								</div>
							</div>

						</div>
			";
		}
	}
}


function setproduct($squery)
{
	global $con;
	$limit = 9;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}

	$product_query = "SELECT * FROM books_info WHERE (author LIKE '%$squery%') OR (title LIKE '%$squery%')  LIMIT $start,$limit";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_no    = $row['isbn_no'];
			$pro_title   = strtoupper($row['title']);
			$pro_author = $row['author'];
			$pro_publisher = $row['publisher'];
			$pro_language = $row['language'];
			$pro_edition = $row['edition'];
			$pro_pages = $row['pages'];
			$pro_rating = $row['rating'];
			$pro_price = $row['price'];
			$pro_picture = $row['picture'];
			echo '
				<div class="col-md-4">';


				echo"
							<div class='panel panel-info'>
								<div class='panel-heading'><center><h7>$pro_title</h7></center></div>
								<div class='panel-body'>
									<center><img src='$pro_picture' style='width:80%; height:250px;'/></center>
								</div>
								<div class='panel-heading'>Rs.$pro_price<br/>Rating:$pro_rating
								<form action='product.php' method='post'>
									<button  style='float:right;' id='product' class='btn btn-danger btn-xs' name='tocart' value='$pro_no' >AddToCart</button>
								</form>
								</div>
							</div>

						</div>
			";

		}
	}
}


?>
