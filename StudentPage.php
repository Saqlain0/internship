<?php

	include("dbcon.php");
	session_start();
	    $usn=$_SESSION['usn'];
		$qry="SELECT * FROM `student` WHERE usn='$usn' ;";
		$run=mysqli_query($conn,$qry);
		$data=mysqli_fetch_assoc($run);
    empty($_POST['submit']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--<a id="grad"></a>-->
    <title>Student-Page</title>
    <link rel="stylesheet" href="student Page.css">
</head>
<style>


.container{
  width: 60%;

  padding: 10px;
}
.wrapper  {
  width: 100%;
  padding:0px;
  text-align: left;
  opacity:0.9;
}table {
  border-collapse: collapse;
  width: 50%;
  text-align:center;
  margin-left:55%
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}

}

</style>
    <header>
        <h1>Your Profile</h1></header>
    <nav>
        <a href="#">Contact Us</a>
        <a href="index.php">Log-out</a>
        <a href="Fees Form.php">Pay Fee</a>  
     
    </nav>
 
<body style="font-family: 'Quicksand', sans-serif;">

<div class="container">
<div class="wrapper" >
  <h2 style="text-align:center;margin-left:50%;">Hello...! &nbsp; <?php echo $data['name'];?></h2>
  <table style="border-color:black;">
    <tr>
      <td>Email</td>
      <td><?php echo $data['email'];?></td>
    </tr>
   
    <tr>
      <td>Phone</td>
      <td><?php echo $data['mobile'];?></td>
    </tr>
    <tr>
      <td>Branch</td>
      <td><?php echo $data['branch'];?></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><?php echo $data['gender'];?></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><?php echo $data['addr'];?></td>
    </tr>

</div>
</div>
</body>

</html>