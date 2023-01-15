    <?php
    function basic()
    {
        echo "Hello World";
    }

    basic();

    function sum($left, $right)
    {
        print($left + $right);
    }

    sum(2, 4);

    function sum2($left, $right)
    {
        return $left + $right;
    }

    $result = sum2(2, 4);
    echo $result;
    file_put_contents('result.txt', sum2(2, 4));
    ?>
