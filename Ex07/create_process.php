<?php
file_put_contents('data/' . $_POST['title'], $_POST['desc']);
header('Location: /2023/%EC%83%9D%ED%99%9C%EC%BD%94%EB%94%A9Web2-PHP/Ex07/index.php?id=' . $_POST['title']);
