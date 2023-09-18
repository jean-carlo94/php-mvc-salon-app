<?php 
declare ( strict_types = 1);
ini_set('display_errors', 1);

require 'funciones.php';
require 'database.php';
require __DIR__.'/../vendor/autoload.php';

//Cargar Variables de Entorno
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

// Conectarnos a la base de datos
use Model\ActiveRecord;
ActiveRecord::setDB($db);