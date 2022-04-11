<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Login</title>
</head>

<body>

    <div class="container" style="width: 400px;height:250px;margin-top:8%; ">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">

            <fieldset>
                <h3 style="margin-left:30%">Login Form</h3>
                <div class="form-group">
                    <label for="name" style="margin-bottom:5px">Username</label>
                    <input type="name" class="form-control" id="" aria-describedby="username"
                        placeholder="Enter username">
                    <!--- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small> --->
                </div>
                <div class="form-group">
                    <label for="password" style="margin-bottom:5px;margin-top:8px">Password</label>
                    <input type="password" class="form-control" id="" placeholder="Password">
                </div>
                <br>
                <div class="form-group" style="margin-bottom:10px">
                    <div class="form-check" style="margin:0 10px">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                        <label class="form-check-label" for="flexCheckChecked">
                            Remember me
                        </label>
                        <a href="resetPassword.php" style="margin-left:30%">Forgot password?</a>
                    </div>

                </div>
                <div> <a href="index.php" style="text-decoration: none">
                        <div class="d-grid gap-2" style="margin-top:5px">
                            <button class="btn btn-lg btn-primary" type="button">Login</button>

                        </div>
                    </a></div>
                <hr>
                <div>
                    <h5 style="margin-left:45%;color:blue">OR</h5>
                    <a href="signup.php" style="text-decoration: none">
                        <div class="d-grid gap-2">
                            <button class="btn btn-lg btn-success" type="button">Signup</button>

                        </div>
                    </a>
                </div>
        </form>
    </div>



</body>

</html>