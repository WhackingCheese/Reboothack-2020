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
    <div class="bodymain">
        <?php
            $string = file_get_contents("demo_db.json");
            if ($string === false) {
                echo "DataBase not connected";
            } else {
                $json_a = json_decode($string, true);
                echo "<h1>".$json_a["company_id"]."</h1>";
                foreach ($json_a['phished'] as $phishedMan) {
                echo "<p>".$phishedMan['username']."<br>";
                echo $phishedMan['time']."</p>";
                }
            }
        ?>
    </div>
</body>
</html>