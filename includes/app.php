<?php 
declare ( strict_types = 1);
ini_set('display_errors', 1);

require __DIR__.'/functions/functions.php';
require __DIR__.'/config/database.php';
require __DIR__.'/../vendor/autoload.php';

//Cargar Variables de Entorno
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

// Conectarnos a la base de datos
$db = connectDB();
use Model\ActiveRecord;
ActiveRecord::setDB($db);