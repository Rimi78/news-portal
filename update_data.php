<?php
if (isset($_POST['update'])) {
    include "db.php";
    $article_no = $_POST['article_no'];
    $article = $_POST["article"];
    $author = $_POST["author"];
    $date = date("l jS \of F Y h:i:s A");
    $category = $_POST["category"];
    $content = $conn->real_escape_string($_POST["content"]);
    if (!empty($_FILES['uploadfile1']['name'])) {
        $image_name = $_FILES['uploadfile1']['name'];
        $dir = "images/";
        $path = $dir . $image_name;
        $tmp_name = $_FILES['uploadfile']['tmp_name'];
        move_uploaded_file($tmp_name, $path);
        $sql = "UPDATE `article` SET `Article_name`='$article ',`Author_name`='$author',`Category`='$category ',`Content`=' $content',`image_name`='$image_name',`image_dir`='$path',`Date1`='updated at : $date' WHERE Article_no=$article_no";
    } else {
        $sql = "UPDATE `article` SET `Article_name`='$article ',`Author_name`='$author',`Category`='$category ',`Content`=' $content',`Date1`='updated at : $date' WHERE Article_no=$article_no";
    }

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
