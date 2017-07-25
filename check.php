<?php
                  
            if (isset($_POST['submit']) && !empty($_POST['username']) 
               && !empty($_POST['pwd'])) {
				
               if ($_POST['username'] == 'Towards the world' && 
                  $_POST['pwd'] == 'zkfqkfka666') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'Towards the world';
                  
                  header('location:index.html');
               }else {
               	session_start();
				   unset($_SESSION["username"]);
				   unset($_SESSION["pwd"]);
                  header('location:work.html');
               }
           }
           else{header('location:work.html');}
?>
         