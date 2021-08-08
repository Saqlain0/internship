<!DOCTYPE html>
<?php
                    
          include("dbcon.php");
                    
          session_start();
               
     
?>	

<html lang="en">
<head>
  <!--<a id="grad"></a>-->
    <title>Registration-Page</title>
    <link rel="stylesheet" href="Registration Form.css">
</head>
    <header>
        <h1>Student Registration From</h1></header>
    <nav>
      
        <a href="adminlogin.php">Admin Login</a>  
        <a href="Student Login.php">Student-Login</a>
        <a href="index.php">Home</a>
    </nav>
 
<body>
    <form action="signupcheck.php" method="POST">  
        <div class="container">  
   
        <label><b> Name: </b></label>   
      <input type="text" id="name" name="name" placeholder= "Enter your full name" size="30" required />   
      
      <label><b> USN:</b> </label>    
      <input type="text" id="usn" name="usn" placeholder="Enter your USN" size="11"required />   
      
      <div>  
      <label>   
     <b> Branch :  </b>
      </label>     
      <select name="branch"> 
      <option selected>Select an option</option>  
      <option  value="CSE">CSE</option>  
      <option value="ISE">ISE</option>  
      <option value="MCE">MCE</option>  
      <option value="ECE">ECE</option>
      </select>  
      </div> 
      
      
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

          <input type="submit" class="button button1" name="submit" value="Register" placeholder="Register">
          </div>   
      </form> 
   
</body>
<footer>
    <a href="#">FAQ</a>
    <a href="#">Contact Us</a>
    <a href="#">&copy; 2021 | RNSIT</a>
</footer>
</html>