<?php

 require('config/db_conn.php');

//create query
 $query = 'SELECT * FROM posts';

//Get result
$result = mysqli_query($conn,$query);

//Fetch data
$posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
//var_dump($posts);

//Free Result
mysqli_free_result($result);

//close connection

mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP blog</title>
</head>

<body>
    <center>
        <h1>POSTS</h1>
        <?php foreach($posts as $post) :?>
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-header"><?php echo $post['id']?></div>
            <div class="card-body">
                <h4 class="card-title"><?php echo $post['title'];?></h4>
                <p class="card-text">Created on : <?php echo $post['created_at'];?></p>
                <p>by <?php echo $post['author'];?></p>
                <p><?php echo $post['body'];?></p>
            </div>
        </div>


        <?php endforeach;?>

    </center>







</body>

</html>