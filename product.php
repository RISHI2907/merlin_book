<?php
 session_start();

  if(!isset($_SESSION['uid']))
  {
    header("Location:login_form.php");
  }
  else {

  include("db.php");
  if(isset($_POST["tocart"])){
    global $con;

		$pro_no = $_POST["tocart"];


		if(isset($_SESSION['uid'])){

		//echo $_SESSION['uid'];
    $user_id=$_SESSION['uid'];

	  $sql = "SELECT * FROM cart WHERE isbn = '$pro_no' AND user_id = '$user_id' ";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0){
      $prmessage=1;
      header("Location:profile.php?prmessage=$prmessage");
      exit();

		} else {
      $sql1 = "SELECT price FROM books_info WHERE isbn_no = '$pro_no' ";
      $run_query1 = mysqli_query($con,$sql1);
      $row1 = mysqli_fetch_array($run_query1);
      $price=$row1['price'];
			$sql = "INSERT INTO cart
			(`isbn`, `user_id`, `qty`,`price`)
			VALUES ('$pro_no','$user_id','1','$price')";
			if(mysqli_query($con,$sql)){
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is Added..!</b>
					</div>
				";
			}
      header('Location:profile.php');
		}
		}

  }


}


/*
  if(isset($_SESSION["uid"])){

  $user_id = $_SESSION["uid"];

  $sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
  $run_query = mysqli_query($con,$sql);
  $count = mysqli_num_rows($run_query);
  if($count > 0){
    echo "
      <div class='alert alert-warning'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <b>Product is already added into the cart Continue Shopping..!</b>
      </div>
    ";//not in video
  } else {
    $sql = "INSERT INTO `cart`
    (`p_id`, `ip_add`, `user_id`, `qty`)
    VALUES ('$p_id','$ip_add','$user_id','1')";
    if(mysqli_query($con,$sql)){
      echo "
        <div class='alert alert-success'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <b>Product is Added..!</b>
        </div>
      ";
    }
  }
  }else{
    $sql = "SELECT id FROM cart WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
    $query = mysqli_query($con,$sql);
    if (mysqli_num_rows($query) > 0) {
      echo "
        <div class='alert alert-warning'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <b>Product is already added into the cart Continue Shopping..!</b>
        </div>";
        exit();
    }
    $sql = "INSERT INTO `cart`
    (`p_id`, `ip_add`, `user_id`, `qty`)
    VALUES ('$p_id','$ip_add','-1','1')";
    if (mysqli_query($con,$sql)) {
      echo "
        <div class='alert alert-success'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <b>Your product is Added Successfully..!</b>
        </div>
      ";
      exit();
    }

  }

*/
?>
