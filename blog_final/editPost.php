<?php

require('config/config.php');
 require('config/db_conn.php');

 //add validations -       #task 01
 if(isset($_POST['submit'])){
  
    // Get from data
   $update_id = mysqli_real_escape_string($conn,$_POST['update_id']); 
   $title = mysqli_real_escape_string($conn,$_POST['title']); // mysqli_real_escape_string = security step for Avoid harmful users
   $author = mysqli_real_escape_string($conn,$_POST['author']);
   $body = mysqli_real_escape_string($conn,$_POST['body']);
  
   $query = "UPDATE posts SET 
               title='$title',
               author='$author',
               body='$body'
                      WHERE id = {$update_id}
               ";

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

<div class="container">

    <center>
        <h1>ADD POST</h1>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $post['title']?>">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control" value="<?php echo $post['author']?>">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" id="body" cols="30" rows="10"
                    value=""><?php echo $post['body']?></textarea>
            </div>
            <input type="hidden" name="update_id" value="<?php echo $post['id']?>">
            <br>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">

        </form>

    </center>

</div>



<?php include('inc/footer.php')?>