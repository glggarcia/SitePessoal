<?php
require 'environment.php';

global $db;
$config = array();

if(ENVIRONMENT == 'development'){
    define("BASE_URL", "http://localhost/framework/");
    $config['dbname'] = 'pessoal';
    $config['host'] = '127.0.0.1';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'Root12345!';

} else {
    define("BASE_URL", "http://localhost/framework/");
    $config['dbname'] = 'database';
    $config['host'] = '127.0.0.1';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'root1234';
}

/*
try{
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e){
    echo "Error: ".$e->getMessage();
    exit;
}

*/
