<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <table align="center" cellspacing="0" cellpadding="10" border="1" width="40%">
        <tr>
            <th>
                <h3>Login</h3>
            </th>
        </tr>
        <tr>
            <td>
                <form method="post" action="loginCheck.php">
                    <fieldset>
                        <legend>Login Information</legend>
                        <table width="100%" cellpadding="5">
                            <tr>
                                <td>Username:</td>
                                <td><input type="text" name="username" value=""></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="password" value=""></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" name="submit" value="Login">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <?php
                                        if (isset($_REQUEST['msg']) && $_REQUEST['msg'] == "error") {
                                            echo "Invalid username or password!<br>";
                                            echo "Don't have an account? <a href='registration.php'>Register Now!</a>";
                                        }
                                    ?>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
