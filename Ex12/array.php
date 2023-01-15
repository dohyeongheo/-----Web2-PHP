<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $array = array(1, 2, 3, 4, 5);
    echo count($array) . "<br>";
    array_push($array, 6);
    echo count($array) . "<br>";
    

    foreach ($array as $single) {
        echo $single;
        echo "<br>";
    }



    ?>

</body>

</html>
