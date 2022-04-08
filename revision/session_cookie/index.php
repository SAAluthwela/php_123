<?php

  if(isset($_POST['submit'])){

    $username = htmlentities($_POST['username']); 

    setcookie('username',$username,time()+3600);

    header('Location: page2.php');
  }



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session_Cookie</title>
</head>

<body>
    <center>
        <form action="<?php echo $_POST['PHP_SELF']; ?>" method="POST">

            <label for="username">Username</label>
            <input type="text" name="username">

            <input type="submit" name="submit" value="Submit">

        </form>
    </center>
</body>

</html>