<!DOCTYPE html>
<html>
<body>
    <?php
    $genderErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if (empty($_POST["gender"])) 
        {
            $genderErr = "Please select a gender.";
        } 
        else 
        {
            $gender = $_POST["gender"];
            echo "<span>Gender selected: $gender</span>";
        }
        if ($genderErr != "") 
        {
            echo "<span>$genderErr</span>";
        }
    }
    ?>

    <form action="" method="post">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other
            <hr>
            <input type="submit" name="submit" value="submit">
        </fieldset>
        
    </form>
</body>
</html>
