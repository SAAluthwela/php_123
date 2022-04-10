<?php

require('config/config.php');
 require('config/db_conn.php');

//create query
 $query = 'SELECT * FROM posts ORDER BY created_at DESC';

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

<?php include('inc/header.php')?>

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
            <a class="btn btn-info" href="<?php echo ROOT_URL;?>post.php?id=<?php echo $post['id'];?>">Read
                More</a>
        </div>
    </div>


    <?php endforeach;?>

</center>


<?php include('inc/footer.php')?>