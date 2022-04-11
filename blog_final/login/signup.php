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
                <h3 style="margin-left:30%">Signup Form</h3>
                <div class="form-group">
                    <label for="name" style="margin-bottom:5px">Username</label>
                    <input type="name" class="form-control" id="" aria-describedby="username"
                        placeholder="Enter username">
                    <!--- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small> --->
                </div>
                <div class="form-group">
                    <label for="user_id" style="margin-bottom:5px;margin-top:8px">User ID</label>
                    <input type="text" class="form-control" id="" placeholder="Enter UserID">
                </div>

                <div class="form-group">
                    <label for="password" style="margin-bottom:5px;margin-top:8px">Password</label>
                    <input type="password" class="form-control" id="" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="re-password" style="margin-bottom:5px;margin-top:8px">Re-Password</label>
                    <input type="password" class="form-control" id="" placeholder="Re-type password">
                </div>
                <div class="form-group" style="margin-top:15px">
                    <div class="form-check" style="margin:0 10px">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                        <label class="form-check-label" for="flexCheckChecked">
                            I agree to the terms and conditions
                        </label>

                    </div>

                </div>
                <br>
                <div>
                    <a href="login.php" style="text-decoration: none">
                        <div class="d-grid gap-2">
                            <button class="btn btn-lg btn-success" type="button">Submit</button>

                        </div>
                    </a>
                </div>
        </form>
    </div>



</body>

</html>