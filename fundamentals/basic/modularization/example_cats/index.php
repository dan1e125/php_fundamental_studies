<?php

require("/home/frankenstein/Documents/programming/php/fundamentals/basic/modularization/example_cats/logic/create_cats.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?= $cat1->getname()?> dice: <?= $cat1->meow()?></li>
         <li><?= $cat2->getname()?> dice: <?= $cat2->meow()?></li>
          <li><?= $cat3->getname()?> dice: <?= $cat3->meow()?></li>
    </ul>
</body>
</html>