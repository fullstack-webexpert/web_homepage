<?php
                  
            if (isset($_POST['submit']) && !empty($_POST['username']) 
               && !empty($_POST['pwd'])) {
				
               if ($_POST['username'] == 'hwang il chol' && 
                  $_POST['pwd'] == 'soskfk888') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'hwang il chol';
                  
                  header('location:insert2.html');
               }else {
               	session_start();
				   unset($_SESSION["username"]);
				   unset($_SESSION["pwd"]);
                  header('location:insert.html');
               }
           }
           else{header('location:insert.html');}
?>
         