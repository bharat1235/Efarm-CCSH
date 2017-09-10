<?php
$fn   =  $_GET['fn'];
$uid  =$_GET['adh'];
$ps  =$_GET['ps'];
$mail  =$_GET['mail'];
$pno  =$_GET['phn'];
$reg  =$_GET['reg'];
$lang  =$_GET['lang'];

$con = mysqli_connect('localhost','root','','e-farm');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
	$sql = "select * from farmer where uid='$uid' ";
	$res=mysqli_query($con,$sql);
	$row = mysqli_num_rows($res);
	//echo $row;
	if( $row !=0 ){
		echo "<script> alert('You are already registered!<br><br><br><br><br>') </script>";
		header("location:index.html");
	//	die("<br><br><br>use different id or pno");
	}
	else
	{
		echo "1";
		$sql = "INSERT INTO farmer(Name,uid,passwd,pno,region,lang) VALUES 
		('$fn','$uid','$ps','$pno','$reg','$lang')";
		$result=mysqli_query($con,$sql);
		if($result){
			echo "Insertion successfull<br>";
		}
		echo "<script> alert('Registered Successfully') </script>";
	header("location:login.html");
	}
}
?>