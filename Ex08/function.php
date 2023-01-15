<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>function</h1>
    <?php
    $str = "Duis irure quis veniam fugiat anim id deserunt exercitation est.
    Ut do irure enim voluptate reprehenderit aliqua id. Ad magna aliquip occaecat eu.
    Ut exercitation sit magna eu mollit enim. Lorem incididunt officia ex et et dolore in cupidatat.
    Magna Lorem irure minim exercitation culpa dolor elit duis enim nulla consequat magna velit.";
    echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
    echo strlen($str);
    ?>
    <h2>nl2br</h2>
    <?php
    echo nl2br($str);
    ?>
</body>

</html>
