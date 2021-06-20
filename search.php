<?php
session_start();
if (isset($_POST['submit'])) {
    include "db.php";
    $search = $_POST["search"];
    $sql = "SELECT * FROM `article` WHERE Article_name LIKE '%{$search}%' or Content LIKE '%{$search}%'";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['search'] = $search;
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
