<?php

include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Display page</title>
</head>

<body>
    <div style="margin-left: 100px ;">
        <button class="btn btn-primary my-5" style="width: 90px; height: 45px;">
            <a href="user.php" class="text-light">Add user</a>
        </button>
    </div>
    <div style="margin-left: 100px; margin-right:100px;">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Serial No:</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile No:</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "Select * from `crud`";  //table name = crud  dbname= php_crud
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo '<tr>
                       <th scope="row">' . $id . '</th>
                       <td>' . $name . '</td>
                       <td>' . $email . '</td>
                       <td>' . $mobile . '</td>
                       <td>' . $password . '</td>
                       <td>
                       <button class="btn btn-primary" style="width: 90px; height: 45px;">
                       <a href="update.php?updateid=' . $id . '" class="text-light">Update</a>
                       </button>
                       <button class="btn btn-danger" style="width: 90px; height: 45px;">
                       <a href="delete.php?deleteid=' . $id . '"  class="text-light">Delete</a>
                       </button>
                       </td>
                      </tr> ';
                    }
                }

                ?>

            </tbody>
        </table>
    </div>

</body>

</html>