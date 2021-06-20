<?php
if (isset($_GET['delete'])) {
    include "db.php";
    $article_no = $_GET["delete"];

    $sql = "DELETE FROM `article` WHERE Article_no=$article_no";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
