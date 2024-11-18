<!DOCTYPE html>
<html>
<body>
    <?php
    $degreeErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $selectedCount = 0;
        $degrees = ['ssc', 'hsc', 'bsc', 'msc'];

        foreach ($degrees as $degree) 
        {
            if (isset($_POST[$degree])) 
            {
                $selectedCount++;
            }
        }

        if ($selectedCount < 2) 
        {
            $degreeErr = "Please select at least two degrees.";
        } else 
        {
            echo "<span>You have selected valid degrees.</span>";
        }

        if ($degreeErr != "") 
        {
            echo "<span>$degreeErr</span>";
        }
    }
    ?>

    <form action="" method="post">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="ssc" value="SSC"> SSC
            <input type="checkbox" name="hsc" value="HSC"> HSC
            <input type="checkbox" name="bsc" value="BSc"> BSc
            <input type="checkbox" name="msc" value="MSc"> MSc
            <hr>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
</body>
</html>
