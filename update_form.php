<?php

if ($_GET['update']) {
    include_once 'db.php';
    $article_no = $_GET['update'];
    $sql = "SELECT * from article where Article_no=$article_no";
    $resullt = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($resullt);
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
    <div class="container">
        <?php require "header.php"; ?>
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <form action="update_data.php?" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Article no <?php echo $article_no ?></label><br>
                        <input type="hidden" name="article_no" value=" <?php echo $article_no ?>">
                        <label>Article name</label><br>
                        <input type="text" name="article" id="articel" class="form-control" value="<?php echo $row['Article_name']; ?>" placeholder="article"><br>
                    </div>
                    <label>Author name</label><br>
                    <input type="text" name="author" id="author" class="form-control" value="<?php echo $row['Author_name']; ?>" placeholder="article"><br>
                    <label>category</label><br>
                    <input type="text" name="category" id="category" class="form-control" value="<?php echo $row['Category']; ?>" placeholder="category"><br>
                    <label>Content</label><br>
                    <textarea name="content" id="content" class="form-control" value=" " placeholder="write your content"><?php echo $row['Content']; ?></textarea><br>
                    <label>Upload image : </label>
                    <div style="width: 200px;"> <?php echo "<img src=images/" . $row['image_name'] . " class=img-fluid>" ?></div>
                    <input type="file" name="uploadfile1" value="<?php echo $row['image_name']; ?>"><br>
                    <button type="submit" name="update" id="update">Update article</button>

                </form>

            </div>

        </div>

    </div>

</body>

</html>