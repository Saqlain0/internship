<?php

	include("dbcon.php");
	session_start();
	    $aid=$_SESSION['username'];
		$qry="SELECT * FROM `admin` WHERE username='$aid' ;";
		$run=mysqli_query($conn,$qry);
		$data=mysqli_fetch_assoc($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!--<a id="grad"></a>-->
    <title>Teacher-Page</title>
    <link rel="stylesheet" href="index.css">
</head>
    <header>
        <h1>Admin Page</h1></header>
    <nav>
        <a href="#">Contact Us</a>
        <a href="adminlogin.php">Log-out</a>
        <a href="Fee Details1.php">Fee Details</a>  
        <a href="index.php">Home</a>
    </nav>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
</style>
 
<body>
 

  <h2 style="text-align:center;">Hello...! &nbsp; <?php echo $data['name'];?></h2>
  <div class="container">
  <button class="button button1" style="margin-left:45%;" onclick= "window.location='addstudent.php';">Add Students</button></div>

  <footer style="bottom:5px;position:absolute; width:100%;">
    <a href="#">FAQ</a>
    <a href="#">Contact Us</a>
    <a href="#">&copy; 2021 | RNSIT</a>
</footer>
</body>

</html>