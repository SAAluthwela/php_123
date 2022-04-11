<?

  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "phpblog";

 
  if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
        die('failed to connect!');
  }else{
      //echo "connected!";
  }




?>