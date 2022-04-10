<?php
 require('config/config.php');
 require('config/db_conn.php');

// get ID
$id = mysqli_real_escape_string($conn,$_GET['id']);

//create query
 $query = 'SELECT * FROM posts WHERE id='.$id;

//Get result
$result = mysqli_query($conn,$query);

//Fetch data
$post = mysqli_fetch_assoc($result);
//var_dump($posts);

//Free Result
mysqli_free_result($result);

//close connection

mysqli_close($conn);


?>

<?php include('inc/header.php')?>
<center>
    <br>
    <a href="<?php echo ROOT_URL;?>"><button type="button" class="btn btn-success btn-sm">Back</button></a>
    <br><br>
    <h1>POST - <?php echo $id ;?></h1>

    <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
        <div class="card-header"><?php echo $post['id']?></div>
        <div class="card-body">
            <h4 class="card-title"><?php echo $post['title'];?></h4>
            <p class="card-text">Created on : <?php echo $post['created_at'];?></p>
            <p>by <?php echo $post['author'];?></p>
            <p><?php echo $post['body'];?></p>
            <hr>
        </div>
    </div>
    <br>
    <a href="<?php echo ROOT_URL;?>editPost.php?id=<?php echo $post['id'];?>"><button type="button"
            class="btn btn-primary">Edit</button></a>




</center>



<?php include('inc/footer.php')?>