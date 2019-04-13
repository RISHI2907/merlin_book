<?php
session_start();
include("db.php");
global $con;

if(isset($_POST['sell']))
{
$isbn=$_POST['ISBN'];
//echo $isbn;
$title=$_POST['Title'];
//echo $title;
$author=$_POST['Author'];
//echo '<br>'.$author;
$publisher=$_POST['Publisher'];
//echo '<br>'.$publisher;
$language=$_POST['Language'];
//echo '<br>'.$language;
$category=$_POST['Category'];
//echo '<br>'.$category;
$edition=$_POST['Edition'];
//echo '<br>'.$edition;
$pages=$_POST['pages'];
//echo '<br>'.$pages;
$rating=$_POST['rating'];
//echo '<br>'.$rating;
$price=$_POST['price'];

$binding=$_POST['binding'];


$filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="../image/".$filename;
move_uploaded_file($tempname,$folder);

$filename="image/".$filename;

$quantity=$_POST['quantity'];
$uid=$_SESSION['uid'];

$sql="INSERT INTO seller VALUES ('$uid','$isbn','$title','$author','$publisher','$language','$category','$edition','$pages','$rating','$price','$binding','$filename','$quantity')";
//echo "true";
//$sql="INSERT INTO books_info VALUES ($isbn,$title,$author,$publisher,$language,$category,$edition,$pages,$rating,$price,$binding,$filename,$quantity)";
$query = mysqli_query($con,$sql);
//if($query)
//echo "false";
header("Location:../profile.php");
}





 ?>
