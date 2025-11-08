<?php
/*
//* variable global $_GET - metodo get

$username = $_GET["username"];
$password = $_GET["password"];
$email = $_GET["email"];
$phone = $_GET["phone"];



echo "The username is: $username, the password is: $password" , the email is: $email and the phone is: $phone;

// global $_POST - metodo POST
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$phone = $_POST["phone"];

echo "The username is: $username, the password is: $password" , the email is: $email and the phone is: $phone; 




// variable global file $_FILES

echo "<pre>";
var_dump($_FILES);
echo "</pre>";

$image = $_FILES["image"]["name"];
$download_image = $_FILES["image"]["tmp_name"];
$route_of_image = "/images-of-servers/$download_image";
move_uploaded_file($download_image, $route_of_image);
echo $image;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=img, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?= $route_of_image?>" alt="<?= $image?>">
</body>
</html>



echo "<pre>";
var_dump($_POST["name"]);
var_dump($_POST["groups"]);
print_r($_POST["persons"]);
print_r($_POST["list0"]);
print_r($_POST["list1"]);
print_r($_POST["list2"]);
var_dump($_POST["pais"]);
var_dump($_FILES["gallery"]);
echo "</pre>";


//validar informacion 

// validacion con function empty que declara si algun valor de post esta vacio o no 
var_dump(empty($_POST["username"]));
// la funcion set sirve para ver si se esta enviando un servidor

if( isset($_POST["username"]) && !empty($_POST["username"])) {
    echo "hola" . $_POST['username'];
} else {
    echo "you dont send information";
}

// pueden existir validaciones en el frontend pero es mas importante validar la informacion en el servidor

// sanitizacion de datos para limpiar la informacion enviada por el usuario para evitar que el usuario envie informacion maliciosa, payloads o scripts, etc
se puede sanitizar con HTMLENTITIES($NAME)
*/

?>
<?php
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

// limpieza con html entities
$htmlentities= htmlentities($password);

// funcion para escapar caracteres
$slashes = addslashes($password);

// filtros con regex sin numeros

$only_words = preg_replace("/\d/","", $password);

// filtros con regex solo numeros

$only_numbers = preg_replace("/\D/","",$password);

// filtro de email con filter_var()

$email = filter_var($email, FILTER_SANITIZE_EMAIL);
var_dump($email);

//filter float

$is_float = filter_var("this is not a float", FILTER_VALIDATE_FLOAT);

var_dump($isfloat);

// filter

$is_int = filter_var("esto no es un numero", FILTER_VALIDATE_INT);
var_dump($is_int);

$is_ip = filter_var("0.0.0.0", FILTER_VALIDATE_IP);

var_dump($is_ip);

$is_url = filter_var("https://wwww.google.com", FILTER_VALIDATE_URL);
var_dump($is_url);

$is_email = filter_var("daniel.com", FILTER_VALIDATE_EMAIL);

var_dump($is_email);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validacion</title>
</head>
<body>
    <p><?= " el password es: $password"?></p>
    <p><?= " filtro sin caracter $htmlentities "?></p>
    <p><?= " filtro sin caracter $slashes "?></p>
    <p><?= " filtro sin numeros $only_words "?></p>
    <p><?= " filtro solo numeros $only_numbers"?></p>
</body>
</html>


