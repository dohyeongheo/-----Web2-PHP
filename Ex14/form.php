<?php
file_put_contents('data/' . $_POST['title'], $_POST['description']);
echo $_POST['title'];
echo "<br>";
echo $_POST['description'];
