
<?php
                    
                    include("dbcon.php");  
                    session_start();
                    session_unset(); 
                    session_destroy(); 

                   
          ?>	
          <script>
          window.alert("Logout Successufull");
          window.location.href="index.php"