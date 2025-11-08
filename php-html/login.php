<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASSWORD MANAGER</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <form id="form" action="server.php" method="post">

        <label class="" for="username">username:</label>
        <input type="text" id="username" name="username" require><br>

        <label for="password">password:</label>
        <input type="text" name="password" id="password" require><br>

        <label for="email">email:</label>
        <input type="email" name="email" id="email" require><br>

        <button type="submit">send</button>

        <script src="validation.js"></script>
</form>
       
</body>
</html>