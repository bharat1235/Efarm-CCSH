<?php
session_start();


echo "<script> alert('logged out'); </script>";
header("Location:index.html");
session_destroy();	



?>