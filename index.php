<!DOCTYPE html>
    <?php   
 	include("dbcon.php");
    session_start();
    session_unset(); 
    session_destroy();  
              
?>

<html lang="en">
<head>
    <title>Home-Page</title>
    <link rel="stylesheet" href="index.css">
</head>
    <header>
        <h1>Welcome to Online Fee Payment Portal</h1></header>
    <nav>
    
        <a href="adminlogin.php">Admin Login</a>  
        <a href="Student Login.php">Student-Login</a>
        <a href="index.php">Home</a>
    </nav>
 
<body onLoad="func();">
<script>
function func(){
    window.history.forward();
    window.location.hash="no-back-button";
}
</script>
<img style="margin-left:15%;" src="2.png" alt="" width="70%" height="700px">
   
</body>
<footer style="bottom:5px;position:absolute; width:100%;">
    <a href="#">FAQ</a>
    <a href="#">Contact Us</a>
    <a href="#">&copy; 2021 | RNSIT</a>
</footer>
</html>