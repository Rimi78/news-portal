<?php
if (isset($_POST['submit'])) {
    include "db.php";
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * from user_login;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($username == $row["Username"] and $password == $row["Password1"]) {
                session_start();
                $_SESSION["username1"] = $username;
                header("Location: index.php");
            } else {
                echo "No account found" . mysqli_error($conn);
            }
        }
    } else {
        echo "No result found" . mysqli_error($conn);
    }
}
