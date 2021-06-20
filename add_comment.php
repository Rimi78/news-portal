<?php
if (isset($_POST['submit'])) {
    include "db.php";
    session_start();
    $article_no = $_POST['article_no'];
    if (isset($_SESSION['username1'])) {
        $username = $_SESSION['username1'];
    } else if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    }
    $comment = $conn->real_escape_string($_POST["comment"]);
    $date = date("l jS \of F Y h:i:s A");

    $sql = "INSERT INTO `comment`(`Article_no`, `Username`, `Comment`, `Date1`) VALUES ('$article_no',' $username',' $comment','$date ')";
    if (mysqli_query($conn, $sql)) {
        header("Location: single.php?id=$article_no");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
