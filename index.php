<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JANA KOTAK</title>
</head>
<body>
    <h3>JANA KOTAK</h3>
    <form method="POST">
    <table border = "1">
        <label for="width">Width : </label>
        <input type="text" name="width" id="width" size="10">
        <br><br>
        <label for="height">Height : </label>
        <input type="text" name="height" id="height" size="10">
        <br><br>

        <input type="submit" name="submit" id="submit" value="Jana">
        <br><br>
    </form>
</table>

        <?php
            if (isset($_POST['submit'])) {
                $width = $_POST["width"];
                $height = $_POST["height"];

        echo "<table border='1' width='50%' height='50%' cellpadding='2' cellspacing='0' style='text-align: center; margin: auto;'>";

        for ($row = 1; $row <= $width; $row++) {
            echo "<tr> \n";
        for ($col = 1; $col <= $height; $col++) {
            echo "<td></td> \n";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
