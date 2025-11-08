<?php

// tabla de usuarios en sql 

session_start();

$users = [
    array(
        "username" => "goku",
        "email" => "goku@gmail.com"
    ),

        array(
        "username" => "gohan",
        "email" => "gohan@gmail.com"
    ),
        array(
        "username" => "roshi",
        "email" => "roshi@gmail.com")
    ];

$user = $_GET["user"] ?? "";

echo "your username is" . " " . $users[$user]["username"];

$_SESSION['id'] = $user;
$_SESSION['username'] = $users[$user]["username"];
$_SESSION['email'] = $users[$user]["email"];


