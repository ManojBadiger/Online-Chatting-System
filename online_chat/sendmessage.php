<?php
if($_POST){
include("config.php");
$msg=$_POST['msg'];
session_start();
$name=$_SESSION['name'];
if(strlen($msg)<1)
{
	header("location:chatpagenext.php");

}
else{
$sql="INSERT INTO `chat`(`name`,`message`) VALUES('".$name."','".$msg."')";
$query=mysqli_query($con,$sql);

if($query>0)
{

	header("location:chatpagenext.php");
}

else{
	echo "something went wrong";
}
}
}