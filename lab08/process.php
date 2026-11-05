<?php

session_start();

$username = $_POST["username"];
$password = $_POST["password"];
$token = $_POST["token"];

if ($username == "Zack Bach" && $password == "106395993") {

    $_SESSION["user"] = $username;
    $_SESSION["token"] = $token;

    header("Location: welcome.php?error=1");
    exit();

} else {

    header("Location: login.php?error=1");
    exit();

}

?>
