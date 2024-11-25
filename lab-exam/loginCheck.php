<?php
session_start();

if (isset($_REQUEST['submit'])) {
    $userName = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    if (!isset($_SESSION['users'])) {
        $_SESSION['users'] = [];
    }

    $userFound = false;

    foreach ($_SESSION['users'] as $user) {
        if ($user['username'] === $userName && $user['password'] === $password) {
            $userFound = true;
            $_SESSION['loggedInUser'] = $user;
            break;
        }
    }

    if ($userFound) {
        echo "Login successful! Welcome, " . $_SESSION['loggedInUser']['name'];
    } else {
        header('Location: login.php?msg=error');
    }
} else {
    echo "Please log in!";
}
?>
