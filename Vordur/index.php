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
                <p></p>
            </div>
            <div class="pack__content__sum">
                <p>
                    <?php
                        echo array_sum($totalsum);
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>