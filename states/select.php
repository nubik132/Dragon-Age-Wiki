<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/styles/style.css">
    <link rel="stylesheet" href="/src/styles/dragon.css">
    <link rel="stylesheet" href="/src/styles/select.css">
    <link rel="stylesheet" href="/src/styles/fonts.css">
    <title>Dragon Age Wiki</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <a href="/" class="main-page-link">
                <div class="dragon" id="dragon">
                    <img src="/src/img/header/dragon/body.png" alt="body" class="dragon-menu body" id="body">
                    <img src="/src/img/header/dragon/neck.png" alt="neck" class="dragon-menu neck" id="neck">
                    <img src="/src/img/header/dragon/upper-arm.png" alt="upper-arm" class="dragon-menu upper-arm"
                        id="upper-arm">
                    <img src="/src/img/header/dragon/lower-arm.png" alt="lower-arm" class="dragon-menu lower-arm"
                        id="lower-arm">
                    <img src="/src/img/header/dragon/upper-head.png" alt="upper-head" class="dragon-menu upper-head"
                        id="upper-head">
                    <img src="/src/img/header/dragon/lower-head.png" alt="lower-head" class="dragon-menu lower-head"
                        id="lower-head">
                </div>
                <div class="gradient"></div>
            </a>
            <div class="menu">
                <a href="#" class="menu__item">
                    Миссии
                </a>
                <a href="/states/select.php?list=characters" class="menu__item">
                    <div>Персонажи</div>
                </a>
                <a href="/states/select.php?list=items" class="menu__item">
                    <div>Предметы</div>
                </a>
                <a href="/states/select.php?list=combinations" class="menu__item">
                    <div>Навыки/Способности</div>
                </a>
            </div>
        </div>
        <main class="main">
            <?php
            $list = $_GET['list'];
            foreach (glob($list . "/*.txt") as $filename) {
                $getlen = strlen($list);
                $state = substr($filename, $getlen + 1, (strlen($filename)) - $getlen - 5);
                echo '<p><a href="state.php?list=' . $list . '&state=' . $state . '" class="state-link">' . $state . '</a></p>';
            }
            ?>
        </main>
        <footer></footer>
    </div>
    <script src="/src/scripts/Facade.js"></script>
</body>

</html>