<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];


    $sql = "insert into `crud` (name,email,mobile,password) 
     values('$name','$email','$mobile','$password')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        //echo "Inserted succesfully!";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}

?>





<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crud operation</title>
</head>

<body>
    <div class="container my-5">
        <form method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
                <!--Autocomplete off no working--->
            </div>
            <br>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>
            <br>
            <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
            </div>
            <br>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit" style="width: 90px; height: 45px;">Submit</button>
        </form>
    </div>
</body>

</html>