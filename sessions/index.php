<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>
<body>
    <?php if(isset($_SESSION["id"])): ?>
       <p>hello <?= $_SESSION["username"]?> you are logged in</p>
       <p>tu email es <?=$_SESSION["email"] ?></p>
    <?php else: ?>
       <p> <?= "you are not logged in"?> </p>
    <?php endif;?>
    
</body>

</html>