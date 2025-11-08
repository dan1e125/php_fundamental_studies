<?php

// first method of conditionals
$course = "curso de php";
$archived = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $course ?></title>
</head>
<body>
    <h1>Bienvenido al <?php echo $course ?></h1>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, magnam, dolore nihil labore inventore, recusandae sequi animi consequuntur nulla blanditiis eligendi aperiam quos fuga veritatis dolorem quisquam facere placeat et.</p>
    <?php
    if ($archived) {
        echo "<p>el curso esta archivado</p>";
    } else {
        echo "<p>el curso no esta archivado</p>";
    }
    ?>
</body>
</html> 

<?php 
// second method of conditionals 
$course = "curso de php";
$archived = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $course ?></title>
</head>
<body>
    <h1>Bienvenido al <?php echo $course ?></h1>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, magnam, dolore nihil labore inventore, recusandae sequi animi consequuntur nulla blanditiis eligendi aperiam quos fuga veritatis dolorem quisquam facere placeat et.</p>
    <?php if ($archived): ?> 
        <p>el curso esta archivado</p>
    <?php else: ?>
        <p>el curso no esta archivado</p>
    <?php endif; ?>
</body>
</html> 


<?php
// third method of conditionals in php with html
$course = "curso de php";
$archived = true;
$status = $archived ? "archivado" : "activo; " // esta archivado entonces muestra el mensaje "archivado" de lo contrario muestra "no esta archivado" operador ternario. 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $course ?></title>
</head>
<body>
    <h1>Bienvenido al <?php echo $course ?></h1>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, magnam, dolore nihil labore inventore, recusandae sequi animi consequuntur nulla blanditiis eligendi aperiam quos fuga veritatis dolorem quisquam facere placeat et.</p>
    <?php
    if ($archived) {
        echo "<p>el curso esta archivado</p>";
    } else {
        echo "<p>el curso no esta archivado</p>";
    }
    ?>
</body>
</html> 