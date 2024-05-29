<?php
session_start();
error_reporting(0);

require dirname(__DIR__) . "\process\connection.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // print_r($username); exit;
    $sql = "SELECT * FROM `user` WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    // print_r($sql    );
    // exit;

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        $userid = $user['id'];
        $role = $user['role'];

        $_SESSION["login_id"] = $userid;
        $_SESSION["username"] = $user['username'];
        $_SESSION["role"] = $role;
        if ($role == "admin") {
            header('Location:../admin/admin.php');
        }
        if ($role == "student") {
            header('Location:../timatable.php');
        }
        if ($role == "teacher") {
            header('Location:../teacher/home.php');
        }
    }
}
