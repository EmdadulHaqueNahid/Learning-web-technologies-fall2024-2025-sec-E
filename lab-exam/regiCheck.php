<?php
session_start();

if (isset($_REQUEST['submit'])) {
    $userName = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];
    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];

    if (!isset($_SESSION['users'])) {
        $_SESSION['users'] = [];
    }

    $finduser = false;

    foreach ($_SESSION['users'] as $user) {
        if ($user['username'] === $userName) {
            $finduser = true;
            break;
        }
    }

    if (empty($userName) || empty($password) || empty($email) || empty($name) || empty($gender) || empty($dob)) {
        echo "All fields are required!";
    } else {
        if (strlen($password) < 4) {
            echo "Password should be at least 4 characters!";
            return;
        }

        if ($password !== $confirmPassword) {
            echo "Passwords did not match!";
            return;
        }

        if ($finduser) {
            echo "Username $userName already exists! Try another username!";
        } else {
            $_SESSION['users'][] = [
                'username' => $userName,
                'email' => $email,
                'password' => $password,
                'name' => $name,
                'gender' => $gender,
                'dob' => $dob
            ];

            echo "Registration Complete! <a href='login.php'>Login Now!</a>";
        }
    }
}
?>
