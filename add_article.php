<?php
if (isset($_POST['submit'])) {
    include "db.php";
    $article = $_POST["article"];
    $author = $_POST["author"];
    $date = date("l jS \of F Y h:i:s A");
    $category = $_POST["category"];
    $content = $conn->real_escape_string($_POST["content"]);
    $image_name = $_FILES['uploadfile']['name'];
    $dir = "images/";
    $path = $dir . $image_name;
    $tmp_name = $_FILES['uploadfile']['tmp_name'];
    move_uploaded_file($tmp_name, $path);

    $sql = "INSERT INTO `article`(`Article_name`, `Author_name`, `Category`, `Content`, `image_name`, `image_dir`, `Date1`) VALUES ('$article','$author ','$category',' $content','$image_name','$path','$date')";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
