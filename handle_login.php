<?php
session_start();

if (!empty($_POST["email"]) && !empty($_POST["password"])) {
    require_once('classes.php');
    
    $email = $_POST["email"];
    $password = md5($_POST["password"]); // نفس التشفير

    $user = User::login($email, $password);

    if ($user) {
        $_SESSION["user_id"] = $user->id;
        $_SESSION["user_name"] = $user->name;
        $_SESSION["user_role"] = $user->role;

        if ($user->role == "admin") {
            header("Location: frontend/admins/home.php");
        } else {
            header("Location: frontend/subscribers/home.php");
        }
        exit;
    } else {
        header("Location: index.php?msg=invalid_credentials");
        exit;
    }
} else {
    header("Location: index.php?msg=empty_field");
    exit;
}
