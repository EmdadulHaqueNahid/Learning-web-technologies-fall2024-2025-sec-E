<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <table align="center" cellspacing="0" cellpadding="10" border="1" width="60%">
        <tr>
            <th colspan="3">
                <h3>Welcome to the Home Page</h3>
            </th>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <h4>Hello, <?php echo $_SESSION['username']; ?>! You are now logged in.</h4>
                <p><a href="logout.php">Logout</a></p>
            </td>
        </tr>
    </table>
</body>
</html>
