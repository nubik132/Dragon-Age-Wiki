<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/styles/style.css">
    <link rel="stylesheet" href="/src/styles/select.css">
    <link rel="stylesheet" href="/src/styles/fonts.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php include("header.html"); ?>
        <main>
            <?php
            $query = $_GET['query'];
            $dir = 'states/';
            $folders = array_diff(scandir($dir), array('..', '.'));

            foreach ($folders as $folder) {
                // Пропустите все, кроме дочерних папок
                if (!is_dir($dir . $folder)) {
                    continue;
                }

                $files = array_diff(scandir($dir . $folder), array('..', '.'));

                foreach ($files as $file) {
                    if (stripos($file, $query) !== false) {
                        $state = pathinfo($file, PATHINFO_FILENAME);
                        echo '<p><a href="/states/state.php?list=' . $folder . '&state=' . $state . '" class="state-link">' . $state . '</a></p>';
                    }
                }
            }

            ?>
        </main>
    </div>
</body>

</html>