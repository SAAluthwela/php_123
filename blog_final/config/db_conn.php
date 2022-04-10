<?php
 
 //create connection
  $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

 //check connection
 
 if(mysqli_connect_errno()){
     //connection issue

     echo 'failed to connect to mysql'. mysqli_connect_errno();
 }else{
     //echo 'connected successully!';
 }

?>