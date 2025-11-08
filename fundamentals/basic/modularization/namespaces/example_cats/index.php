<?php

require("/home/frankenstein/Documents/programming/php/fundamentals/basic/modularization/example_cats/logic/create_cats.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cats</title>
</head>
<body>
    <ul>
        <li><?= $cat1->getname()?> fue adoptado por: <?= $cat1_adopted->GetAdopted_by()?> dice: <?= $cat1->meow()?></li>
         <li><?= $cat2->getname()?> fue adoptado por: <?= $cat2_adopted->GetAdopted_by()?> dice: <?= $cat2->meow()?></li>
          <li><?= $cat3->getname()?>fue adoptado por: <?= $cat3_adopted->GetAdopted_by()?> dice: <?= $cat3->meow()?></li>

        
    </ul>
</body>
</html>