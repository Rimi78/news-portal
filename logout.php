<?php
include "db.php";
session_start();
if (isset($_SESSION["username"])) {
    unset($_SESSION['username']);
    session_destroy();
    header("location: index.php");
} else if (isset($_SESSION["username1"])) {
    unset($_SESSION['username1']);
    session_destroy();
    header("location: index.php");
}
