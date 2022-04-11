<?php
 require('config/config.php');
 require('config/db_conn.php');

// check for submit
 if(isset($_POST['delete'])){
  
    // Get from data
   $delete_id = mysqli_real_escape_string($conn,$_POST['delete_id']);  
  
  
   $query = "DELETE FROM posts WHERE id={$delete_id}";

   if(mysqli_query($conn,$query)){
     //success
       header('Location:'.ROOT_URL.'');

   }else{
    //error  
    
     echo 'ERROR :'. mysqli_error($conn);
    
   }

}


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
            <div style="margin-left:-150px">
                <form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <input type="hidden" name="delete_id" value="<?php echo $post['id'];?>">
                    <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                </form>
            </div>

            <div style="margin-left:150px;margin-top:-38px">
                <a href="<?php echo ROOT_URL;?>editPost.php?id=<?php echo $post['id'];?>"><button
                        style="padding:6px 20px" type="button" class="btn btn-secondary">Edit</button></a>
            </div>

        </div>
    </div>



    <br>










</center>



<?php include('inc/footer.php')?>