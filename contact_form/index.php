<?php

//   if(filter_has_var(INPUT_POST,'submit')){
//       echo 'Submitted!';
//   }

//message vars

$msg = '';
$msgClass ='';

if(filter_has_var(INPUT_POST,'submit')){ //validations
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // if(empty($email) || empty($name) || empty($message)){
    //     $msg = "Please fill all the fields";
    //     $msgClass = "alert-dismissible alert-danger";
    // }

if(!empty($email) && !empty($name) && !empty(message)){
    echo "All fields completed!";
    // $msg = "Submitted!";
    // $msgClass = "alert-dismissible alert-Success";

    if(filter_var($email,FILTER_VALIDATE_EMAIL) == false){
        //failed
  
        $msg = "Please use a valid email";
        $msgClass = "alert-dismissible alert-danger";

    }else{
        echo "<br> Valid email";

        // $msg = "Submitted!";
        // $msgClass = "alert-dismissible alert-Success";

    }
}else{
    //failed

    $msg = "Please fill all the fields";
    $msgClass = "alert-dismissible alert-danger";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact Us</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">My site</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<div class="container">
    <?php if($msg !=''): ?>
      <div class="<?php echo $msgClass;?>"><?php echo $msg?></div>
    <?php endif; ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
   <br>
   <div class="form-group">
       <label for="name">Name</label>
       <input type="text" name="name" class="form-control" value="">
   </div>
   <div class="form-group">
       <label for="email">Email</label>
       <input type="email" name="email" class="form-control" value="">
   </div>
   <div class="form-group">
       <label for="message">Message</label>
       <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
   </div>
   <br>
   <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>

</div>


</body>
</html>