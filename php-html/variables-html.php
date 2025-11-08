<!-- 
 
<?php
$course = "curso de php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $course ?></title>
</head>
<body>
    <h1>Bienvenido al curso de php</h1>
</body>
</html> 

// second method of put variables in html
 
 
<?php
$course = "curso de php y laravel";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course ?></title>
</head>
<body>
    <h1>Bienvenido al <?= $course ?></h1>
</body>
</html> 