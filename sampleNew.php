<?php

  require_once("basic_comp/header.php")  
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My form</title>
</head>
<body>
    <form action="" method="GET">
  
       <label for="name">Username</label><br>
       <input type="text" name="name" placeholder="Enter your username" required>
        
       <br>

       <label for="email">Email</label><br>
       <input type="email" name="email" placeholder="Enter user email" required>
        
       <br>
     
        <label for="password">Password</label><br>
        <input type="password" name="password" placeholder="Enter password" required>

        <br>

        <button type="submit">Submit</button>

    </form>
</body>
</html>

<?php

  $array = array(
    "name" => "supun",
     "age" => 124,
     "email" => "supunakalanka2017@gmail.com"
     );

   $filters = array(
     "name" => array(
       "filter" => FILTER_CALLBACK,
       "options" => "ucwords"
     ),
     "age" => array(
       "filter" => FILTER_VALIDATE_INT,
       "options" => array(
         "min_range" => 1,
         "max_range" => 120
       )
       ),
       "email" => array(
         "filter" => FILTER_VALIDATE_EMAIL,
         "options" => "ucwords"
       ) 
   );  

   print_r(filter_var_array($array,$filters));

?>





<?php

  require_once("basic_comp/footer.php")  
 

?>