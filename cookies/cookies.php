<?php

if (!isset($_COOKIE["id"])) {



// las cookies se pueden definir con setcookie()  y la variable global es $_cookies

setcookie(
    name: "id",
    value: "1",
    expires_or_options: time() + 60 * 60,
    path: "/",
    domain: "localhost",
    secure: false, //solo se define si la web utiliza https
    httponly: true,


);

echo "cookie creada";

};

setcookie(
    name:"subdomain",
    value:"disponible",
    path:"/php/backend/cookies",
    domain:"localhost",
    secure:false,
    httponly:true,

);

echo "<pre>";
var_dump($_COOKIE);
echo "</pre";

?>