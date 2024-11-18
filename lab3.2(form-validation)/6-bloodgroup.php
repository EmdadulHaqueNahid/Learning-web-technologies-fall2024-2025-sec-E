<!DOCTYPE html>
<html>
<body>
    <?php
    $groupErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $group = $_POST["group"];
        if (empty($group)) 
        {
            $groupErr = "Please select a blood group.";
        } 
        else 
        {
            echo "<span>You have selected: $group</span>";
        }
        if ($groupErr != "") 
        {
            echo "<span>$groupErr</span>";
        }
    }
    ?>

    <form action="" method="post">
        <fieldset>
            <legend>Blood Group</legend>
            <select name="group" id="">
            <option value="">Select</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="AB+">AB+</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
        </select>
        <hr>
        <input type="submit" value="submit" name="submit">
        </fieldset>
    </form>
</body>
</html>
