<?php 

// rewuire

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PHP blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo ROOT_URL?>">Home
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo ROOT_URL?>addPost.php">Add Post
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>


            </ul>

        </div>
    </div>
</nav>