<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/styles/style.css">
    <title>Dragon Age Wiki</title>
</head>

<body>
    <div class="container">
        <?php
        include("header.html");
        ?>
        <main>
            <h1 class="main-h1">Dragon Age Wiki</h1>
            <h2>Добро пожаловать на нашу вики!</h2>
            <h2><a href="/map/">Карта</a></h2>
            <h2><a href="/search/select.php?list=characters">Персонажи</a></h2>
            <h2><a href="/search/select.php?list=items">Предменты</a></h2>
            <h2><a href="/search/select.php?list=combinations">Способности</a></h2>
        </main>
        <?php
        include("footer.html");
        ?>
    </div>
</body>

</html>