<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/styles/style.css">
    <link rel="stylesheet" href="/src/styles/select.css">
    <link rel="stylesheet" href="/src/styles/fonts.css">
    <title>Dragon Age Wiki</title>
</head>

<body>
    <div class="container">
        <?php include($_SERVER['DOCUMENT_ROOT']."/header.html"); ?>

        <main>
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