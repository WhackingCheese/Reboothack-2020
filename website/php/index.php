<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title>Reboot</title>
</head>
<body>
    <?php
        include "inc/header.php";
    ?>
    <img src="img/values.png" alt="" class="presentation">
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
                            echo "<div class='company__header'>";
                                echo "<button id='info'>".$company['company_id']."</button>";
                            echo "</div>";
                            echo "<div class='company__player' id='cpInfo'>";
                            foreach ($company['phished'] as $phishedMan) {
                                echo "<p>".$phishedMan['username']."<br>";
                                echo $phishedMan['time']."</p>";
                            }
                            echo "</div>";
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
    <script>
    document.getElementById("info").addEventListener("click", myFunction);
    var y = 0;
    function myFunction() {
        var x = document.getElementById("cpInfo");
        if (y%2 == 1) {
            x.style.display = "none";
            y++;
        } else {
            x.style.display = "flex";
            y++;
        }
    }
    </script>
</body>
</html>