<?php
if (isset($_POST['submit'])) {
    include "db.php";
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $con_password = $_POST["con_password"];

    $sql = "INSERT INTO `user_login`(`Firstname`, `Lastname`, `Username`, `Email`, `Password1`) VALUES ('$firstname','$lastname','$username','$email','$password')";
    if (mysqli_query($conn, $sql)) {
        session_start();
        $_SESSION["username1"] = $username;
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
