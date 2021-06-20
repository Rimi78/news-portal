<?php
session_start();
include 'db.php';
if (isset($_SESSION['search'])) {
    $search = $_SESSION['search'];
    $sql = "SELECT * FROM `article` WHERE Article_name LIKE '%{$search}%' or  Category LIKE '%{$search}%' or Content LIKE '%{$search}%' ";
    $result = mysqli_query($conn, $sql);
} else {
    $sql = "SELECT * FROM `article`";
    $result = mysqli_query($conn, $sql);
}
?>

<html>


<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>



</head>
</head>

<body class="container-md">
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
    <?php
    while ($row = mysqli_fetch_assoc($result)) {

    ?>
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-8">
                    <a href="single.php?id=<?php echo $row['Article_no'] ?>" "> <?php echo "<img src=images/" . $row['image_name'] . " class=img-fluid>" ?></a>
                <div class=" card">
                        <div class=" card-header">
                            <a href="single.php?id=<?php echo $row['Article_no'] ?>" "> <?php echo $row['Article_name'] ?></a>
            </div>
            <div class=" card-body">
                                <?php echo $row['Content'] ?>
                        </div>
                </div>
            </div>
        </div>
        </div>
    <?php }
    if (isset($_SESSION["search"])) {
        unset($_SESSION['search']);
        header("location: index.php");
    } ?>
</body>

</html>