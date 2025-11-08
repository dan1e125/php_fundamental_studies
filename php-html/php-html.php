<?php

/*

tipos de render 

client side rendering
- la computadora del cliente construye la pagina web desde el navegador

static side generation
- utiliza frameworks los cuales compilan el codigo del programador para renderizarlo en el navegador.
server side render

- el servidor proceso todo el codigo y lo envia al navegador del cliente. 
- php usa server side rendering 
*/

$ilustraciones = [ "https://www.randomfox.com/illustration?=?pgid=l4wwekiq-d2fdac1d-312e-4201-b3e0-677db7846a0f",  "https://www.randomfox.com/illustration?pgid=l4wwekiq-833aeb5b-3ce9-498f-b302-576d055b26eb",
"https://www.randomfox.com/illustration?pgid=l4wwekiq-5ad97101-9b1a-432f-834a-d4082155b705"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Hola! levante mi servidor" ?></h1>
    <?php foreach($ilustraciones as $ilustracion) { ?>
        <img src="<?php echo $ilustracion; ?>" alt="imagenes">
    <?php } ?>
</body>
</html>