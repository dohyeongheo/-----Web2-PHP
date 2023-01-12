<!doctype html>
<html>

<head>
    <title>Web2 - PHP</title>
    <meta charset="utf-8">
</head>

<body>
    <h1><a href="index.html">WEB</a></h1>
    <ol>
        <?php
        $lists = scandir('data');
        foreach ($lists as $list) {
            if (in_array($list, ['.', '..']))
                continue;
        ?>
            <li><a href="index.php?id=<?= $list ?>"><?= $list ?></a></li>
        <?php
        }
        ?>
    </ol>
    <h2><?= $_GET['id'] ?></h2>
    <?= file_get_contents("data/{$_GET['id']}") ?>
</body>

</html>
