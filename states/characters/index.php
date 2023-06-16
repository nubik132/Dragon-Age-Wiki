<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/styles/style.css">
    <link rel="stylesheet" href="../../src/styles/dragon.css">
    <title>Dragon Age Wiki</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="dragon" id="dragon">
                <img src="../../src/img/header/dragon/body.png" alt="body" class="dragon-menu body" id="body">
                <img src="../../src/img/header/dragon/neck.png" alt="neck" class="dragon-menu neck" id="neck">
                <img src="../../src/img/header/dragon/upper-arm.png" alt="upper-arm" class="dragon-menu upper-arm" id="upper-arm">
                <img src="../../src/img/header/dragon/lower-arm.png" alt="lower-arm" class="dragon-menu lower-arm" id="lower-arm">
                <img src="../../src/img/header/dragon/upper-head.png" alt="upper-head" class="dragon-menu upper-head" id="upper-head">
                <img src="../../src/img/header/dragon/lower-head.png" alt="lower-head" class="dragon-menu lower-head" id="lower-head">
            </div>
            <div class="gradient"></div>
            <div class="menu">
                <a href="#" class="menu__item">
                    Миссии
                </a>
                <a href="#" class="menu__item">
                    <div>Персонажи</div>
                </a>
                <a href="#" class="menu__item">
                    <div>Предметы</div>
                </a>
                <a href="#" class="menu__item">
                    <div>Навыки/Способности</div>
                </a>
            </div>
        </div>
        <main class="main">
            <?php
            foreach (glob("txt/*.txt") as $filename) {
                echo '<p><a href="' . $filename . '?a=1">' . substr($filename, 4, (strlen($filename) - 8)) . '</a></p>';
            }
            ?>
        </main>
        <footer></footer>
    </div>
    <script src="../../src/scripts/Facade.js"></script>
</body>

</html>