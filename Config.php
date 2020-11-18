<?php
session_start();
require __DIR__ . "/environment.php";

$config = array();

if (ENVIRONMENT == 'development') {

    define("BASE_URL", "http://localhost/B7web_MVC/classificados/");

    $config['dbname'] = 'classificados';
    $config['dbhost']   = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    define("BASE-URL", "http://localhost/B7web_MVC/classificados/");

    $config['dbname'] = 'classificados';
    $config['host']   = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

global $db;
try {

    $db = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['dbhost'], $config['dbuser'], $config['dbpass']);

} catch (PDOException $e) {
    echo "ERRO! " .  $e->getMessage();
    exit;
}
