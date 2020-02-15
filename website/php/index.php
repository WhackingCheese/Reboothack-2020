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
            echo "<div>";
            $string = file_get_contents("database.json");
            if ($string === false) {
                echo "DataBase not connected";
            } else {
                $json_a = json_decode($string, true);
                foreach ($json_a as $company) {
                    if ($company['company_id'] == 'company_0') {
                        echo "<div class='company'>";
                        echo "<h1>".$company['company_id']."</h1>";
                        foreach ($company['phished'] as $phishedMan) {
                            echo "<p>".$phishedMan['username']."<br>";
                            echo $phishedMan['time']."</p>";
                        }
                        echo "<div class='company__anal'>";
                        echo "<h2>Mails Sent: ".$company['sent']."</h2>";
                        echo "<h2>Mails Clicked: ".$company['clicks']."</h2>";
                        echo "<h2>Phished Employees: ".$company['number_phished']."</h2><br>";
                        echo "<h2>Click Rate: ".number_format(($company['clicks']/$company['sent'])*100, 2, '.', '')."%</h2>";
                        echo "<h2>Phish Rate: ".number_format(($company['number_phished']/$company['sent'])*100, 2, '.', '')."%</h2>";
                        echo "</div>";
                        echo "</div>";
                    }
                }
            }
            echo "</div>";
        ?>
    </div>
</body>
</html>