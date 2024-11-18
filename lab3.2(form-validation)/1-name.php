<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation</title>
</head>
<body>
    <?php
    $nameErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $name = $_POST["name"];

        if (empty($name)) 
        {
            $nameErr = "Name is required";
        } else 

        {
            $wordCount = count(explode(" ", trim($name)));
            if ($wordCount < 2) 
            {
                $nameErr = "Name must contain at least two words";
            }

            if (!ctype_alpha($name[0])) 
            {
                $nameErr = "Name must start with a letter";
            }

            $allowed = true;
            for ($i = 0; $i < strlen($name); $i++) 
            {
                if (!ctype_alpha($name[$i]) && $name[$i] !== '.' && $name[$i] !== '-' && $name[$i] !== ' ') 
                {
                    $allowed = false;
                    break;
                }
            }
            if (!$allowed) 
            {
                $nameErr = "Can contain a-z, A-Z, period, dash only";
            }
        }

        if ($nameErr == "")
        {
            echo "Name is valid!";
        }
    }
    ?>

    <fieldset>
        <legend>NAME</legend>
        <form action="" method="post">
            <input type="text" name="name"><br>
            <hr>
            <span><?php echo $nameErr; ?></span>
            <br>
            <input type="submit" name="submit" value="submit">
        </form>
    </fieldset>
</body>
</html>
