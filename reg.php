<?php
$fn   =  $_GET['fn'];
$uid  =$_GET['adh'];
$ps  =$_GET['ps'];
$mail  =$_GET['mail'];
$pno  =$_GET['phn'];
$reg  =$_GET['reg'];
$lang  =$_GET['lang'];

$con = mysqli_connect('localhost','root','','e-form');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if( ! strpos($mid,'@gmail.com') )
	$mid=$mid.'@gmail.com';
  
$sql = "select * from farmers where Aadhar='$uid' or Mobile='$pno' ";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_row($result) ;
if( $row ){
	echo "<script> alert('voter already exists') </script>";
	echo "votere details<br>";
	echo " V_Id: {$row[0]} <br>";
	echo " mail: {$row[3]} ";
	echo " Pno : {$row[4]} ";
	die("<br><br><br>use different id or pno");
}
else
{
	$sql = "select * from voterdb  ";
	$result=mysqli_query($con,$sql);
	$c = mysqli_num_rows($result);
	$c+=1;
	if( $c < 10 )
	$c='146C1A050'.$c;
	else
		$c='146C1A05'.$c;
$sql = "INSERT INTO voterdb(id,name,paswd,mid,pno,area) VALUES 
('$c','$name','$pwd','$mid','$pno','$area')";
$result=mysqli_query($con,$sql);
if($result){
	echo "Insertion successfull<br>";
echo " Id : {$c} <br>";
echo " password: {$pwd} ";
}
//header("location:vote.php?id=$id&name=$name&party=$party");
}
?>