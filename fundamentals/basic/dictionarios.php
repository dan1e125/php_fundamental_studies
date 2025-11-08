<?php
$course = [
    'title' => 'curso de php y laravel',
    'description' => 'curso especializado',
    'subtitle' => 'laravelito',

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course['title']?></title>
</head>
<body>
    <p><?= $course['description'] ?></p>
    <p><?= $course['subtitle'] ?></p>
    </body>
</html>
