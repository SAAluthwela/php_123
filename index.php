<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myPHP</title>
</head>
<body>
        
     <ul>
          <li><a href="first.php">first</a></li>   
          <li><a href="second.php">second</a></li>       
          <li><a href="third.php">third</a></li>       
</ul>    
  
    <footer>
        <h1>This is footer</h1>
    </footer>


    <?php 
    
    //    $str = "Hello world        ";
       
    //    $trimmed = trim($str);
    //    var_dump($trimmed);
     
    // $value = array("hello",23,'A',33,"kendle","GIGI","2223232");


    // foreach ($value as $value) {
    //     if(is_string($value)){
    //         echo("String : ".$value."<br>");
    //         echo("\n");
    //     }
    // }
   

    // $loggedIn = false;

    // echo ($loggedIn) ? 'Logged in ' : "Logged out";

    // $label = 10;
    // $pro = 5;

    // echo "Done" . ($label > 10 ?)

    // validations and filters 

    ?>


     <?php
      
         if(filter_has_var(INPUT_POST,'email')){

            $email = $_POST['email'];

            $email = filter_var($email,FILTER_SANITIZE_EMAIL);
            echo $email.'<br>';

            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                echo 'Email is valid';
         }else{
             echo 'Email is not valid';
         }
         }
     ?>
       

      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <label for="email">Email</label>
            <input type="email" name="email">
            <button type="submit">Submit</button> 
       </form>

</body>
</html>
