<?php

require_once "functions/Start.php";
require_once "functions/Moneys.php";
require_once "functions/Weather.php";

$money = new Moneys();
$weather = new Weather();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/myjs.js"></script>
</head>
<body>

<div class="main">
    <div class="block1">
        <div class="main-1">
            <div class="s-1">
                <div class="s-1-1">Москва</div>
                <div class="s-1-2"><?php echo date('d.m'); ?></div>
            </div>
            <div class="s-2">
                <div class="s-2-1">Температура</div>
                <div class="s-2-2"><?php $weather->weatherNow(); ?>°</div>
            </div>
            <div class="s-3">
                <div class="s-3-1">Ощущается как</div>
                <div class="s-3-2"><?php $weather->weatherHere(); ?>°</div>
            </div>
            <div class="s-4">
                <div class="s-4-1"><?php $weather->weatherText(); ?></div>
            </div>
        </div>
        <div class="refresh">
            <div class="ref">⭮</div>
        </div>
    </div>

    <div class="list">
        <div class="window w-1">
            <div class="win-1">1 USD = <?php $money->getDollar(); ?> RUB </div>
            <div class="win-2">Доллар США</div>
        </div>
        <div class="window w-2">
            <div class="win-1">1 EUR = <?php $money->getEuro(); ?> RUB  </div>
            <div class="win-2">Евро</div>
        </div>
        <div class="window w-3">
            <div class="win-1">1 SEK = <?php $money->getSkrona(); ?> RUB  </div>
            <div class="win-2">Шведская крона</div>
        </div>
        <div class="window w-4">
            <div class="win-1">1 JPY = <?php $money->getJyen(); ?> RUB  </div>
            <div class="win-2">Японская иена</div>
        </div>
        <div class="window w-5">
            <div class="win-1">1 CAD = <?php $money->getCdol(); ?> RUB  </div>
            <div class="win-2">Канадский доллар</div>
        </div>
    </div>
</div>

</body>
</html>