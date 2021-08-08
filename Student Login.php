<!DOCTYPE html>
<html lang="en">
<?php
                    
                    include("dbcon.php");  
                    session_start();
                   
          ?>	
          <?php
          
          if(isset($_POST['submit']))
              {
                  
                  $usn=$_POST['usn'];
                  $password=$_POST['password'];
            
                  $qry="SELECT * FROM student WHERE usn='$usn' and password='$password';";
                  $_SESSION['usn']=$usn;
                  $run=mysqli_query($conn,$qry);
                  $row=mysqli_num_rows($run);
         



                      if($row == 1)
                      {
          
                                          echo "login successfully";
                                          header('Location:StudentPage.php'); 
                                          exit;
                              
                                  
                      }
                      ?>
                       <h3 align="center" style="color:red">Incorrect Username/Password<h5 align="center">Login with right credentials</h5></h3>
                      <?php 
                  }     
                        
                else
                
                {
                    ?>
                   
                     <?php goto J;
                  
                }
              J : empty($_POST['submit']);    ?>
<head>
   
    <title>Student-Login</title>
    <link rel="stylesheet" href="Student login.css">
</head>
<header>
    <h1>Student Login </h1></header>
    <nav>
    

    <a href="#">Contact Us</a>
       
        <a href="adminlogin.php">Admin Login</a>
        
        <a href="index.php">Home</a>
    </nav>
<body>
    

    <form action="Student Login.php" method="POST" >   
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="usn" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <input type="submit" class="button button1" name="submit" placeholder="Login">
        </div>   
    
    </form>     
</body>

</html>