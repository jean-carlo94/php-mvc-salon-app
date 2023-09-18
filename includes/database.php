<?php

if(!getenv('DB_HOST')){
    echo "Error: No se pudo obtener las variables de entorno .";
};

debuguear($_ENV);

$db = mysqli_connect(
        $_ENV['HOST_DB'],
        $_ENV['USER_DB'], 
        $_ENV['PASS_DB'], 
        $_ENV['NAME_DB']
    );


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
