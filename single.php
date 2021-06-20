<?php
require "header.php";
if (isset($_GET['id'])) {
    include 'db.php';
    $article_no = $_GET['id'];
    $sql = "SELECT * FROM `article` WHERE Article_no=$article_no ";
    $result = mysqli_query($conn, $sql);
    $sql1 = "SELECT * FROM `comment` WHERE Article_no=$article_no";
    $result1 = mysqli_query($conn, $sql1);
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

<body>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-8">
                    <?php echo "<img src=images/" . $row['image_name'] . " class=img-fluid alt= width=200px height=200px>" ?>
                    <div class="card">
                        <div class="card-header">
                            <?php echo $row['Article_name'] ?>
                        </div>
                        <div class="card-body">
                            <?php echo $row['Content'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }
    while ($row1 = mysqli_fetch_assoc($result1)) {
    ?> <div class="container">
            <div class="card-header">
                <?php echo $row1['Username'] ?>
            </div>
            <div class="card-body">
                <?php echo $row1['Comment'] ?>
            </div>
        </div>
        </div>
        </div>

    <?php }
    if (isset($_SESSION["username1"])) { ?>
        <form action="add_comment.php" method="POST">
            <div class="container">
                <div class="col-md-8">
                    <input type="hidden" name="article_no" value=" <?php echo $article_no ?>">
                    <textarea name="comment" id="comment" class="form-control" placeholder="write your comment"></textarea><br>
                    <button type="submit" name="submit" id="submit">Comment</button>
                </div>

            </div>
            </div>
            </div>
        </form>
    <?php } else if (isset($_SESSION['username'])) { ?>
        <form action="add_comment.php" method="POST">
            <div class="container">
                <div class="col-md-8">
                    <input type="hidden" name="article_no" value=" <?php echo $article_no ?>">
                    <textarea name="comment" id="comment" class="form-control" placeholder="write your comment"></textarea><br>
                    <button type="submit" name="submit" id="submit">Comment</button>
                </div>
            </div>
            </div>
            </div>
        </form>
    <?php } ?>
</body>

</html>