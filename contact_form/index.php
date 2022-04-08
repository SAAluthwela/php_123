<!----php script---->


<?php

                                                          //   if(filter_has_var(INPUT_POST,'submit')){
                                                          //       echo 'Submitted!';
                                                          //   }

//message vars

//SMTP server password
//wbrielwgvpicrwss
//smtp.gmail.com

$msg = '';
$msgClass ='';

//validations

if(filter_has_var(INPUT_POST,'submit')){ 
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

if(!empty($email) && !empty($name) && !empty($message)){

    echo "All fields completed!";

    if(filter_var($email,FILTER_VALIDATE_EMAIL) == false){
        $msg = "Please use a valid email";
        $msgClass = "alert-dismissible alert-warning";
    }else{
        //send mail
      
         $toEmail = 'supunakalanka2017@gmail.com';
         $subject = 'Contact Request from'.$name;
         $body = '<h2>Contact Request</h2>
            <h4>Name</h4><p>'.$name.'</p>
            <h4>Email</h4><p>'.$email.'</p>
            <h4>Message</h4><p>'.$message.'</p>
            ';

            //Email headers
            $headers = "MIME-version: 1.0"."\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" ."\r\n";

            //Additional headers
            $headers .= "From:".$name."<".$email.">"."\r\n";

            if(mail($toEmail,$subject,$body,$headers)){
 
               $msg = 'Your Email has been sent!';
               $msgClass = "alert-dismissible alert-success";


            }else{

              $msg = 'Error Sending!';
               $msgClass = "alert-dismissible alert-danger";

            }
         
    }
}else{
    $msg = "Please fill all the fields";
    $msgClass = "alert-dismissible alert-danger";
}

}


?>



<!--html form--->

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
            <a class="navbar-brand" href="index.php">Test Contact Form</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
                aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="container">
        <?php if($msg !=''): ?>
        <div class="<?php echo $msgClass;?>"><?php echo "<br>".$msg."<br>" ?></div>
        <?php endif; ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <br>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control"
                    value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control"
                    value="<?php echo isset($_POST['email']) ? $email : '';  ?>">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="" cols="30" rows="10"
                    class="form-control"><?php echo isset($_POST['message']) ? $message : '' ?></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <button type="reset" name="reset" class="btn btn-warning">Reset</button>
        </form>

    </div>


</body>

</html>