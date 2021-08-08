
<?php
                    
          include("dbcon.php");
                    
          session_start();
               

error_reporting(E_ERROR | E_WARNING | E_PARSE);
	if(isset($_POST['submit']))
	{

		$usn=$_POST['usn'];
        $name=$_POST['name'];
		$gender=$_POST['gender'];
        $mobile=$_POST['mobile'];
        $addr=$_POST['addr'];
        $email=$_POST['email'];
    $password=$_POST['password'];
    $fee=$_POST['fee'];
    $aid=$_SESSION['username'];
        $qry="SELECT * FROM `admin` WHERE username='$aid' ;";
		$run=mysqli_query($conn,$qry);
		$data=mysqli_fetch_assoc($run); 
        $admin=$data['name'];
        $branch=$data['branch'];
		$qry1="select `usn` from student where usn='$usn';";
        $run1=mysqli_query($conn,$qry1);
        $row1=mysqli_num_rows($run1);
        
		if($row1==0){
            
            
           
            $qry2="INSERT INTO student(`usn`,`name`,`gender`,`mobile`,`addr`,`email`,`password`,`fee`,`admin`,`branch`) VALUES 
            ('$usn','$name','$gender','$mobile','$addr','$email','$password','$fee','$admin','$branch')";
            $run2=mysqli_query($conn,$qry2);
            $_SESSION['f']=1;?>   
            <script>window.alert("Successfully added..!!");
            window.location.href='addstudent.php';</script>
            <?php
               exit();
        }
            else
            {
                $_SESSION['f']=0;
                alert("Failed to add student");  
            exit();
        
            }
        }
else
{
    echo "Failed To Connect";
}
?>	

