<?php

require("mail.php");

function validate($name,$email,$subject,$message,$sent) {
   return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
};

$status = "";

if (isset($_POST["sent"])){
    if(validate(...$_POST)){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $body = "La persona $name con $email te envia el siguiente mensaje: $message";
        // send email 
        sendMail($subject, $body, $email,$name, true);

        $status = "success";
    } else {
        $status = "failure";
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap" rel="stylesheet">

</head>
<body>
    <h2 id="title">CONTACT ME</h2>
    <form id="form" action="./" method="post">
        <input type="text" name="name" id="name" placeholder="name">

        <input type="email" name="email" id="email" placeholder="email">

        <input type="text" name="subject" id="subject" placeholder="subject">

        <textarea name="message" id="message" placeholder="message"></textarea>
    
        <button name="sent" id="button" type="submit">send</button>

        <?php if($status == "success"):?>
            <span>Success!</span>
        <?php endif; ?>

        <?php if($status == "failure"): ?>
            <span>Failure!</span>
        <?php endif; ?> 
    </form>
</body>
</html>