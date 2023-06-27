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
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/header.html"); ?>

        <main>

            <?php
            $list = $_GET["list"];
            $conn = new mysqli("127.0.0.1", "root", "", database: "wiki");
            $list = $_GET['list'];
            $query = 'SELECT name, type FROM state JOIN type ON state.id_type = type.id WHERE type like \'' . $list . '\'';
            $result = $conn->query($query);
            foreach ($result as $row) {
                $state_name = $row["name"];

                echo '<p><a href="/states/state.php?list=' . $list .
                    '&state=' . $state_name . '" class="state-link">' . $state_name . '</a></p>';
            }
            ?>
        </main>
        <footer></footer>
    </div>
    <script src="/src/scripts/Facade.js"></script>
</body>

</html>