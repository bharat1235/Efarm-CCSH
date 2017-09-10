<!DOCTYPE HTML>
<html>
<head>
  <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 <!--nav bar--------------------->
 <title>E-FARM</title>
 <center><a href="index.html"><img src="logo.png" width="300" alt=""/></a></center>
 <nav>
      <div class="nav-wrapper">
  <a href="reg1.html" class="right">Signup</a>

  <a href="login.html" class="right">Login &nbsp;&nbsp; </a> &nbsp;&nbsp;
	 
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="index.html">Home</a></li>
        <li><a href="contactus.html">Contact Us</a></li>
        <li><a href="Help.html">Help</a></li>
      </ul>
    </div>
  </nav>
</head>

 <div  class="carousel">
    <a class="carousel-item" href="#one!"><img src="2.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="3.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="4.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="5.jpg"></a>
    <a class="carousel-item" href="#five!"><img src="6.jpg"></a>
  </div>

  
<?php
session_start();
$_SESSION['userid']=$uid;
$uid  =$_GET['uid'];
$ps  =$_GET['ps'];

$con = mysqli_connect('localhost','root','','e-farm');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
	$sql = "select * from farmer where uid=$uid";
	$res = mysqli_query($con,$sql);
	$rows = mysqli_num_rows($res);
	if($rows ==1){
		(int) $_SESSION['userid']=$uid;
		echo "logged in    :    ";
		echo $_SESSION['userid'];
		header("Location:userProfile.php");
	}
	else{
		header("Location:userProfile.php");
	}
	
	
}
?>






<body>
  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <div class="progress">
      <div class="indeterminate"></div>
  </div>
        
  <!--Fotter  ----------------------------------->

  <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">E-FARM</h5>
                <p class="grey-text text-lighten-4">You can use this page to get @info.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                
                <ul>
                  <li><a class="grey-text text-lighten-3" href="index.html">Home</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Service</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Contact us</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Help</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Copyright Miracle Prodogies
            </div>
          </div>



		  </footer>
		<script>
		$(document).ready(function(){
      $('.carousel').carousel();
	  });

	  </script>
	  
	  </body>
</html>