<!DOCTYPE html>
<html>
<body>
    <?php
    $dateErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $date = $_POST["date"];
        $month = $_POST["month"];
        $year = $_POST["year"];

        if (empty($date) || empty($month) || empty($year)) 
        {
            $dateErr = "All fields (dd, mm, yyyy) are required.";
        } 
        else 
        {
            if (!ctype_digit($date) || !ctype_digit($month) || !ctype_digit($year)) {
                $dateErr = "Date, month, and year must be valid numbers.";
            } 
            else 
            {
                $date = (int)$date;
                $month = (int)$month;
                $year = (int)$year;
                if ($date < 1 || $date > 31) 
                {
                    $dateErr = "Day must be between 1 and 31.";
                } 
                elseif ($month < 1 || $month > 12) 
                {
                    $dateErr = "Month must be between 1 and 12.";
                } 
                elseif ($year < 1953 || $year > 1998) 
                {
                    $dateErr = "Year must be between 1953 and 1998.";
                } 
                else 
                {
                    if (!checkdate($month, $date, $year)) 
                    {
                        $dateErr = "The date is not a valid calendar date.";
                    } 
                    else 
                    {
                        echo "<span>Date of birth is valid!</span>";
                    }
                }
            }
        }
        if ($dateErr != "") 
        {
            echo "<span>$dateErr</span>";
        }
    }
    ?>

    <fieldset>
            <legend>Date of Birth</legend>
            <form action="" method="post">
            &nbsp; dd &nbsp; &nbsp; &nbsp; mm &nbsp; &nbsp; &nbsp; yyyy <br>
            <input type="text" name="date" id="" size="1">/
            <input type="text" name="month" id="" size="1">/
            <input type="text" name="year" id="" size="1">
            <hr>
            <input type="submit" value="submit" name="submit">
        </form>
    </fieldset>
</body>
</html>
