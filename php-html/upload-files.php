<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./server.php" method="post" enctype="multipart/form-data">
    <label for="image">image:</label>
    <input id="image" type="file" name=image>
    <button type="submit">send file:</button>
     </form>
</body>
</html>