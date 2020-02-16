<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/header.css">
    <title>Document</title>
</head>
<body>
    <?php
        include "inc/header.php";
        $totalsum = array();
    ?>
    <div>
        <h1>Hugmynd eitt:</h1>
    </div>
    <div class="pack">
        <div class="pack__header">
            <h1>Pakkinn til að ráða þeim öllum</h1>
        </div>
        <div class="pack__content">
            <div class="pack__content__item">
                <h3>Hústrygging</h3>
                <?php 
                    $tryg1 = 200000;
                    echo "Verð:".$tryg1;
                    array_push($totalsum, $tryg1);
                ?>
            </div>
            <div class="pack__content__item">
                <h3>Bíltrygging</h3>
                <?php 
                    $tryg2 = 200000;
                    echo "Verð:".$tryg2;
                    array_push($totalsum, $tryg2);
                ?>
            </div>
            <div class="pack__content__item">
                <h3>Dýrtrygging</h3>
                <?php 
                    $tryg3 = 30000;
                    echo "Verð:".$tryg3;
                    array_push($totalsum, $tryg3);
                ?>
            </div>
            <div class="pack__content__item">
                <h3>O.fl.</h3>
                <p>...</p>
            </div>
            <div class="pack__content__sum">
                <p> 
                    <?php
                        echo "LokaVerð: ".array_sum($totalsum);
                    ?>
                </p>
            </div>
        </div>
    </div>
    <div>
        <h1>Hugmynd Tvö:</h1>
    </div>
    <div class="pack">
        <div class="pack__header">
            <h2>modual pakka lausn</h2>
        </div>
        <div class="pack__content__item">
            <h2>Hústrygging</h2>
            <div>
                <div>
                    <h3>Gleraugu</h3>
                    <p>Uplýsingar um tryggingu</p>
                    <p>Verð:<?php?></p>
                </div>
                <input type="checkbox" name="" id="info">
            </div>
            <div>
                <div>
                    <h3>Tölvutrygging</h3>
                    <p>Uplýsingar um tryggingu</p>
                    <p>Verð:<?php?></p>
                </div>
                <input type="checkbox" name="" id="info">
            </div>
            <div>
                <div>
                    <h3>Legotrygging</h3>
                    <p>Uplýsingar um tryggingu</p>
                    <p>Verð:<?php?></p>
                </div>
                <input type="checkbox" name="" id="info">
            </div>
        </div>
        <div class="pack__content__item">
            <h2>Bíltrygging</h2>
            <div>
                <div>
                    <h3>Bílúðutrygging</h3>
                    <p>Uplýsingar um tryggingu</p>
                    <p>Verð:<?php?></p>
                </div>
                <input type="checkbox" name="" id="info">
            </div>
            <div>
                <div>
                    <h3>risputrygging</h3>
                    <p>Uplýsingar um tryggingu</p>
                    <p>Verð:<?php?></p>
                </div>
                <input type="checkbox" name="" id="info">
            </div>
            <div>
                <div>
                    <h3>Kaskó</h3>
                    <p>Uplýsingar um tryggingu</p>
                    <p>Verð:<?php?></p>
                </div>
                <input type="checkbox" name="" id="info">
            </div>
        </div>
        <div class="pack__content__item">
            <h2>Dýrtrygging</h2>
            <div>
                <div>
                    <h3>hundur 1</h3>
                    <p>Uplýsingar um tryggingu</p>
                    <p>Verð:<?php?></p>
                </div>
                <input type="checkbox" name="" id="info">
            </div>
            <div>
                <div>
                    <h3>hundur 2</h3>
                    <p>Uplýsingar um tryggingu</p>
                    <p>Verð:<?php?></p>
                </div>
                <input type="checkbox" name="" id="info">
            </div>
            <div>
                <div>
                    <h3>köttur 1</h3>
                    <p>Uplýsingar um tryggingu</p>
                    <p>Verð:<?php?></p>
                </div>
                <input type="checkbox" name="" id="info">
            </div>
        </div>
        <div class="pack__content__item">
            <h2>O.fl.</h2>
            <div>
                <div>
                    <h2>hvað</h2>
                    <p>Uplýsingar um tryggingu</p>
                    <p>Verð:<?php?></p>
                </div>
                <input type="checkbox" name="" id="info">
            </div>
            <div>
                <div>
                    <h2>sem</h2>
                    <p>Uplýsingar um tryggingu</p>
                    <p>Verð:<?php?></p>
                </div>
                <input type="checkbox" name="" id="info">
            </div>
            <div>
                <div>
                    <h2>er</h2>
                    <p>Uplýsingar um tryggingu</p>
                    <p>Verð:<?php?></p>
                </div>
                <input type="checkbox" name="" id="info">
            </div>
        </div>
        <div class="pack__content__sum">
            <p> 
                <?php
                    echo "LokaVerð: ".array_sum($totalsum);
                ?>
            </p>
        </div>
    </div>
    <script>
        var checks = document.querySelectorAll("#info");
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].addEventListener(
                "checked",
                function(e) {
                }
            );
        }
    </script>
</body>
</html>