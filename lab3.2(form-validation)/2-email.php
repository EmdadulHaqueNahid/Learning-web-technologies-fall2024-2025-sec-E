<!DOCTYPE html>
<html>
<body>
    <?php
    $emailErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $email = $_POST["email"];

        if (empty($email)) {
            $emailErr = "Email is required";
        } else {
            $atPosition = strpos($email, '@');
            $dotPosition = strrpos($email, '.');

            if ($atPosition === false || $dotPosition === false || $atPosition < 1 || $dotPosition < $atPosition + 2 || $dotPosition >= strlen($email) - 1) 
            {
                $emailErr = "Invalid email format ";
            }
        }

        if ($emailErr == "") 
        {
            echo "<span>Email is valid!</span>";
        }
    }
    ?>

    <fieldset>
        <legend>EMAIL</legend>
        <form action="" method="post">
            <input type="text" name="email">
            <button type="button" title="anything@gmail.com">i</button>
            <br>
            <hr>
            <span><?php echo $emailErr; ?></span>
            <input type="submit" value="submit">
        </form>
    </fieldset>
</body>
</html>
