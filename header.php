<?php
session_start();
include 'db.php';
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Online news portal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <?php if (isset($_SESSION["username"])) { ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="add_admin.php">Add Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="add_articel.php">Add Aricle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="update_article.php">Update artcile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="delete_article.php">Delete article</a>
                    </li>
                <?php } else if (isset($_SESSION["username1"])) { ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">home</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="auth_login.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="user_login.php">User login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="user_signup.php">User sign up</a>
                    </li>
                <?php } ?>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php
                if (isset($_SESSION["username"])) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <?php echo $_SESSION["username"] ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>

                <?php } else if (isset($_SESSION["username1"])) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <?php echo $_SESSION["username1"] ?>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>

                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href=""> </a>
                    </li>
                <?php } ?>
            </ul>
            <form action="search.php" class="d-flex" method="POST">
                <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" name="submit">Search</button>
            </form>
        </div>
    </div>
</nav>