<?php
function print_title()
{
    if (isset($_GET['id'])) {
        $value = $_GET['id'];
        echo strtoupper($value);
    } else {
        echo 'Welcome';
    }
}

function print_list()
{
    $lists = scandir("data");
    foreach ($lists as $list) {
        if (in_array($list, ['.', '..'])) {
            continue;
        }
        echo "<li><a href=\"index.php?id=$list\">$list</a></li>";
    }
}

function print_description()
{
    $default_value = 'Hello PHP';
    if (isset($_GET['id'])) {
        $value = $_GET['id'];
    }

    if (isset($value)) {
        if (file_exists("data/" . $value)) {
            echo file_get_contents("data/" . $value);
        } else {
            echo $default_value;
        }
    } else {
        echo $default_value;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        print_title();
        ?>
    </title>
</head>

<body>
    <h1>Web</h1>
    <ol>
        <?php
        print_list();
        ?>
    </ol>

    <a href="create.php">Create</a> <a href="">Modify</a>
    <form action="create_process.php" method="post">
        <p>
            <input type="text" name="title" placeholder="title">
        </p>
        <p>
            <textarea name="desc" placeholder="Description"></textarea>
        </p>
        <p>
            <input type="submit" value="Submit">
        </p>

    </form>

    <h2>
        <?php
        print_title();
        ?>
    </h2>

    <p>
        <?php
        print_description();
        ?>
    </p>


</body>

</html>
