<?php
  require_once('header.php');

?>

<?php 
// if(filter_has_var(INPUT_POST,'submit')){
//    $name = htmlspecialchars($_POST['username']);
//    $email = htmlspecialchars($_POST['email']);
//    $password = htmlspecialchars($_POST['password']);
//    $message = htmlspecialchars($_POST['message']);
   
   
//    if(!empty($name) && !empty($email) && !empty($password)){
  
//         echo "All the fields are completed!<br>";
        
//         if(filter_var($email,FILTER_VALIDATE_EMAIL) == FALSE){
//             echo "Please enter a valid email!";

//         }else{
//             echo"<br>send to SMTP server for sending process!";
//         }

//    }else{
//        echo "Fill all the fields";
//    }
// } ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>contact form</title>
</head>

<body>
    <div class="container">
        <br>
        <h4 class="sent-notification"></h4>
        <form id="myForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

            <div class=form-group>
                <label for="username">Username</label>
                <input type="text" name="username" value="<?php echo isset($_POST['username']) ? $name : '' ?>"
                    class="form-control">
            </div>
            <div class=form-group>
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $email : '' ?>"
                    class="form-control">
            </div>
            <div class=form-group>
                <label for="password">Password</label>
                <input type="password" name="password" value="<?php echo isset($_POST['password']) ? $password : '' ?>"
                    class="form-control">
            </div>

            <div class=form-group>
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"
                    class="form-control"><?php echo isset($_POST['message'])? $message : '' ?></textarea>
            </div>


            <br>
            <button type="button" onclick="sendEmail()" name="submit" class="btn btn-primary">Submit</button>
            <button type="reset" name="reset" class="btn btn-warning">Reset</button>
            <br><br><br>

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


    <script type="text/javascript">
    function sendEmail() {
        var name = $("#name");
        var email = $("#email");
        var subject = $("#subject");
        var body = $("#body");

        if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(message) && isNotEmpty(body)) {
            $.ajax({
                url: 'sendEmail.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    name: name.val(),
                    email: email.val(),
                    subject: subject.val(),
                    body: body.val()
                },
                success: function(response) {
                    $('#myForm')[0].reset();
                    $('.sent-notification').text("Message sent successfully.");
                }
            });
        }
    }

    function isNotmpty(caller) {
        if (caller.val() == "") {
            caller.css('border', '1px solid red');
            return false;

        } else {
            caller.css('border', '');
            return true;
        }
    }
    </script>
</body>

</html>

<?php
  require_once('footer.php');
?>