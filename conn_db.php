<?php
$con = mysqli_connect("localhost","0fe_15157478","M3m0r3x24!","mag_db");

//$con = mysqli_connect("sql309.0fees.us","0fe_15157478","M3m0r3x24","0fe_15157478_mag_db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>