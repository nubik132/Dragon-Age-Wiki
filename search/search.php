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
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/header.html"); ?>
        <main>
            <?php
            $conn = new mysqli("127.0.0.1", "root", "", database: "wiki");
            $search_query = $_GET['query'];
            $query = 'SELECT name, id_type FROM state WHERE name like \'%' . $search_query . '%\';';
            $result = $conn->query($query);
            if ($result->num_rows === 0) {
                echo "<h2>Результаты не найдены</h2>";
            } else {
                foreach ($result as $row) {
                    $state_name = $row["name"];
                    $state_type_id = $row["id_type"];

                    $query = "SELECT type FROM type WHERE id=" . $state_type_id;
                    $result = $conn->query($query);
                    $result->data_seek(0);

                    $state_type = $result->fetch_row()[0];
                    echo '<p><a href="/states/state.php?list=' . $state_type .
                        '&state=' . $state_name . '" class="state-link">' . $state_name . '</a></p>';
                }
            }
            ?>
        </main>
    </div>
</body>

</html>