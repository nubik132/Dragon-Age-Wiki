<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/styles/style.css">
    <link rel="stylesheet" href="/src/styles/fonts.css">
    <link rel="stylesheet" href="/src/styles/state.css">
    <title>Dragon Age Wiki</title>
</head>

<body>
    <div class="container">
        <?php include($_SERVER['DOCUMENT_ROOT']."/header.html"); ?>
        <main class="main">
            <?php
            $list = $_GET['list'];
            $state = $_GET['state'];
            ?>
            <h1><?php $state ?> </h1>
            <?php
                echo '<p class="state">';
                if ($list === "characters") {
                echo '<img src="/src/img/characters/' . $state . '.png" alt=' . $state . '
                    class="state-image character-image">';
                }
                if ($list === "combinations") {
                echo '<img src="/src/img/combinations/' . $state . '.png" alt=' . $state . '
                    class="state-image combination-image">';
                echo file_exists("/src/img/combinations/$state");
                }
                echo file_get_contents("$list/$state.txt");
                echo '</p>';
            ?>
        </main>
        <footer></footer>
    </div>
    <script src="/src/scripts/Facade.js"></script>
</body>

</html>