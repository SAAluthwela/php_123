<?php

require('config/config.php');
 require('config/db_conn.php');

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
                <label for="title">Body</label>
                <textarea name="body" id="body" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">

        </form>

    </center>

</div>



<?php include('inc/footer.php')?>