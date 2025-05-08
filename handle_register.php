<?php
session_start();
$errors = [];

// التحقق من الحقول الفارغة
if (empty($_REQUEST["name"])) $errors["name"] = "Name is required";
if (empty($_REQUEST["email"])) $errors["email"] = "Email is required";
if (empty($_REQUEST["phone"])) $errors["phone"] = "Phone is required";
if (empty($_REQUEST["pw"]) || empty($_REQUEST["pc"])) {
    $errors["pw"] = "Password and confirmation are required";
} else if ($_REQUEST["pw"] !== $_REQUEST["pc"]) {
    $errors["pc"] = "Password confirmation must match password";
}

// تنظيف البيانات
$name = htmlspecialchars(trim($_REQUEST["name"]));
$email = filter_var($_REQUEST["email"], FILTER_SANITIZE_EMAIL);
$password = htmlspecialchars($_REQUEST["pw"]);
$phone = htmlspecialchars($_REQUEST["phone"]);

// التحقق من صحة الإيميل
if (!empty($_REQUEST["email"]) && !filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL)) {
    $errors["email"] = "Invalid email format. Example: aa@pp.cc";
}

// لو مفيش أخطاء، نبدأ التسجيل
if (empty($errors)) {
    require_once('classes.php');
    try {
        $hashedPassword = md5($password); // ✅ تشفير الباسورد
        $rslt = Subscriber::register($name, $email, $hashedPassword, $phone);
        
        if ($rslt) {
            header("Location: index.php?msg=sr"); // تسجيل ناجح
        } else {
            header("Location: register.php?msg=failed_register");
        }
    } catch (Throwable $th) {
        header("Location: register.php?msg=db_error");
    }
} else {
    $_SESSION["errors"] = $errors;
    header("Location: register.php");
}
