<?php

require('config/config.php');
 require('config/db_conn.php');

 //add validations -       #task 01
 if(isset($_POST['submit'])){
  
    // Get from data
   $title = mysqli_real_escape_string($conn,$_POST['title']); // mysqli_real_escape_string = security step for Avoid harmful users
   $author = mysqli_real_escape_string($conn,$_POST['author']);
   $body = mysqli_real_escape_string($conn,$_POST['body']);
  
   $query = "INSERT INTO posts(title,author,body) VALUES('$title','$author','$body')";

   if(mysqli_query($conn,$query)){
     //success
       header('Location:'.ROOT_URL.'');

   }else{
    //error  
    
     echo 'ERROR :'. mysqli_error($conn);
    
   }

}

?>


<?php include('inc/header.php')?>

<div class="container">

    <center>
        <h1>ADD POST</h1>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
            </div>
            <br>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">

        </form>

    </center>

</div>



<?php include('inc/footer.php')?>