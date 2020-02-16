<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link href="https://fonts.googleapis.com/css?family=Michroma&display=swap" rel="stylesheet">
    <title>Reboot</title>
</head>
<body>
    <?php
        include "inc/header.php";
    ?>
    <img src="img/values.png" alt="" class="presentation">
    <div class="section">
        <div class="data_info">
            <h1>Tölfræði   úr   stýrðum   phishing   árásum</h1>
        </div>
            <div class="bodymain">
            <?php 
                echo "<div class='departments'>";
                $string = file_get_contents("database.json");
                if ($string === false) {
                    echo "DataBase not connected";
                } else {
                    $json_a = json_decode($string, true);
                    foreach ($json_a as $department) {
                        if ($department['department_id'] == "Marketing" || $department['department_id'] == 'IT') {
                            echo "<div class='department'>";
                            echo "<div class='department__header'>";
                            echo "<button id='info'>".$department['department_id']."</button>";
                            echo "</div>";
                            echo "<div class='department__player' id='cpInfo'>";
                            foreach ($department['phished'] as $phishedMan) {
                                echo "<p>".$phishedMan['username']."<br>";
                                echo $phishedMan['time']."</p>";
                            }
                            echo "</div>";
                            echo "<div class='department__anal' style='display: none'>";
                            echo "<h2>Mails Sent: ".$department['sent']."</h2>";
                            echo "<h2>Mails Clicked: ".$department['clicks']."</h2>";
                            echo "<h2>Phished Employees: ".$department['number_phished']."</h2><br>";
                            echo "<h2>Click Rate: ".number_format(($department['clicks']/$department['sent'])*100, 2, '.', '')."%</h2>";
                            echo "<h2>Phish Rate: ".number_format(($department['number_phished']/$department['sent'])*100, 2, '.', '')."%</h2>";
                            echo "</div>";
                            echo "</div>";
                        }
                    }
                }
                echo "</div>";
            ?>
        </div>
    </div>
    <script>
        var buttons = document.querySelectorAll("#info");
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].addEventListener(
                "click",
                function(e) {
                    var x = e.target.parentNode.nextSibling;
                    var y = e.target.parentNode.nextSibling.nextSibling;
                    if(x.style.display == "" || x.style.display == "none") {
                        x.style.display = "flex";
                    } else {
                        x.style.display = "none";
                    }
                    if(y.style.display == "" || y.style.display == "none") {
                        y.style.display = "block";
                    } else {
                        y.style.display = "none";
                    }
                }
            );
        }
    </script>
    <div class="section">
        <div class="data_info">
            <h1>Phishing   Vinnustofa</h1>
        </div>
        <?php
            include "inc/email.php";
        ?>
        </div>
        <div class="section">
            <div class="data_info">
                <h1>Vinnustofa   í   sýndar   veruleiki</h1>
                <video class="movie" controls>
                    <source src="img/reboot.mp4" type="video/mp4">
                </video>
                <img src="img/Skyrim_2.gif" alt="">
            </div>
        </div>
    </div>
</body>
</html>