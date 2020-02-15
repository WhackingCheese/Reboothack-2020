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
                //print_r($json_a);
                foreach ($json_a as $company) {
                    echo "<div class='company'>";
                        if ($company['company_id'] == 'company_0') {
                            echo "<h1>".$company['company_id']."</h1>";
                            foreach ($company['phished'] as $phishedMan) {
                                echo "<p>".$phishedMan['username']."<br>";
                                echo $phishedMan['time']."</p>";
                            }
                            echo "<div class='company__anal'>";
                                echo "<p>Mails sent:".$company['sent']."</p>";
                                echo "<p>Mails Clicked:".$company['clicks']."</p>";
                                echo "<p>Phished numbers:".$company['number_phished']."</p>";
                            echo "</div>";
                        }
                    echo "</div>";
                }
            }
            echo "</div>";
        ?>
    </div>
</body>
</html>