<?php
 
 //create connection
  $conn = mysqli_connect('localhost','root','','phpblog');

 //check connection
 
 if(mysqli_connect_errno()){
     //connection issue

     echo 'failed to connect to mysql'. mysqli_connect_errno();
 }else{
     //echo 'connected successully!';
 }

?>