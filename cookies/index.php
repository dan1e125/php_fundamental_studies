
<?php
setcookie(
    name:"header_color",
    value: "purple",
);

$color = $_COOKIE["header_color"] ?? "green";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=im, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="coockies.css">
</head>
<body>
    <header style="background: <?=$color?> ">
        <img src="imagen.jpeg" alt="imagen">
    </header>
</body>
</html>