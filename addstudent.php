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
    <link rel="stylesheet" href="student Page.css">
</head>
    <header>
        <h1>Teacher Page</h1></header>
    <nav>
      
        <a href="adminlogin.php">Log-out</a>
        <a href="Fee Details.php">Fee Details</a>  
        <a href="index.php">Home</a>
    </nav>
<style>
  

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    margin-left:550px;
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

<link rel="stylesheet" href="Registration Form.css">

 
<body>
    <form  action="signupcheck.php" method="POST">  
        <div style="padding:50px;" class="container">  
   
        <label><b> Name: </b></label>   
      <input type="text" id="name" name="name" placeholder= "Enter your full name" size="30" required />   
      
      <label><b> USN:</b> </label>    
      <input type="text" id="usn" name="usn" placeholder="Enter your USN" size="11"required />   
      
      
      
      <div>  
      <label>   
     <b> Gender :  </b>
      </label><br>  
      <input type="radio" value="Male" name="gender"  id="gender"> Male   
      <input type="radio" value="Female" name="gender" id="gender"> Female   
      <input type="radio" value="Other" name="gender" id="gender"> Other   
      </div>  

    <div>
     <label>   
   <b>   Mobile :  </b>
      </label>  
     <input type="number"  id="mobile" name="mobile" placeholder="Enter your mobile no" size="10" required>   
    </div>
     
    <div>
        <label>
        <b> Current Address : </b> 
    </label> 
      <textarea cols="80" rows="5"  name="addr" placeholder="Enter your current Address" value="addr" required>  
      </textarea>  
    </div>
     <div>
         <label>
          <b>Email:</b> 
        </label>  
       <input type="email"  id="email" placeholder="Enter your email" name="email" required>  
    </div>
        <div>
          <label><b>Password:</b></label>  
          <input type="password"  id="password" placeholder="Enter Password" name="password" required>  
        </div>
        <div>
     <label>   
   <b>   Fee :  </b>
      </label>  
     <input type="number"  id="fee" name="fee" placeholder="Enter the fee amount" size="10" required>   
    </div>
        <div>

          <input type="submit" class="button button1" name="submit" value="Register" placeholder="Register" align="center">
          </div>   
      </form> 
   



   
</body>
</html>