<!DOCTYPE html>
<html lang="en">
<?php
                    
                    include("dbcon.php");  
                    session_start();
                  
          ?>	
          <?php
          
          if(isset($_POST['submit']))
              {
                if($conn=="false")
                    echo"gdgfhjk";
                  $user=$_POST['username'];
                  $password=$_POST['pass'];
                  $qry="SELECT * FROM admin WHERE username='$user' and password='$password'";
                  $_SESSION['username']=$user;
                  $run=mysqli_query($conn,$qry);
                  $result=mysqli_num_rows($run);
                      if($result == 1)
                      {
                                          echo "login successfully";
                                          header('Location:teacherpage.php'); 
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
   
    <title>Teacher-Login</title>
    <link rel="stylesheet" href="Student login.css">
</head>
<header>
    <h1>Admin Login </h1></header>
    <nav>
    <a href="#">Contact Us</a>

        <a href="Student Login.php">Student Login</a>
        <a href="index.php">Home</a>

    </nav>
<body>
    

    <form action="adminlogin.php" method="POST" >   
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="pass" required>  
            <input type="submit" class="button button1" name="submit" placeholder="Login">
        </div>   
     <!--    <button onclick="window.location.href='http://127.0.0.1:5500/New%20folder%20(2)/Student%20Page.html'">Login</button> -->
    </form>     
</body>
 

</html>