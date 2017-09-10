<?php
session_start();
if( isset($_SESSION['userid'])) {
?>
<form method="post">
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
      
 <?php
 echo " <a href='userProfile.php' class='left'>History &nbsp;&nbsp; </a> &nbsp;&nbsp; ";
 
 echo " <a href='buynew.php' class='left'>Buy New &nbsp;&nbsp; </a> &nbsp;&nbsp; ";
 
 echo " <a href='help.php' class='left'>Feedback &nbsp;&nbsp; </a> &nbsp;&nbsp; ";
 
 echo " <a href='about.html' class='left'>About &nbsp;&nbsp; </a> &nbsp;&nbsp; ";
 
 
 ?>
  </nav>
</head>
<br>

</form>
<?php
}
else
{
echo "<br> <br>Click here to <a href='login.html'>Login</a>";
}
?>

<body align=center>
<br><br><br><br>


<a href="seed.php"><img class="responsive-img" src="8.jpg"width="190">Seeds</a>
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="fert.php"><img class="responsive-img" src="9.jpg" width="200">Fertilizers</a>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
 <a href="pest.php"><img class="responsive-img" src="10.jpg" width="200">Pesticides</a>
  
<br><br><br><br>
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